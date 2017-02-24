<?php

namespace workers\workers\email;

class EmailWorkerThread extends Thread
{
    private $queueName;
    private $credentials;

    public function __construct($credentials, $queueName)
    {
        $this->queueName = $queueName;
        $this->credentials = $credentials;
    }

    public function run()
    {
        $this->synchronized(function ($thread) {
            if (!$thread->done) {
                $thread->wait();
            }

        }, $this);
    }
}

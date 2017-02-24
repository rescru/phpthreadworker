<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $emailWorkerThread;
    private $credentials;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->emailWorkerThread = new emailWorkerThread();
        $this->credentials = new Credentials();
    }

    /** @BeforeFeature */
    public static function prepareForTheFeature()
    {
        // clean database or do other preparation stuff
    }

    /**
     * @Given I have a username, password and key
     */
    public function iHaveAUsernamePasswordAndKey()
    {
        $this->credentials->username = '';
        $this->credentials->password = '';
        $this->credentials->key = '';
    }

    /**
     * @When I initialise the queue
     */
    public function iInitialiseTheQueue()
    {
        throw new PendingException();
    }

    /**
     * @Then I should get a handle on the queue for using it
     */
    public function iShouldGetAHandleOnTheQueueForUsingIt()
    {
        PHPUnit_Framework_Assert::assertTrue(false);

    }

    /**
     * @Given an email queue is defined
     */
    public function anEmailQueueIsDefined()
    {
        throw new PendingException();
    }

    /**
     * @When I have the handle
     */
    public function iHaveTheHandle()
    {
        throw new PendingException();
    }

    /**
     * @Then I should be able to access the queue
     */
    public function iShouldBeAbleToAccessTheQueue()
    {
        throw new PendingException();
    }

    /**
     * @Given there is an email item
     */
    public function thereIsAnEmailItem()
    {
        throw new PendingException();
    }

    /**
     * @When it arrives on the queue
     */
    public function itArrivesOnTheQueue()
    {
        throw new PendingException();
    }

    /**
     * @Then I should send the email
     */
    public function iShouldSendTheEmail()
    {
        throw new PendingException();
    }

    /**
     * @Then remove the item off the queue
     */
    public function removeTheItemOffTheQueue()
    {
        throw new PendingException();
    }

    /**
     * @Given no other EmailWorkerThreads are running
     */
    public function noOtherEmailworkerthreadsAreRunning()
    {
        throw new PendingException();
    }

    /**
     * @When I see no EmailWorkerThreads are running
     */
    public function iSeeNoEmailworkerthreadsAreRunning()
    {
        throw new PendingException();
    }

    /**
     * @Then I should start a single instance of an EmailWorkerThread
     */
    public function iShouldStartASingleInstanceOfAnEmailworkerthread()
    {
        throw new PendingException();
    }
}

Feature: Email Worker Thread
In order for users to receive emails
As a SaaS product
I need to be able to send emails instantly

Rules:
- Emails should be queued in a queue
- If there are more than 30 emails in the queue, start another worker instance

Scenario: Make Sure the Email Queue exists
Given I have a username, password and key
When I initialise the queue
Then I should get a handle on the queue for using it

Scenario: Make sure the Email Queue is accessible
Given an email queue is defined
When I have the handle
Then I should be able to access the queue

Scenario: Start an EmailWorkerThread
Given no other EmailWorkerThreads are running
When I see no EmailWorkerThreads are running
Then I should start a single instance of an EmailWorkerThread

Scenario: Sending an email based on a queued item on a queue
Given there is an email item
When it arrives on the queue
Then I should send the email
And remove the item off the queue

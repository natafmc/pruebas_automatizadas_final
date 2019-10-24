<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require_once 'application/controllers/Login.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    public $data;
    public function __construct()
    {
        $this->controller = new testController();
    }

 

    /**
     * @Given that the client goes to the :arg1
     */
    public function thatTheClientGoesToThe($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then the client should get the login page.
     */
    public function theClientShouldGetTheLoginPage()
    {
        throw new PendingException();
    }
}

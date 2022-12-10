<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given у нас установлено поведение
     */
    public function uNasUstanovlenoPovedenie()
    {
        throw new PendingException();
    }

    /**
     * @When мы внедряем тест
     */
    public function myVnedriaemTest()
    {
        throw new PendingException();
    }

    /**
     * @Then вы протестируете это для нас!
     */
    public function vyProtestirueteEtoDliaNas()
    {
        throw new PendingException();
    }

    /**
     * @Given :arg1
     */
    public function stepDefinition1($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When мы
     */
    public function my()
    {
        throw new PendingException();
    }

    /**
     * @Then вы
     */
    public function vy()
    {
        throw new PendingException();
    }
}

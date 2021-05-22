<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
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
     * @When I fill :arg1 with :arg2
     */
    public function iFillWith($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I select :arg1 with :arg2
     */
    public function iSelectWith($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I check :arg1 checkbox
     */
    public function iCheckCheckbox($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When pressing :arg1 button
     */
    public function pressingButton($arg1)
    {
        throw new PendingException();
    }
}

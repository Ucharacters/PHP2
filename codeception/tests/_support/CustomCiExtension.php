<?php

use \Codeception\Events;

class CustomCiExtension extends \Codeception\Extension
{
    // list events to listen to
    // Codeception\Events constants used to set the event

    public static $events = array(
        Events::SUITE_AFTER  => 'afterSuite',
        Events::TEST_BEFORE => 'beforeTest',
        Events::STEP_BEFORE => 'beforeStep',
        Events::TEST_FAIL => 'testFailed',
        Events::RESULT_PRINT_AFTER => 'print',
    );

    // methods that handle events

    public function afterSuite(\Codeception\Event\SuiteEvent $e)
    {
      fwrite(STDOUT, __METHOD__ . "\n+======================+");
      write("prints to the screen");
    }

    public function beforeTest(\Codeception\Event\TestEvent $e)
    {
      fwrite(STDOUT, __METHOD__ . "\n+======================+");
      write("prints to the screen");
    }

    public function beforeStep(\Codeception\Event\StepEvent $e)
    {
      fwrite(STDOUT, __METHOD__ . "\n+======================+");
      write("prints to the screen");
    }

    public function testFailed(\Codeception\Event\FailEvent $e)
    {
      fwrite(STDOUT, __METHOD__ . "\n+======================+");
      write("prints to the screen");
    }

    public function print(\Codeception\Event\PrintResultEvent $e)
    {
      fwrite(STDOUT, __METHOD__ . "\n+======================+");
      write("prints to the screen");
    }
}

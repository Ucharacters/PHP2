<?php
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;

class ShortTestListener implements TestListener
{
    use TestListenerDefaultImplementation;

    public function endTest(PHPUnit\Framework\Test $test, $time): void
    {
        fwrite(STDOUT, "endTest");
    }

 public function endTestSuite(PHPUnit\Framework\TestSuite $suite): void
    {
        printf("endTestSuite.\n", $suite->getName());
    }
}
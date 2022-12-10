<?php

class FirstCest
{
  public function _before(AcceptanceTester $I)
  {
    print(":");
  }

  // tests
  public function tryToTest(AcceptanceTester $I)
  {
    fwrite(STDOUT, __METHOD__ . "\n++++++++++++++");
  }

  public function _after(AcceptanceTester $I)
  {
    fwrite(STDOUT, __METHOD__ . "\n+++999++++++");
  }
}

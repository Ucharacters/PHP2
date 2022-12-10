<?php

class ThirdCest
{
  public function _before(UnitTester $I)
  {
  }

  // tests
  public function tryToTest(UnitTester $I)
  {
    fwrite(STDOUT, __METHOD__ . "\n++++++++++++++");
  }
}

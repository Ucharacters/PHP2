<?php

class SecondCest
{
  public function _before(FunctionalTester $I)
  {
  }
// tests
  public function tryToTest(FunctionalTester $I)
  {
	   fwrite(STDOUT, __METHOD__ . "\n++++++++++++++");
  }
}

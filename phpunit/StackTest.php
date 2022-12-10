<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;
//include('ShortTestListener.php');


class StackTest extends TestCase 
{
/**
     *@small
*/
    public function testPushAndPop()
    {


	fwrite(STDOUT, __METHOD__ . "\n");
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }

    public function testSomething()
    {
        // Необязательно: протестируйте здесь что-нибудь, если хотите.
        $this->assertTrue(true, 'This should already work.');

        // Остановиться тут и отметить, что тест неполный.
        $this->markTestIncomplete(
          'Этот тест ещё не реализован.'
        );
    }

/*
  public function testOne()
    {
        $this->assertTrue(false);
    }


    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [1, 0, 1],
            [1, 1, 2]
        ];
    }
*/
    public function additionProvider()
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 2]
        ];
    }

  /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

    public function testFileWriting() {
        $writer = new FileWriter;

        $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
    }


}

class FileWriter
{
    public function write($file, $content) {
        $file = fopen($file, 'w');

        if ($file == false) {
            return false;
        }

        // ...
    }


    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

 /**
     * @covers BankAccount::getBalance
     */
    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';

 // @codeCoverageIgnoreStart
    print '*';
    // @codeCoverageIgnoreEnd
    }


}

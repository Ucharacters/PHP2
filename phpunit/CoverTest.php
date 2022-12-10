<?php declare(strict_types=1);
use SebastianBergmann\CodeCoverage\Filter;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Report\Html\Facade as HtmlReport;
use PHPUnit\Framework\TestCase;
use PHPUnit\DbUnit\TestCaseTrait;



// ...






class CoverTest extends TestCase
{  
    public function testPushAndPop()
    {
	fwrite(STDOUT, __METHOD__ . "\n");

$filter = new Filter;
$filter->includeDirectory('tests');

$coverage = new CodeCoverage(
    (new Selector)->forLineCoverage($filter),
    $filter
);

$coverage->start('<name of test>');
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
$coverage->stop();


(new HtmlReport)->process($coverage, 'code-coverage-report');
    }

   
}

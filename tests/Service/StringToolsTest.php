<?php

namespace Test;

use PHPUnit\Framework\TestCase;

final class StringToolsTest extends TestCase
{
  /**
  * @dataProvider helloStringProvider
  */
    public function testHelloWilder($sample): void
    {
        $this->assertSame('hello wilder', \Service\StringTools::trimWhiteSpaces($sample));
    }


    public function helloStringProvider()
    {
        return [
        'removing one white space before'  => [' hello wilder'],
        'removing one white space after'  => ['hello wilder '],
        'removing one white space before and after'  => [' hello wilder '],
        'removing two white spaces before'  => ['  hello wilder'],
        'removing three white space after'  => ['hello wilder   '],
        'removing many white spaces after and before'  => ['       hello wilder         '],
        ];
    }
}

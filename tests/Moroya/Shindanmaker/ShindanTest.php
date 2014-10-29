<?php

namespace Moroya\Shindanmaker\Tests;

use Moroya\Shindanmaker\Shindan;

class ShindanTest extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        // Shindanmaker Testcase
        $shindan = new Shindan(492093, 'moroya');
        $message = $shindan->getMessage();

        $this->assertSame('moroya is lalala...', $message);
    }
}

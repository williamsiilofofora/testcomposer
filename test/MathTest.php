<?php
require('./src/Math.php');


use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble()
    {
        $this->assertEquals(4, Math::double(2));
    }
}
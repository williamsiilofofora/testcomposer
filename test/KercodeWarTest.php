<?php
require('./src/KercodeWar.php');


use PHPUnit\Framework\TestCase;

class KercodeWarTest extends TestCase
{
    public function testWeekDays()
    {
        $this->assertEquals('Sunday', KercodeWar::weekday(1));
        $this->assertEquals('Monday', KercodeWar::weekday(2));
        $this->assertEquals('Tuesday', KercodeWar::weekday(3));
        $this->assertEquals('Wednesday', KercodeWar::weekday(4));
        $this->assertEquals('Thursday', KercodeWar::weekday(5));
        $this->assertEquals('Fryday', KercodeWar::weekday(6));
        $this->assertEquals('Saturday', KercodeWar::weekday(7));
    }
    public function testWithInvalidParam()
    {
        $this->assertEquals(
            'Wrong, please enter a number beetwen 1 and 7',
            KercodeWar::weekday('plop')
        );

    }

} 
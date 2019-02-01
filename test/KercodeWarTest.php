<?php
require('./src/KercodeWar.php');


use PHPUnit\Framework\TestCase;

class KercodeWarTest extends TestCase
{
    const WEEKDAYS = [
        1 => 'Sunday',
        2 => 'Monday',
        3 => 'Tuesday',
        4 => 'Wednesday',
        5 => 'Thursday',
        6 => 'Friday',
        7 => 'Saturday',

    ];
    const FRENCH_WEEKDAYS = [
        1 => 'Dimanche',
        2 => 'Lundi',
        3 => 'Mardi',
        4 => 'Mercredi',
        5 => 'Jeudi',
        6 => 'Vendredi',
        7 => 'Samedi',

    ];
    public function testFrenchWithValidWeekdayValue()
    {
        foreach (self::FRENCH_WEEKDAYS as $key => $value) {
            $this->assertEquals(
                $value,
                KercodeWar::weekday($key, 'fr')
            );
        }
    }
    public function testFrenchWithInvalidWeekdayValue()
    {
        $this->assertEquals(
            'Erreur, entrez un numeros entre 1 et 7 s\'il vous plais.',
            KercodeWar::weekday('plop', 'fr')
        );
    }
    public function testWeekDays()
    {
        foreach (self::WEEKDAYS as $key => $value) {
            $this->assertEquals($value, KercodeWar::weekday($key));
        }
    }
    public function testWithInvalidParam()
    {
        $this->assertEquals(
            'Wrong, please enter a number beetwen 1 and 7',
            KercodeWar::weekday('plop')
        );

    }
    public function testNumberInWeekend()
    {
        foreach (self::WEEKDAYS as $key => $value) {
            $res = ($value === 'Sunday' || $value === 'Saturday');
            $this->assertEquals($res, KercodeWar::isweekend($key));
        }
    }
}
        
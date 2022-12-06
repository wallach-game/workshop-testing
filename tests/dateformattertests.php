<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;


final class calculatortest extends TestCase
{

    public function testDateFormatterDayPart1(): void
    {
        $dateFormatter = new IW\Workshop\DateFormatter();
        $date = new DateTime();
        $date = $date->setTime(5, 0);
        $this->assertEquals(
            "Night",
            $dateFormatter->getPartOfDay($date)
        );
    }

    public function testDateFormatterDayPart2(): void
    {
        $dateFormatter = new IW\Workshop\DateFormatter();
        $date = new DateTime();
        $date->setTime(7, 0);
        $this->assertEquals(
            "Morning",
            $dateFormatter->getPartOfDay($date)
        );
    }

    public function testDateFormatterDayPart3(): void
    {
        $dateFormatter = new IW\Workshop\DateFormatter();
        $date = new DateTime();
        $date->setTime(20, 0);
        $this->assertEquals(
            "Evening",
            $dateFormatter->getPartOfDay($date)
        );
    }

    public function testDateFormatterDayPart4(): void
    {
        $dateFormatter = new IW\Workshop\DateFormatter();
        $date = new DateTime();
        $date->setTime(14, 0);
        $this->assertEquals(
            "Evening",
            $dateFormatter->getPartOfDay()
        );
    }
}
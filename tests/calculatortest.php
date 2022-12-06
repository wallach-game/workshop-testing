<?php 
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class calculatortest extends TestCase
{
    // public function testCanBeCreatedFromValidEmailAddress(): void
    // {
    //     $this->assertInstanceOf(
    //         Email::class,
    //         Email::fromString('user@example.com')
    //     );
    // }

    public function testCannotDivideByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $calculator = new IW\Workshop\Calculator();
        $calculator->divide(0,0);
    }

    public function testCannotDivideByZero2(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $calculator = new IW\Workshop\Calculator();
        $calculator->divide(2,0);
    }

    public function testAddition1():void {
        $calculator = new IW\Workshop\Calculator();
        $this->assertEquals(
            2,
            $calculator->add(1,1));
    }

    public function testAddition2():void {
        $calculator = new IW\Workshop\Calculator();
        $this->assertEquals(
            106,
            $calculator->add(50,56));
    }


    // public function testCanBeUsedAsString(): void
    // {
    //     $this->assertEquals(
    //         'user@example.com',
    //         Email::fromString('user@example.com')
    //     );
    // }
}

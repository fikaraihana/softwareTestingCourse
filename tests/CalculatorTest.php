<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $calculator = new Calculator();
        $result = $calculator->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivide()
    {
        $calculator = new Calculator();
        $result = $calculator->divide(6, 2);
        $this->assertEquals(3, $result);
    }

    public function testAverage()
    {
        $calculator = new Calculator();
        $result = $calculator->average(6, 2);
        $this->assertEquals(4, $result);
    }
}

<?php

use App\RomanConverter;

class RomanConverterTest extends TestCase
{
    public function test1()
    {
        $this->assertEquals('I', RomanConverter::toRoman(1));
    }

    public function test5()
    {
        $this->assertEquals('V', RomanConverter::toRoman(5));
    }

    public function test10()
    {
        $this->assertEquals('X', RomanConverter::toRoman(10));
    }

    public function test50()
    {
        $this->assertEquals('L', RomanConverter::toRoman(50));
    }

    public function test100()
    {
        $this->assertEquals('C', RomanConverter::toRoman(100));
    }

    public function test500()
    {
        $this->assertEquals('D', RomanConverter::toRoman(500));
    }

    public function test1000()
    {
        $this->assertEquals('M', RomanConverter::toRoman(1000));
    }

}

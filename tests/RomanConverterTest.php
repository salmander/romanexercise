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

    public function test3()
    {
        $this->assertEquals('III', RomanConverter::toRoman(3));
    }

    public function test8()
    {
        $this->assertEquals('VIII', RomanConverter::toRoman(8));
    }

    public function test16()
    {
        $this->assertEquals('XVI', RomanConverter::toRoman(16));
    }

    public function test78()
    {
        $this->assertEquals('LXXVIII', RomanConverter::toRoman(78));
    }

    public function test255()
    {
        $this->assertEquals('CCLV', RomanConverter::toRoman(255));
    }

    public function test512()
    {
        $this->assertEquals('DXII', RomanConverter::toRoman(512));
    }

    public function test777()
    {
        $this->assertEquals('DCCLXXVII', RomanConverter::toRoman(777));
    }


}

<?php

namespace App;


class RomanConverter {

    private static $mapping = [
        '1' => 'I',
        '5' => 'V',
        '10' => 'X',
        '50' => 'L',
        '100' => 'C',
        '500' => 'D',
        '1000' => 'M',
    ];


    public static function toRoman(int $number): string
    {
        $roman = '';

        foreach (self::$mapping as $key => $value) {
            if ($key == $number) {
                $roman = $value;
            }
        }

        return $roman;
    }
}
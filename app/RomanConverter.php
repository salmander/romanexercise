<?php

namespace App;


class RomanConverter {

    private static $mapping = [
        '1000' => 'M',
        '500' => 'D',
        '100' => 'C',
        '50' => 'L',
        '10' => 'X',
        '5' => 'V',
        '1' => 'I',
    ];


    public static function toRoman(int $number): string
    {
        $roman = '';

        foreach (self::$mapping as $key => $value) {
             while ($number >= $key) {
                 $roman .= $value;

                 $number -= $key;
             }

        }

        return $roman;
    }
}
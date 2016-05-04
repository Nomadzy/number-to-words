<?php

namespace Kwn\NumberToWords\Language\Russian\Transformer;

use Kwn\NumberToWords\Language\Russian\Dictionary\Number as NumberDictionary;

class NumberTransformerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerToWords
     */
    public function testToWords($expectedValue, $number)
    {
        $transformer = new NumberTransformer(new NumberDictionary());
        $this->assertEquals($expectedValue, $transformer->toWords($number));
    }

    public function providerToWords()
    {
        return [
            ['ноль', 0],
            ['три', 3],
            ['три', 3.00],
            ['восемь', 8.0],
            ['десять', 10],
            ['двадцать', 20],
            ['пятьдесят', 50],
            ['девяносто', 90],
            ['двенадцать', 12],
            ['двадцать пять', 25],
            ['пятьдесят восемь', 58],
            ['девяносто девять', 99],
            ['сто', 100],
            ['сто два', 102],
            ['сто тринадцать', 113],
            ['двести двадцать девять', 229.0],
            ['пятьсот', 500.00],
            ['шестьсот шестьдесят шесть', 666],
            ['шестьсот шестьдесят', 660],
            ['одна тысяча', 1000],
            ['одна тысяча один', 1001],
            ['одна тысяча десять', 1010],
            ['одна тысяча пятнадцать', 1015],
            ['одна тысяча сто', 1100],
            ['одна тысяча сто одиннадцать', 1111],
            ['четыре тысячи пятьсот тридцать восемь', 4538],
            ['пять тысяч двадцать', 5020],
            ['одиннадцать тысяч один', 11001],
            ['двадцать одна тысяча пятьсот двенадцать', 21512],
            ['девяносто тысяч', 90000],
            ['девяносто две тысячи сто', 92100],
            ['двести двенадцать тысяч сто двенадцать', 212112],
            ['семьсот двадцать тысяч восемнадцать', 720018],
            ['один миллион одна тысяча один', 1001001],
            ['три миллиона двести сорок восемь тысяч пятьсот восемнадцать', 3248518],
        ];
    }
}
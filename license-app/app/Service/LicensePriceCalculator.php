<?php


namespace App\Service;

class LicensePriceCalculator
{

    public static function calculatorPrice(int $teamSize): float
    {
        return $teamSize <= 5 ? $teamSize * 15 : 50 + ($teamSize - 5) * 10;
    }
}
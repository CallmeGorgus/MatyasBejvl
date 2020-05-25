<?php
class numbersBejvlMatyas {

    /**
     *  zaokrouhlý cislo podle presnosti
     * @param float $num
     * @param int $pr
     * @return float
     */
    public static function round(float $num, int $pr = 0): float {
        return round($num, $pr);
    }

    /**
     * vynasobii
     * @param float $a
     * @param float $b
     * @return float
     */
    public static function vynasob(float $a, float $b): float {
        return $a * $b;
    }

    public static function abs(float $number): float {
        return self :: abs($number);
    }

}   

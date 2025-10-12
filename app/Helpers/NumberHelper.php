<?php

if (! function_exists('short_number')) {
    function short_number($num) {
        if ($num >= 1000000000) {
            return number_format($num / 1000000000, 1, '.', '') . 'B';
        }
        if ($num >= 1000000) {
            return number_format($num / 1000000, 1, '.', '') . 'M';
        }
        if ($num >= 1000) {
            return number_format($num / 1000, 1, '.', '') . 'K';
        }
        return $num;
    }
}

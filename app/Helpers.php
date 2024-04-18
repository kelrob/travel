<?php

if (!function_exists('formatNumber')) {
    function formatNumber($number)
    {
        $numberStr = (string)$number;
        $paddedNumber = str_pad($numberStr, 6, '0', STR_PAD_LEFT);
        if (strlen($paddedNumber) > 6) {
            $paddedNumber = substr($paddedNumber, -6);
        }
        return $paddedNumber;
    }
}

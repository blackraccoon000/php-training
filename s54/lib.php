<?php
namespace lib;

const TAX_RATE = 0.1;

function with_tax($basePrice, $taxRate = TAX_RATE)
{
    $sumPrice = $basePrice * (1 + $taxRate);
    $sumPrice = round($sumPrice);
    return $sumPrice;
}
?>

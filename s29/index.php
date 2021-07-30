<?php
$price = -1;
$amount = 0;
$sum = $price * $amount;

if ($price > 0 && $amount > 0) {
    echo "{$price}の商品を{$amount}個買ったので合計金額は{$sum}円です。";
} elseif (empty($sum)) {
    echo '何か商品を買いましょう';
} else {
    echo '不正な数値です';
}
?>

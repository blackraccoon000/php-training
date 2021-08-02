<?php
// DocCommentを用いてPHPDocを追加する。
/**
 * 税率計算のための関数を記述するためのファイル
 * @author yutaka
 * @since 1.0.0
 */

/**
 * 税込み金額を取得する関数
 * @param int $base_price 価格
 * @param float $tax_rate 税率
 * @return int 税込み金額
 * @see https://www.udemy.com/course/backend-tutorial/learn/lecture/24453454?start=300#questions
 */
function with_tax($basePrice, $taxRate = 0.1)
{
    $calc = $basePrice * (1 + $taxRate);
    $result = round($calc); // 有効桁数を指定しない場合には第2引数なし
    return $result;
}

$fn = 'with_tax';
$price = 1000;
// $price = with_tax($price);
// $price = ('with_tax')($price); // 文字列として宣言できる。
$price = $fn($price); // 変数名をコールバックのように宣言可能。

echo "withTax:{$price}円";

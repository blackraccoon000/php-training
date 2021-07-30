<h3>
  <a href="/php-training">php-training</a>
</h3>

<?php
$products = [
    'table' => [1000, 2],
    'chair' => [500, 4],
    'bed' => [10000, 1],
    'light' => [5000, 1],
];

echo '<h3>商品一覧</h3>';
foreach ($products as $key => $value) {
    echo "<p>{$key}は{$value[0]}円で{$value[1]}個存在します。</p>";
}

$cart = [
    'table' => 1,
    'bed' => 2,
];

echo '<h3>商品購入</h3>';

foreach ($cart as $key => $value) {
    $stock = $products[$key][1];
    $chk = $stock >= $value;
    echo "<p>{$key}を{$value}個ください。</p>";
    if ($chk) {
        echo '<p>はい。ありがとうございます。</p>';
    } else {
        echo "<p>すみません。{$key}は{$stock}個しかありません。</p>";
    }
}


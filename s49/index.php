<?php
// $ary = ['key' => 10];
$ary = ['keya' => 10];

echo '<h3>通常の記載方法</h3>';

if (isset($ary['key'])) {
    echo 10;
} else {
    // echo '<p>$ary[\'key\']はありません。</p>';
    echo 1;
}

echo '<h3>三項演算子</h3>';

$result = isset($ary['key']) ? 10 : 1;
echo "<p>{$result}</p>";

echo '<h3>null合体演算子</h3>';

// $ary['key']がnullなら1を代入する
$ary['key'] = $ary['key'] ?? 1;

// $result = isset($ary['key']) ? 10 : 1;
echo "<p>{$ary['key']}</p>";
?>

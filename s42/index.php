<?php
$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($nums)
{
    //$nums 引数
    $sum = 0;
    foreach ($nums as $key => $value) {
        $sum += $value;
    }
    return $sum; // return xxx 戻り値
    // echo "<p>合計:$sum</p>";
}

$result = sum($numbers);
echo "<p>合計:{$result}</p>";

$result2 = sum($numbers2);
echo "<p>合計:{$result2}</p>";
?>

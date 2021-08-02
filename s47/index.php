<?php
// $numの場所によってプログラムが誤作動する。

// $num = 0;

/**
 * @global int $num 足し合わせる元となる数値
 * @param $step 足し合わせる数値
 * @return int 合計値 ($num + $step)
 */
function counter($step)
{
    global $num;
    $result = $num += $step;
    echo "<p>合計値:{$result}</p>";
    return $result;
}
// $num = 0;

$result1 = counter(3);
$num = 0; //誤作動 1回目は$num=null;
$result2 = counter(3);
echo "<p>{$result1}->{$result2}</p>";

?>

<h3>生徒の点呼を取る関数</h3>

<?php
/**
 * 点呼を取る関数
 * @param string $student 生徒
 * @param bool $is_abstract true:欠席 false:出席
 * @return void
 */
function muster($student = 'taro', $is_abstract = false)
{
    if ($is_abstract) {
        echo "<p>{$student}は欠席しています。</p>";
    } else {
        echo "<p>{$student}は出席しています。</p>";
    }
}

muster('taro');
muster('jiro', true);
?>

<h3>カウンター関数</h3>

<?php
$num = 0;

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

$result1 = counter(3);
$result2 = counter(3);
echo "<p>{$result1}->{$result2}</p>";


?>

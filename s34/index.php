<h3>
  <a href="/php-training">php-training</a>
</h3>

<?php
$ary = [['table', 1000], ['chair', 100], ['bed', 10000]];
// echo $ary[1][1] = 500;

// 配列の先頭が削除される。
// array_shift($ary);

// 配列の最後尾が削除される。
// array_pop($ary);

// 配列に対しどこから何個消すか指示できる。
// array_splice($ary, 1, 1);
// 第4引数に配列を指定? 置換できるけど、よくわからない。
// array_splice($ary, 1, 1, ['replace']);
array_splice($ary, 1, 1, [['black', 100], ['maroon', 200]]);

foreach ($ary as $val) {
    echo "<p>{$val[0]}は{$val[1]}円です。</p>";
    // print_r($val);
}


?>

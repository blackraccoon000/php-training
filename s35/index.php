<h3>
  <a href="/php-training">php-training</a>
</h3>

<h2>連想配列を使う</h2>

<?php
$ary = [
    // key と valueを対にするものを連想配列という。
    'name' => 'bob',
    'age' => 12,
    'sports' => ['baseball', 'swimming'],
];

array_shift($ary);
echo $ary['name'];
echo "<p>{$ary['name']}</p>";
echo "<p>{$ary['age']}</p>";
echo "<p>{$ary['sports'][0]}</p>";
echo "<p>{$ary['sports'][1]}</p>";

print_r($ary);


?>

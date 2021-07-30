<h3>
  <a href="/php-training">php-training</a>
</h3>

<?php
$ary = ['taro', 'hanako', 'jiro'];
echo "$ary[1]<br>";
$ary[1] = 'sachi';
echo "$ary[1]<br>";
?>

<br>

<?php for ($i = 0; $i < count($ary); $i++) {
    echo '<div>', $ary[$i], '</div>';
} ?>

<br>

<?php foreach ($ary as $i) {
    echo "<div>{$i}</div>";
}

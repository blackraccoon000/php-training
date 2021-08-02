<?php
// 相対パス
require 'file1.php';
require './file1.php';
require '../sub/test.php';

// マジック定数
echo '<h3>Dir</h3>';
$dir = __DIR__;
echo "<p>{$dir}</p>";

echo '<h3>sub/file2</h3>';
require __DIR__ . '/sub/file2.php';
require __DIR__ . '/../sub/test.php'; //requireがよしなに対応してくれている

echo '<h3>File</h3>';
$file = __FILE__;
echo "<p>{$file}</p>";

echo '<h3>dirname</h3>';
echo '<p>' . dirname(__DIR__) . '</p>';
echo '<p>' . dirname(__DIR__, 1) . '</p>'; // 引数なしと同じ
echo '<p>' . dirname(__DIR__, 2) . '</p>'; // 2階層上
echo '<p>' . dirname(__DIR__, 3) . '</p>';
require dirname(__DIR__) . '/sub/test.php';
?>

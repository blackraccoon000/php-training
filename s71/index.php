<?php
$students = [
    '1' => [
        'name' => 'taro',
        'age' => 15,
    ],
    '2' => [
        'name' => 'jiro',
        'age' => 14,
    ],
    '3' => [
        'name' => 'saburo',
        'age' => 13,
    ],
    '4' => [
        'name' => 'shiro',
        'age' => 12,
    ],
];

// http://localhost:8888/php-training/s71/?id=4 こんな感じにデータを取得できる
// つまり、URI経由でデータの出し分けができる
$id = $_GET['id'] ?? 1;
$student = $students[$id];
$name = $student['name'];
$age = $student['age'];
?>

<div><?php echo "{$name}は{$age}才です。"; ?></div>

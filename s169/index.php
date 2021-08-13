<!-- htdocs/php-training - [main●] » tail -f /Applications/MAMP/logs/mysql_query.log -->

<?php
$user = 'yutaka';
$pwd = 'pwd';
$host = 'localhost';
$port = '8889';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};";
// echo $dsn;
$conn = new PDO($dsn, $user, $pwd);
// 連想配列のみ返ってくるようにデフォルト値を設定する。
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$pst = $conn->query('select * from mst_shops');
// 連想配列のみ返ってくる
// $result = $pst->fetchAll(PDO::FETCH_ASSOC);
$result = $pst->fetchAll();

echo '<pre>';
print_r($result);
echo '</pre>';

$conn = null;


?>

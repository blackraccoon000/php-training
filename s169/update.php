<!-- htdocs/php-training - [main●] » tail -f /Applications/MAMP/logs/mysql_query.log -->

<?php
echo __FILE__;

$user = 'yutaka';
$pwd = 'pwd';
$host = 'localhost';
$port = '8889';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$result = $conn->exec('update mst_prefs set name = "福島" where id = 5 ');

echo '<pre>';
print_r($result);
echo '</pre>';

$conn = null;


?>

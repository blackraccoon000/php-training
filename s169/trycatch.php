<!-- htdocs/php-training - [main●] » tail -f /Applications/MAMP/logs/mysql_query.log -->

<?php
echo __FILE__;

function throwException()
{
    try {
        $bool = false;
        // $bool->method();
        new PDO('', '', '');
    } catch (Exception $e) {
        echo '<p>PDOにおける処理が実行されました</p>';
        echo "<p>{$e->getMessage()}</p>";
        echo '<p>' . get_class($e) . '</p>';
    }
}

try {
    throwException();
    echo '<p>通常処理が最後まで実行されました</p>';
} catch (Error $e) {
    echo '<p>例外処理が実行されました</p>';
    echo "<p>{$e->getMessage()}</p>";
    echo '<p>' . get_class($e) . '</p>';
} finally {
    echo '<p>終了処理が実行されました</p>';
}


?>

<!-- htdocs/php-training - [main●] » tail -f /Applications/MAMP/logs/mysql_query.log -->

<?php
$user = 'yutaka';
$pwd = 'pwd';
$host = 'localhost';
$port = '8889';
$dbName = 'test_phpdb';
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};";
$conn = new PDO($dsn, $user, $pwd);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function addStock($conn)
{
    try {
        echo '<h3>店舗Cのすべての商品在庫数に10を足し合わせる</h3>';
        $execResult = $conn->exec(
            'update txn_stocks set amount = amount + 10 where shop_id = 3;'
        );
        if ($execResult > 0) {
            echo '<p>加算に成功しました</p>';
            $amountResult = $conn->query(
                'select amount from txn_stocks where shop_id = 3;'
            );
            echo '<pre>';
            print_r($amountResult->fetchAll());
            echo '</pre>';
        } else {
            echo '<p>変更はありません</p>';
            $amountResult = $conn->query(
                'select amount from txn_stocks where shop_id = 3;'
            );
            echo '<pre>';
            print_r($amountResult->fetchAll());
            echo '</pre>';
        }
    } catch (\Exception $th) {
        echo "<h5>{get_class($th)}が発生しました</h5>";
        echo "<p>{$th->getMessage()}</p>";
    }
}

function shopCount($conn, $name)
{
    try {
        $shopResult = $conn->query(
            "select count(*) as count from mst_shops where name = '{$name}';"
            // "select count(*) from mst_shops where name = '{$name}';"
        );
        return $shopResult->fetchAll()[0]['count'];
    } catch (\Throwable $th) {
        echo "<h5>{get_class($th)}が発生しました</h5>";
        echo '<h6>これはshopCountで発生したエラーです</h6>';
        echo "<p>{$th->getMessage()}</p>";
    }
}

function addShop($conn)
{
    try {
        echo '<h3>店舗Dを作成する</h3>';
        $count = shopCount($conn, '店舗D');
        if (!$count) {
            echo '既に店舗Dが存在しません -> 実行します';
            $execResult = $conn->exec(
                "insert into mst_shops(name,pref_id ,updated_by) values ('店舗D',4,'yutaka');"
            );
            echo "$execResult";
            if ($execResult > 0) {
                echo '<p>加算に成功しました</p>';
                $shopResult = $conn->query('select * from mst_shops;');
                echo '<pre>';
                print_r($shopResult->fetchAll());
                echo '</pre>';
            } else {
                echo '<p>変更はありません</p>';
                $shopResult = $conn->query('select * from mst_shops;');
                echo '<pre>';
                print_r($shopResult->fetchAll());
                echo '</pre>';
            }
        } else {
            echo '既に店舗Dは存在します';
            $shopResult = $conn->query('select * from mst_shops;');
            echo '<pre>';
            print_r($shopResult->fetchAll());
            echo '</pre>';
        }
    } catch (\Exception $th) {
        echo "<h5>{get_class($th)}が発生しました</h5>";
        echo "<p>{$th->getMessage()}</p>";
    }
}

try {
    // addStock($conn);
    // addShop($conn);
    $pst5 = $conn->query(
        'select * from txn_stocks where shop_id = 3 and product_id = 2;'
    );
    $result5 = $pst5->fetch();

    echo '<h3>店舗Aの椅子の在庫数を取得する</h3>';

    echo '<pre>';
    echo "店舗Aの椅子の在庫数は{$result5['amount']}脚";
    echo '</pre>';
} catch (\Throwable $th) {
    echo "<h5>{get_class($th)}が発生しました</h5>";
    echo "<p>{$th->getMessage()}</p>";
}

$conn = null;


?>

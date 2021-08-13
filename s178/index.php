<?php
try {
    $user = 'yutaka';
    $pwd = 'pwd';
    $host = 'localhost';
    $port = '8889';
    $dbName = 'test_phpdb';
    $dsn = "mysql:host={$host};port={$port};dbname={$dbName};";

    $conn = new PDO($dsn, $user, $pwd);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $product_id = 3;
    $from_shop_id = 1;
    $to_shop_id = 3;
    $amount = 10;

    $conn->beginTransaction();

    $pst = $conn->prepare('
        update txn_stocks
        set amount = amount + :amount
        where shop_id = :shop_id
        and product_id = :product_id
      ');

    $pst->execute([
        ':amount' => $amount,
        ':shop_id' => $to_shop_id,
        'product_id' => $product_id,
    ]);

    $pst->execute([
        ':amount' => -1 * $amount,
        ':shop_id' => $from_shop_id,
        'product_id' => $product_id,
    ]);
    // $result = $pst->fetch();
    $conn->commit();
} catch (PDOException $e) {
    $conn->rollBack();
    echo '<p>Errorが発生しました</p>';
    echo $e->getMessage();
}
?>

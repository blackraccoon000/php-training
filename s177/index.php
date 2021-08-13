<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    Shop ID: <input type="text" name="shop_id">
    <input type="submit" value="検索">
</form>

<?php if (isset($_POST['shop_id'])) {
    try {
        $shop_id = $_POST['shop_id'];
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

        $pst = $conn->prepare(
            'select * from test_phpdb.mst_shops where id = :id;'
        );
        // $pst->bindValue(':id', $shop_id, PDO::PARAM_INT);
        // $pst->execute();
        $pst->execute([
            ':id' => $shop_id,
        ]);
        $result = $pst->fetch();
        // var_dump($result);
        // var_dump(empty($result));

        if (!empty($result) && count($result) > 0) {
            echo "店舗名は[{$result['name']}]です。";
        } else {
            echo '店舗は見つかりませんでした';
        }
    } catch (PDOException $e) {
        echo 'Errorが発生しました';
    }
}
?>

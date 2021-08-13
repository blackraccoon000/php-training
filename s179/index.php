<form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST">
    <!-- Shop ID: <input type="text" name="shop_id"> -->
    Product ID: <input type="text" name="product_id">
    <input type="submit" value="検索">
</form>

<?php
require_once 'product.model.php';
require_once 'datasource.php';
use db\DataSource;
use model\ProductModel;

if (isset($_POST['product_id'])) {
    try {
        $product_id = $_POST['product_id'];
        $db = new DataSource();
        $result = $db->selectOne(
            'select * from mst_products where id = :id and delete_flg <> 1',
            [
                ':id' => $product_id,
            ],
            DataSource::CLS,
            ProductModel::class
        );

        // echo ProductModel::class;
        // var_dump($result);

        if (
            !empty($result)
            // && count($result) > 0
            // && !($result['delete_flg'] === 1)
        ) {
            // echo "商品名は[{$result['name']}]です。";
            // echo "商品名は[{}]です。";
            $result->echoProduct();
        } else {
            echo '一致する商品が見つかりません。';
        }
    } catch (PDOException $e) {
        echo '時間をおいて再度お試しください。';
        echo $e->getMessage();
    }
}
// if (isset($_POST['shop_id'])) {
//     try {
//         $shop_id = $_POST['shop_id'];
//         $db = new DataSource();
//         $result = $db->selectOne(
//             'select * from test_phpdb.mst_shops where id = :id;',
//             [
//                 ':id' => $shop_id,
//             ]
//         );

//         if (!empty($result) && count($result) > 0) {
//             echo "店舗名は[{$result['name']}]です。";
//         } else {
//             echo '店舗は見つかりませんでした';
//         }
//     } catch (PDOException $e) {
//         echo 'Errorが発生しました';
//     }
// }

// $db = new DataSource();
// $amount = 10;
// $to_shop_id = 3;
// $from_shop_id = 1;
// $product_id = 3;

// try {
//     $db->begin();
//     $sql = "
//       update txn_stocks
//       set amount = amount + :amount
//       where shop_id = :shop_id
//       and product_id = :product_id
//     ";

//     $db->execute($sql, [
//         ':amount' => $amount,
//         ':shop_id' => $to_shop_id,
//         ':product_id' => $product_id,
//     ]);

//     $db->execute($sql, [
//         ':amount' => $amount * -1,
//         ':shop_id' => $from_shop_id,
//         ':product_id' => $product_id,
//     ]);

//     $db->commit();
// } catch (\Throwable $th) {
//     $db->rollback();
//     echo $th->getMessage();
// }

?>

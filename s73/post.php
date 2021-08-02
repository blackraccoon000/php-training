<div>
  <h3>合計</h3>
  <?php
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $result = ($quantity * $price * (100 - $discount)) / 100;
  $afResult = round($result);
  echo "<h3>{$afResult}円</h3>";
  echo "<p>計算式: {$quantity}個 * {$price}円 * 割引(100%-{$discount}%) = {$result}</p>";
  ?>
</div>
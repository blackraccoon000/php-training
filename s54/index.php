<h3>名前空間について学ぶ</h3>
<?php
// namespaceはdefineが使えない
require_once 'lib.php';

// 名前空間を指定して関数・変数を呼び出す
$price = \lib\with_tax(1000, 0.08);
echo "<p>{$price}</p>";
$tax = \lib\TAX_RATE;
echo "<p>{$tax}</p>";

use function lib\with_tax;
use const lib\TAX_RATE;
$usePrice = with_tax(2000, 0.08);
echo "<p>{$usePrice}</p>";
$useTax = TAX_RATE;
echo "<p>{$useTax}</p>";

// \はグローバル空間を指定する。その中にあるlibというnamespaceを指定している。


?>

<h3>郵便番号</h3>

<?php
$zipCode = ['001-0012', '001-001', '2.2-3042', '001-0012', '124-56789'];

foreach ($zipCode as $key => $value) {
    if (preg_match('/^\d{3}-\d{4}$/', $value, $result)) {
        echo "<p>{$value} OK</p>";
    } else {
        echo "<p>{$value} NG</p>";
    }
}
?>

<h3>Email</h3>

<?php
$email = [
    'example000@gmail.com',
    'example-0.00@gmail.com',
    'example_0.00@ex.co.jp',
    'example/0.00@ex.co.jp',
];

foreach ($email as $key => $value) {
    if (
        preg_match(
            '/^\w+([\.\-]\w+)*@\w+([-.]\w+)*\.\w+([\-\.]\w+)*$/',
            $value,
            $result
        )
    ) {
        echo "<p>{$value} OK</p>";
        // print_r($result);
    } else {
        echo "<p>{$value} NG</p>";
    }
}
?>

<h3>HTML</h3>

<?php
$html = '<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>見出し１</h1>
    <h2>見出し２</h2>
    <h3>見出し３</h3>
    <h4>見出し４</h4>
    <h5>見出し５</h5>
    <h6>見出し６</h6>
    <header>ヘッダー</header>
</body>
</html>';

echo '<h3>use preg_match</h3>';

for ($i = 1; $i < 7; $i++) {
    if (preg_match("/<h$i>(.{1,})<\/h$i>/", $html, $result)) {
        echo "<p>$result[1] OK</p>";
        // var_dump($result);
    } else {
        echo '<p>NG</p>';
    }
}

echo '<h3>use preg_match_all</h3>';
echo '<p>何か変 $aryの型がstringになる。</p>';

if (preg_match_all('/<h[1-6]>(.+)<\/h[1-6]>/', $html, $result)) {
    // print_r($result[count($result) - 1]);
    $ary = $result[count($result) - 1];
    foreach ($ary as $key => $value) {
        echo "<p>$value[$key] OK</p>";
    }
} else {
    echo '<p>NG</p>';
}


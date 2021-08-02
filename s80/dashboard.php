<h3>Dashboard</h3>
<?php
session_start();

// $setData = isset($_POST['username']) && isset($_POST['pwd']);
$matchUserName = isset($_POST['username'])
    ? $_POST['username'] === 'test'
    : false;
$matchPassword = isset($_POST['pwd']) ? $_POST['pwd'] === 'pwd' : false;
$dataCheck = $matchUserName && $matchPassword;
$sessionCheck = !empty($_SESSION['SESSION_AUTH']);

if ($dataCheck) {
    echo '<label>認証OK </label>';
    $_SESSION['SESSION_AUTH'] = [
        'name' => $_POST['username'],
        'pwd' => $_POST['pwd'],
    ];
} else {
    echo '<label>認証NG</label>';
    // var_dump($setData);
    // var_dump($matchUserName);
    // var_dump($matchPassword);
}

if ($sessionCheck) {
    echo '<label>ログイン中です</label>';
    echo "
    <div>
      <h4>ログイン ID/PW</h4>
      <div><label>ID:{$_SESSION['SESSION_AUTH']['name']}</label></div>
      <div><label>PW: {$_SESSION['SESSION_AUTH']['pwd']}</label></div>
    </div>
    ";
} else {
    echo '<label>ログインしていません</label>';
}
?>



<a href="index.php">インデックス画面へ戻る</a>

<h1>ログインフォーム</h1>

<?php
// 今の知識だとここがわからない。
$sessionCheck = !empty($_SESSION['SESSION_AUTH']);
if ($sessionCheck) {
    echo 'ログイン中です';
} else {
    echo '<form action="dashboard.php" method="post">
    <input type="text" name="username" value="test">
    <input type="password" name="pwd" value="pwd">
    <input type="submit" value="click me">
  </form>';
}
?>

<a href="dashboard.php">ダッシュボードへ移動</a>
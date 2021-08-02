<h3>タスク管理アプリ</h3>
<?php
session_start();
$self_url = $_SERVER['PHP_SELF'];
?>

<form action="<?php echo $self_url; ?>" method="post">
  <input type="text" name="task">
  <input type="submit" value="create" name="type">
</form>

<?php
$setTask = !empty($_POST['task']) ? $_POST['task'] : false;
$setTypeCreate = isset($_POST['type']) ? $_POST['type'] === 'create' : false;
$setTypeUpdate = isset($_POST['type']) ? $_POST['type'] === 'update' : false;
$setTypeDelete = isset($_POST['type']) ? $_POST['type'] === 'delete' : false;

if ($setTypeCreate && $setTask) {
    $_SESSION['todos'][] = $_POST['task'];
    echo "新しいタスク[{$_POST['task']}]が追加されました。";
} elseif ($setTypeUpdate) {
    $_SESSION['todos'][$_POST['id']] = $_POST['task'];
    echo "タスクが[{$_POST['task']}]に変更されました。";
} elseif ($setTypeDelete) {
    array_splice($_SESSION['todos'], $_POST['id'], 1);
    // unset($_SESSION['todos'][$_POST['id']]);
    echo "タスク[{$_POST['task']}]が削除されました。";
} elseif (!$setTask) {
    echo '<h4>タスクを入力しましょう</h4>';
} else {
    echo '<h4>Error: 不正なアクセスです</h4>';
}

// 初回ログイン時 Session情報の初期化を行う
if (empty($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
    die();
}
?>

<ul>
  <?php foreach ($_SESSION['todos'] as $key => $value): ?>
  <li>
    <form action="<?php echo $self_url; ?>" method="post">
      <input type="text" name="task" value="<?php echo $value; ?>">
      <input type="hidden" name="id" value="<?php echo $key; ?>">
      <input type="submit" name="type" value="delete">
      <input type="submit" name="type" value="update">
    </form>
  </li>
  <?php endforeach; ?>
</ul>

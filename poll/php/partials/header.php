<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>みんなのアンケート</title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_CSS_PATH; ?>index.css">
</head>
<body>
<?php
use libs\Auth;
use libs\Msg;

Msg::flush();

if (Auth::isSignIn()) {
    echo '<p>ログイン中です。</p><a href="/poll/logout">logout</a>';
} else {
    echo '<p>ログインしていません。</p>';
}


?>

<?php
require_once 'config.php';

// libraryの読み込み
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';
require_once SOURCE_BASE . 'libs/router.php';

// modelの読み込み
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';

// messageの読み込み + models/abstract.model.phpが必要
require_once SOURCE_BASE . 'libs/message.php';

// dbとの接続
require_once SOURCE_BASE . 'db/data_source.php';
require_once SOURCE_BASE . 'db/user.query.php';

// session_startを呼び出す modelの前だとerror
session_start();

try {
    require_once SOURCE_BASE . 'partials/header.php';

    $rPath = str_replace(BASE_CONTEXT_PATH, '', $_SERVER['REQUEST_URI']);
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    libs\route($rPath, $method);

    require_once SOURCE_BASE . 'partials/footer.php';
} catch (\Throwable $th) {
    die('<h1>致命的なエラーです。</h1><p>サーバ管理者へ連絡ください</p>');
}

?>

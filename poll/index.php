<?php
require_once 'config.php';

// libraryの読み込み
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';

// modelの読み込み
require_once SOURCE_BASE . 'models/user.model.php';

// dbとの接続
require_once SOURCE_BASE . 'db/data_source.php';
require_once SOURCE_BASE . 'db/user.query.php';

// session_startを呼び出す modelの前だとerror
session_start();

require_once SOURCE_BASE . 'partials/header.php';

$rPath = str_replace(BASE_CONTEXT_PATH, '', $_SERVER['REQUEST_URI']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rPath, $method);

function route($rPath, $method)
{
    if ($rPath === '') {
        $rPath = 'home';
    }
    $targetFile = SOURCE_BASE . "controllers/{$rPath}.php";

    if (!file_exists($targetFile)) {
        require_once SOURCE_BASE . 'views/404.php';
        return;
    }

    require_once $targetFile;
    $fn = "\\controllers\\{$rPath}\\{$method}";
    $fn();
}

require_once SOURCE_BASE . 'partials/footer.php';

?>

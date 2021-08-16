<?php
define('CURRENT_URI', $_SERVER['REQUEST_URI']);

// poll以下、どのファイルへのアクセスでbase pathを呼ぶ
if (preg_match('/poll/i', CURRENT_URI, $match)) {
    define('BASE_CONTEXT_PATH', '/' . $match[0] . '/');
}

// uriから取得したimages/js/cssフォルダまでのpath
define('BASE_IMAGE_PATH', BASE_CONTEXT_PATH . 'images/');
define('BASE_JS_PATH', BASE_CONTEXT_PATH . 'js/');
define('BASE_CSS_PATH', BASE_CONTEXT_PATH . 'css/');

/**
 * baseurl+/php/ -> poll/php/までのpath
 */
define('SOURCE_BASE', __DIR__ . '/php/');

/**
 * link定数
 */
define('GO_HOME', 'home');
define('GO_REFERER', 'referer');

/**
 * DEBUG定数
 * true 有効 / false 無効
 */
define('DEBUG', false);

?>

<?php
declare(strict_types=1);
namespace s78;

$cookieName = 'COOKIE_VISIT_COUNT';
$now = empty($_COOKIE[$cookieName])
    ? '1'
    : (string) ($_COOKIE[$cookieName] + 1);
setcookie($cookieName, $now, [
    'expires' => time() + 3,
    'path' => '/',
]);
echo "訪問回数は {$now} 回目です。";
?>

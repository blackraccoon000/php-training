<?php
namespace s75;
function cookie(int $count = 1)
{
    setcookie('VISIT_COUNT', $count, [
        'expires' => time() + 60 * 60 * 24 * 14,
        'path' => '/',
    ]);
    echo $count;
}
empty($_COOKIE['VISIT_COUNT']) ? cookie() : cookie($_COOKIE['VISIT_COUNT'] + 1);
?>

<?php
namespace controllers\login;
use libs\Auth;
use libs\Helper;

function get()
{
    require_once SOURCE_BASE . 'views/login.php';
}

function post()
{
    $id = Helper::get_param('id', '');
    $pwd = Helper::get_param('pwd', '');

    if (Auth::signIn($id, $pwd)) {
        echo '認証成功';
    } else {
        echo '認証失敗';
    }
    // echo '<p>POSTが呼ばれました(login)</p>';
}

require_once SOURCE_BASE . 'partials/link.php';
?>

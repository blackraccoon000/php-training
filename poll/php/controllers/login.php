<?php
namespace controllers\login;
use libs\Auth;
use libs\Helper;
use libs\Msg;

function get()
{
    require_once SOURCE_BASE . 'views/login.php';
}

function post()
{
    $id = Helper::get_param('id', '');
    $pwd = Helper::get_param('pwd', '');

    Msg::push(Msg::DEBUG, 'デバックメッセージです。');

    if (Auth::signIn($id, $pwd)) {
        Msg::push(Msg::INFO, '認証成功');
        Helper::redirect(GO_HOME);
    } else {
        Msg::push(Msg::ERROR, '認証失敗');
        Helper::redirect(GO_REFERER);
    }
}

require_once SOURCE_BASE . 'partials/link.php';
?>

<?php
namespace controllers\logout;
use libs\Auth;
use libs\Msg;
use libs\Helper;

function get()
{
    if (Auth::signOut()) {
        Msg::push(Msg::INFO, 'サインアウトが成功しました。');
    } else {
        Msg::push(Msg::ERROR, 'サインアウトが失敗しました。');
    }

    Helper::redirect(GO_HOME);
}
?>

<?php
namespace controllers\register;
use libs\Auth;
use libs\Helper;
use models\UserModel;

function get()
{
    require_once SOURCE_BASE . 'views/register.php';
}

function post()
{
    $user = new UserModel();
    $user->id = Helper::get_param('id', '');
    $user->pwd = Helper::get_param('pwd', '');
    $user->nickname = Helper::get_param('nickname', '');

    if (Auth::regist($user)) {
        echo '登録成功';
    } else {
        echo '登録失敗';
    }
    echo '<p>POSTが呼ばれました(register)</p>';
}

require_once SOURCE_BASE . 'partials/link.php';
?>

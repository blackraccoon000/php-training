<?php
namespace libs;
use db\UserQuery;

class Auth
{
    /**
     * ユーザ認証に関する関数
     */
    public static function signIn($id, $pwd)
    {
        $is_success = false;
        $user = UserQuery::fetchById($id);

        if (!empty($user) && $user->del_flg !== 1) {
            if (password_verify($pwd, $user->pwd)) {
                $is_success = true;
                /**
                 * セッションに情報を格納
                 * /Applications/MAMP/tmp/phpにファイルが格納される。
                 */
                $_SESSION['user'] = $user;
            } else {
                echo 'パスワードが一致しません';
            }
        } else {
            echo 'ユーザが見つかりません';
        }
        return $is_success;
    }

    /**
     * ユーザ登録に関する関数
     */
    public static function regist($user)
    {
        $is_success = false;

        /**
         * 既に登録されているIDでないことを確認する。
         */
        $exist_user = UserQuery::fetchById($user->id);

        if (!empty($exist_user)) {
            echo 'ユーザが既に存在しています';
            return $is_success;
        }

        $is_success = UserQuery::insert($user);

        if ($is_success) {
            $_SESSION['user'] = $user;
        }

        return $is_success;
    }
}
?>

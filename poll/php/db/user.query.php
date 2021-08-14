<?php
namespace db;
use db\DataSource;
use models\UserModel;

class UserQuery
{
    public static function fetchById(string $id)
    {
        $db = new DataSource();
        $sql = 'select * from users u where id = :id ;';
        return $db->selectOne(
            $sql,
            [
                ':id' => $id,
            ],
            DataSource::CLS,
            UserModel::class
        );
    }

    public static function insert($user)
    {
        $db = new DataSource();
        $sql =
            'insert into users(id,pwd,nickname) values (:id, :pwd, :nickname);';
        $hash = password_hash($user->pwd, PASSWORD_DEFAULT);

        return $db->execute(
            $sql,
            [
                ':id' => $user->id,
                ':pwd' => $hash,
                ':nickname' => $user->nickname,
            ],
            DataSource::CLS,
            UserModel::class
        );
    }
}
?>

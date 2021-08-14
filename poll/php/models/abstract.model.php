<?php
namespace models;
use Error;

/**
 * 継承しないと使えないクラス
 */
abstract class AbstractModel
{
    protected static $SESSION_NAME = null;
    public static function setSession($val)
    {
        if (empty(static::$SESSION_NAME)) {
            throw new Error('$SESSION_NAMEを設定してください');
        }
        $_SESSION[static::$SESSION_NAME] = $val;
    }
}
?>
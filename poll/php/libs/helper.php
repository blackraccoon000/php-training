<?php
namespace libs;
class Helper
{
    public static function get_param($key, $default_val, $is_post = true)
    {
        $ary = $is_post ? $_POST : $_GET;
        return $ary[$key] ?? $default_val;
    }

    public static function get_url($path)
    {
        return BASE_CONTEXT_PATH . $path;
    }

    /**
     * $pathはTopページに飛ばす場合は空文字でOK
     */
    public static function redirect($path)
    {
        if ($path === GO_HOME) {
            $path = static::get_url('');
        } elseif ($path === GO_REFERER) {
            $path = $_SERVER['HTTP_REFERER'];
        } else {
            $path = static::get_url($path);
        }
        header("Location: {$path}");
        die();
    }
}

?>

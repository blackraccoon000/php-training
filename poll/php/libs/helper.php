<?php
namespace libs;
class Helper
{
    public static function get_param(
        string $key,
        string $default_val,
        bool $is_post = true
    ) {
        $ary = $is_post ? $_POST : $_GET;
        return $ary[$key] ?? $default_val;
    }

    /**
     * @return string filePath
     */
    public static function get_url(string $path)
    {
        return BASE_CONTEXT_PATH . $path;
    }

    /**
     * $pathはTopページに飛ばす場合は空文字でOK
     */
    public static function redirect(string $path)
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

    public static function isAlNum(string $val)
    {
        return preg_match("/^[a-zA-Z0-9]+$/", $val);
    }
}

?>

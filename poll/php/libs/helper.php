<?php
namespace libs;
class Helper
{
    public static function get_param($key, $default_val, $is_post = true)
    {
        $ary = $is_post ? $_POST : $_GET;
        return $ary[$key] ?? $default_val;
    }
}

?>

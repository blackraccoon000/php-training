<?php
namespace libs;
use Throwable;

function route($rPath, $method)
{
    try {
        if ($rPath === '') {
            $rPath = 'home';
        }
        $targetFile = SOURCE_BASE . "controllers/{$rPath}.php";
        if (!file_exists($targetFile)) {
            require_once SOURCE_BASE . 'views/404.php';
            return;
        }
        require_once $targetFile;
        $fn = "\\controllers\\{$rPath}\\{$method}";
        $fn();
    } catch (Throwable $th) {
        Msg::push(Msg::DEBUG, $th->getMessage());
        Msg::push(Msg::ERROR, '何か問題が発生しました');
        // Helper::redirect('404');
        require_once SOURCE_BASE . 'views/404.php';
    }
}
?>

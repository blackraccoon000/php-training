<?php
declare(strict_types=1);

// $time_str = date('Y-m-d H:i:s');
// http://phpweb.hostnet.com.br/manual/ja/function.sprintf.php
// echo sprintf('%s %s', $time_str, '文字列');

require_once dirname(__FILE__) . '/../s62/index.php';

// パスの確認
// echo dirname(__FILE__) . '/../s62/index.php';

class LogWriter extends MyFileWriter
{
    public $time_str = date('Y-m-d H:i:s');
    protected function format($message)
    {
        // $time = date('Y-m-d H:i:s');
        return sprintf('%s %s', $this->time_str, $message);
    }
}

$info = new LogWriter('info.log');
$info
    ->append('これは通常ログです。')
    ->newLine()
    ->commit(LogWriter::APPEND);

$error = new LogWriter('error.log');
$error
    ->append('これはエラーログです。')
    ->newLine()
    ->commit(LogWriter::APPEND);

?>

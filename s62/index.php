<?php
declare(strict_types=1);
// $content = 'Hello, Bob.';
// $content .= PHP_EOL;
// $content .= 'Bye, Bob.';
// $content .= 'Bob. ';
// $content .= PHP_EOL;

// file_put_contents('sample.txt', $content);
// $content = '';
// $content = 'Good night, Bob.';

// file_put_Contents('sample.txt', $content, FILE_APPEND);
// $content = '';
class MyFileWriter
{
    public string $time = '';
    /**
     * 追加された文字列を格納する変数
     */
    protected string $content = '';
    /**
     * 書き込み先のファイル名を格納する変数
     */
    protected string $fileName;
    /**
     * 追加フラグを格納する
     */
    const APPEND = FILE_APPEND;
    function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }
    function append(string $message): self
    {
        $this->content .= $this->format($message);
        return $this;
    }
    protected function format($message)
    {
        return $message;
    }
    function newLine(): self
    {
        $this->content .= PHP_EOL;
        return $this;
        // return $this->append(PHP_EOL);
    }
    function clear(): self
    {
        $this->content = '';
        return $this;
    }
    function commit($flag = 0): self
    {
        file_put_contents($this->fileName, $this->content, $flag);
        echo $this->content;
        return $this->clear();
    }
}

// $file = new MyFileWriter('sample.txt');
// $file
//     ->append('Hello, Bob.')
//     ->newLine()
//     ->append('Bye, ')
//     ->append('Bob.')
//     ->newLine()
//     ->commit()
//     ->append('Good night, Bob.')
//     ->commit(MyFileWriter::APPEND);

?>

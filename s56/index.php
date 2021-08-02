<?php
class Parson
{
    private $name;
    public $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function hello()
    {
        echo " hello, {$this->name}";
        return $this;
    }
    public function bye()
    {
        echo " bye, {$this->name}";
        return $this;
    }
}

$bob = new Parson('bob', 18);
// bobのnameプロパティがprivateのとき外部からアクセスできない。
// echo "<p>{$bob->name}</p>";
echo "<p>{$bob->age}</p>";
$bob->hello();
$bob->bye();

$tim = new Parson('Tim', 32);
echo "<p>{$tim->age}</p>";
// $tim->hello();
// $tim->bye();
$tim->hello()->bye(); //こんな風に書くことができる。

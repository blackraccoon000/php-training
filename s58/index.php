<?php
class Person
{
    private $name;
    public $age;
    public static $whereToLive = 'Earth';
    public const favorite = 'Kick';
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function hello()
    {
        echo " hello, {$this->name}";
        // byeをhello()から呼ぶ場合には、
        // Person::bye();
        // self::bye(); // こっちでも可
        // static::bye(); // こっちのほうが一般的
        echo ' ' . static::$whereToLive;
        echo ' ' . static::favorite;
        return $this;
    }
    public static function bye()
    {
        // static method は thisが使えない
        echo ' bye';
    }
}

$bob = new Person('bob', 18);
$bob->hello();

// Person::bye();
// $bob::bye(); // こっちでも動くが一般的にはclassを指定する。

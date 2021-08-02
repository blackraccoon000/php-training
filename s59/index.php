<h3>継承を学ぶ</h3>

<?php
abstract class Person
{
    // privateだと継承先から呼ぶことができない。
    // privateのようにして、かつ継承先から呼ぶにはprotected
    protected $name;
    public $age;
    public static $whereToLive = 'Earth';
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo self::$whereToLive;
        echo static::$whereToLive;
    }

    // finalに設定すると継承先で上書き（overrideできない）
    public function hello()
    {
        echo " hello, {$this->name}";
        echo ' ' . static::$whereToLive;
        return $this;
    }
    public static function bye()
    {
        echo ' bye';
    }
    abstract function hey();
}

class Japanese extends Person
{
    public static $whereToLive = '地球';
    function __construct($name, $age)
    {
        parent::__construct($name, $age);
        // $this->name = $name;
        // $this->age = '30';
    }

    public function hello()
    {
        // echo "こんにちは, {$this->name}";
        // echo ' ' . static::$whereToLive;
        echo ' ' . parent::$whereToLive;
        return $this;
    }

    public function hey()
    {
        echo "やあ, {$this->name}";
        return $this;
    }
}

$taro = new Japanese('太郎', 18);
// $taro->hello();
// $taro->hey();
// echo '<p>' . $taro->age . '</p>';


<?php
declare(strict_types=1);
namespace animal;
abstract class Person
{
    protected string $name;
    public int $age;
    public static string $WHERE = 'Earth';

    function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    abstract public function hello(): self;
    static function bye(): void
    {
        echo 'bye';
    }
}

class Japanese extends Person
{
    public static string $WHERE = '日本';
    function hello(): self
    {
        echo "<p>こんにちは、{$this->name}</p>";
        return $this;
    }
    function address(): self
    {
        echo '<p>住所は' . parent::$WHERE . 'です</p>';
        return $this;
    }
}

$taro = new Japanese('太郎', 18);
$taro->hello();
$taro->address();

?>

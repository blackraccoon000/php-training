<?php declare(strict_types=1);
/**
 * https://www.php.net/manual/ja/language.types.declarations.php#language.types.declarations.strict
 */
function add1(int $val)
{
    // return (string) ($val + 1);
    return $val + 1;
}
$result = add1(1);
var_dump($result);

require_once 'person.php';
use animal\Person;
use animal\Japanese;

function callHelloMethod(Person $person): void
{
    $person->hello();
}

$taro = new Japanese('太郎', 18);
callHelloMethod($taro);

<?php
/**
 * スコープ　変数が参照可能な範囲
 * グローバルスコープ
 * ローカルスコープ
 * スーパーグローバル
 */

$a = 0;
function fn1()
{
    $b = 1;
}
function fn2()
{
    // ローカルスコープ
    // echo $b; // Undefined variable
    $b = 2;
    echo $b;
}
function fn3()
{
    //グローバルスコープ
    global $a;
    echo $a;
}
function fn4()
{
    //スーパーグローバルスコープ
    var_dump($_SERVER);
}
fn4();

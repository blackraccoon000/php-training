<?php
namespace controllers\login;

function get()
{
    require_once SOURCE_BASE . 'views/login.php';
}

function post()
{
    echo '<p>POSTが呼ばれました(login)</p>';
}

require_once SOURCE_BASE . 'partials/link.php';
?>

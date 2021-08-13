<?php
namespace controllers\register;
function get()
{
    require_once SOURCE_BASE . 'views/register.php';
}

function post()
{
    echo '<p>POSTが呼ばれました(register)</p>';
}

require_once SOURCE_BASE . 'partials/link.php';
?>

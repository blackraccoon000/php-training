<?php

namespace controllers\home;

function get()
{
    require_once SOURCE_BASE . 'views/home.php';
}

function post()
{
    echo '<p>POSTが呼ばれました(home)</p>';
}

require_once SOURCE_BASE . 'partials/link.php';
?>

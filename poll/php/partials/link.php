<?php
if ($rPath === 'home') {
    echo "<a href='login'>login</a>";
    echo "<a href='register'>register</a>";
} elseif ($rPath === 'login') {
    echo "<a href='home'>home</a>";
    echo "<a href='register'>register</a>";
} elseif ($rPath === 'register') {
    echo "<a href='home'>home</a>";
    echo "<a href='login'>login</a>";
} ?>

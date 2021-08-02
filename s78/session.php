<?php
session_start();
$sessionName = 'SESSION_VISIT_COUNT';
$visitCount = empty($_SESSION[$sessionName]) ? 1 : $_SESSION[$sessionName] + 1;
$_SESSION[$sessionName] = $visitCount;
// echo $_SESSION[$sessionName];
echo "訪問回数は {$visitCount} 回目です。";
?>

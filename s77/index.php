<?php
namespace s77;
session_start();
$_SESSION['VISIT_COUNT'] = 1;
echo $_SESSION['VISIT_COUNT'];
?>

<?php
session_start();
$_SESSION['logged'] = false;
session_unset();
session_destroy();
header("location:login.php?r=success_chngpass");
?>

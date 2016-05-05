<?php

session_start();
include_once 'header.php';

$_SESSION["usernameSignIn"] = null;
$_SESSION["useridSignIn"] = null;


header("Location: http://" . HOMEURL . "/login.php"); /* Redirect browser */
exit();
?>

<?php 
session_start();

setcookie("name", "", time() - 86400 * 30, "/");
session_unset();
session_destroy();

header("Location: index.php?page=login");
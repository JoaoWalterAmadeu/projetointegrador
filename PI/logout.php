<?php
require('session.php');
setcookie("senha", "", time() - 3600);
session_unset();
session_destroy();
header('location: index.php');
?>
<?php
require_once("User.php");
session_start();
session_destroy();
header("location: ../../view/index.php")
?>
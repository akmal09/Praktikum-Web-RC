<?php
require_once('User.php');

$user = new User();
$user->authenticate($_POST['uname'], $_POST['pass']);

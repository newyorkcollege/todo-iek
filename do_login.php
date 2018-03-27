<?php
session_start();

require_once("dbconn.php");

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$password = $_POST["password"];

$result = $pdo->query('SELECT * FROM users WHERE username="' . $username . '" AND password=md5("' . $password . '")');

if($result->rowCount() > 0) {
	$_SESSION['todo_username'] = $username;
	header("Location: dashboard.php");
	die();
}
else {
	$_SESSION['todo_error'] = "Wrong username/password";
	$_SESSION['todo_temp_username'] = $username;
	header("Location: login.php");
	die();
}

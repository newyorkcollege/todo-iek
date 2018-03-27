<?php

require_once("dbconn.php");

$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
$email = $_POST["email"];
$password = $_POST["password"];

$pdo->query("INSERT INTO users (email, password, username) 
	         VALUES ('$email', MD5('$password'), '$username')");

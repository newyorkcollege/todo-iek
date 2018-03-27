<?php

session_start();

unset($_SESSION["todo_username"]);

header("Location: login.php");
die();
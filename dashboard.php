<?php
session_start();
if(isset($_SESSION['todo_username'])) {
	$username = $_SESSION['todo_username'];
}
else {
	header("Location: login.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo - Dashboard</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
	  <a class="navbar-brand" href="#">Todo</a>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="account.php"><?=$username;?></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="logout.php">Logout</a>
	      </li>
	      
	  </div>
	</nav>

	<div class="container">
	  <div class="row">
	    <div class="col">
	      &nbsp;
	    </div>
	    <div class="col">
	      <h2>Dashboard</h2>
	      
	    </div>
	    <div class="col">
	      &nbsp;
	    </div>
	  </div>
	</div>

	<script type="text/javascript" src="jquery/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
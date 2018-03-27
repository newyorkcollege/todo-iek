<?php
session_start();
$temp_username = "";
if(isset($_SESSION['todo_error'])) {
	$error = $_SESSION['todo_error'];
	$temp_username = $_SESSION['todo_temp_username'];
	unset($_SESSION['todo_error']);
	unset($_SESSION['todo_temp_username']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo - Login</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
	  <a class="navbar-brand" href="#">Todo</a>
	</nav>

	<div class="container">
	  <div class="row">
	    <div class="col">
	      &nbsp;
	    </div>
	    <div class="col">
	      <h2>Login</h2>
	      <form action="do_login.php" method="post">
	      	  <?php 
	      	  	if(isset($error)) {
	      	  ?>
	      	  <div class="alert alert-warning" role="alert">
				  <?=$error;?>
			  </div>
			  <?php
				}
			  ?>
			  <div class="form-group">
			    <label for="email">Username</label>
			    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username"
			    value="<?=$temp_username;?>">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
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
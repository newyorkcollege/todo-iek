<!DOCTYPE html>
<html>
<head>
	<title>Todo - Register</title>

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
	      <h2>Register</h2>
	      <form action="do_register.php" method="post">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="email">Username</label>
			    <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp" placeholder="Enter username">
			    <small id="emailHelp" class="form-text text-muted">Username must be unique.</small>
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
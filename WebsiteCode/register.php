<!-- Registration page -->

<!-- php file which takes care of validating login and registration -->
<?php include('html/server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!--Reset stylesheet-->
	<link href="css/reset.css" rel="stylesheet">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<!-- Google fonts stylesheet-->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Josefin+Sans" rel="stylesheet"> 

	<!-- Stylesheet for icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!--Personal css stylesheet-->
	<link href="css/stylesheet.css" rel="stylesheet">
	<title>Sign Up</title>
</head>
</head>
<body class="member">
	<!-- include header file -->
	<?php 
	include('html/header.php');
	?>

	<!-- container for the form with a header for form title -->
	<main class="container2">
		<header class="headerx">
			<h1>Register</h1>
		</header>
		
		<!-- Registration form -->
		<form class="details" method="post" action="register.php">

			<!-- call errors.php to display errors if any (fields not filled etc) -->
			<?php include('html/errors.php'); ?>
			<div class="input-group">
				<label>First Name</label>
				<input type="text" name="firstname" value="<?php echo $firstname; ?>">
			</div>
			<div class="input-group">
				<label>Last name</label>
				<input type="text" name="lastname" value="<?php echo $lastname; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_2">
			</div>

			<button type="submit" class="btn btn-info my-2" name="reg_user">Register</button>

			<!-- Sign in - links to login page -->
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</main>
	<?php
	include('html/footer.php');
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	crossorigin="anonymous"></script>
</body>
</html>
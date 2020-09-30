<!-- Page to submit contact form to database and display the details -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Reset stylesheet-->
	<link href="css/reset.css" rel="stylesheet">
	
	<!-- Google fonts stylesheet-->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Josefin+Sans" rel="stylesheet"> 

	<!-- Stylesheet for icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Personal css stylesheet-->
	<link href="css/stylesheet.css" rel="stylesheet">

	<title>Submission</title>
</head>
<body>

	<!-- include header file -->
	<?php
	include('html/header.php'); ?>


	<article class="index">
		<section class="userinfo">
			<h2 class="anim text-center"><strong>Enquiry submitted</strong></h2>
			<?php
	// connect to the diceddb database
			$db = mysqli_connect('localhost','root','','diceddb')
			or die(mysqli_connect_error());

	// trim and validate input from contact form
			$name = trim($_POST['InputName']);
			$email =trim($_POST['InputEmail']);
			$question = trim($_POST['question']);
			$enquiry = filter_var($question,FILTER_SANITIZE_STRING);

	//getting current date and putting it in appropriate format
			$mydate= getdate(date("U"));
			$today = "$mydate[year]-$mydate[mon]-$mydate[mday]";
			
	// mysql query to insert the contact form details into a row of question table in the database
			$query = "INSERT INTO questions (id, firstname, email, date,  enquiry) 
			VALUES(NULL,'$name', '$email','$today','$enquiry')";
			
	//executing query to databse
			mysqli_query($db, $query);
			
	//display form details using php
			echo "First Name: ".$name; 
			echo "<br>"; 
			echo "Email: " .$email;
			echo "<br>";
			echo "Enquiry: ".$enquiry;
			echo "<br>";

	//close db connection 
			mysqli_close($db);
			?>

			<!-- button that links back to contact form page  -->
			<div class="text-center">
				<a href="contact.php" class="btn btn-info m-5" role="button">Go Back</a>
			</div>
		</section>
		
	</article>

	<!-- adding the footer file -->
	<?php
	include('html/footer.php');
	?>
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
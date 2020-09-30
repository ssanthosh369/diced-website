  <!-- php page to validate user login as well as register new users with the diceddb database -->

  <?php
  session_start();

// function that takes in input password and errors aray and  checks if passwords matches certain criteria - atleast 6 characters long, 
// atleast one number and atleast one letter and push respecitive error messageto the errors array 
  function checkPassword($pwd, &$errors) {
    $errors_init = $errors;

    if (strlen($pwd) < 6) {
      $errors[] = "Password too short! Must be atleast 6 characters";
    }

    if (!preg_match("#[0-9]+#", $pwd)) {
      $errors[] = "Password must include at least one number!";
    }

    if (!preg_match("#[a-zA-Z]+#", $pwd)) {
      $errors[] = "Password must include at least one letter!";
    }     

    return ($errors == $errors_init);
  }

// initializing variables
  $password = "";
  $email    = "";
  $firstname = "";
  $lastname = ""; 
  $errors = array(); 

// connect to the database
  $db = mysqli_connect('localhost','root','','diceddb')
  or die(mysqli_connect_error());

// REGISTER USER if the register button is clicked
  if (isset($_POST['reg_user'])) {
  // receive all input values from the form and trim them
    $firstname = trim(mysqli_real_escape_string($db, $_POST['firstname']));
    $lastname = trim(mysqli_real_escape_string($db, $_POST['lastname']));
    $email = trim(mysqli_real_escape_string($db, $_POST['email']));
    $password_1 = trim(mysqli_real_escape_string($db, $_POST['password_1']));
    $password_2 = trim(mysqli_real_escape_string($db, $_POST['password_2'])); 
    

  // form validation: ensure that the form is correctly filled one field at a time... and if not push error messages into errors array
    if (empty($firstname)) { array_push($errors, "First name is required"); } else
    if (empty($lastname)) { array_push($errors, "Last name is required"); } else
    if (empty($email)) { array_push($errors, "Email is required"); } else
    if (empty($password_1)) { array_push($errors, "Password is required"); } else
    if(empty($password_2)) { array_push($errors, "Confirm the password");} else
    if ($password_1 != $password_2) {
     array_push($errors, "The two passwords do not match");
   } else
   checkPassword($password_1,$errors);

  // first check the database to make sure a user does not already exist in the database with the same email 
   $user_check_query = "SELECT * FROM userinfo WHERE email='$email' LIMIT 1";
   $result = mysqli_query($db, $user_check_query);
   $user = mysqli_fetch_assoc($result);
   
  // if user exists
   if ($user) { 
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = ($password_1);
    // get current date
    $mydate= getdate(date("U"));
    $today = "$mydate[year]-$mydate[mon]-$mydate[mday]";

    //store user information as a new entry in the userinfo table in the database
    $query = "INSERT INTO userinfo (id, firstname, lastname, email, accesslvl, reg_date, password, subscription) 
    VALUES(NULL,'$firstname', '$lastname', '$email', '0','$today', '$password',NULL)";
    mysqli_query($db, $query);
    
    //set the email variable as user's email sto track user's login session
    $_SESSION['email'] = $email;
    
    //redirect to the memeber account details page on successful registration
    header('location: member.php');
  }
}

if (isset($_POST['login_event'])) {
  array_push($errors, "You must login");
}

// LOGIN USER if the login button is clicked
if (isset($_POST['login_user'])) {

  //assign user inptu to our variables
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  //ensuring that all fields are correctly filled
  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  //if there are no errors access database to see if it is a valid account existing in our userinfo table
  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM userinfo WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    //if there is a user with the same password and email, login is successful
    if (mysqli_num_rows($results) == 1) {

     //set the email variable as user's email sto track user's login session
      $_SESSION['email'] = $email;

    //redirect to the memeber account details page on successful login
      header('location: member.php');

    }
    // push error message if login details are incorrect
    else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
?>





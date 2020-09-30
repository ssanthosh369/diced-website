<!-- php page to carry out logout function -->

<?php
// clears the current session variables and then destroys the session
session_start();
$_SESSION = array();
session_destroy();
// redirects to the login page after session has been destroyed aka user has been logged out
header("Location: ..\login.php");

?>
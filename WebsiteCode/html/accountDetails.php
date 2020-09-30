<!-- Php file that takes care of retrieving logged in user info and displaying them -->

<!-- Checks if user is logged in, otherwise redirect to login page -->
<?php 
session_start(); 

if (!isset($_SESSION['email'])) {
 header('location: login.php');
}

?>

<main class="index">

  <article>
    <h2 class="anim text-center"><strong>Home Page</strong></h2>

    <!-- Shows user information if user is logged in-->
    <?php  if (isset($_SESSION['email'])) : ?>
      <section class="userinfo">
       <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
       <?php
       $email = $_SESSION['email'];

      // connecting to databse
       $db = mysqli_connect('localhost','root','','diceddb')
       or die(mysqli_connect_error());
      //getting information from userinfo table from diceddb database whose row matches the logged in user email 
       $sql = mysqli_query($db, "SELECT * FROM userinfo WHERE email ='$email'");
       $row = $sql ->fetch_assoc();
       echo "First Name: ".$row['firstname']; 
       echo "<br>"; 
       echo "Last Name: " .$row['lastname'];
       echo "<br>";
       echo "Registration Date: ".$row['reg_date'];
       echo "<br>";
       
      // checks and sets  subscription as active or not by checking databse
       if($row['subscription']!= 1)
        $status = "Not active";
      else
        $status = "active";
      echo "Subscription: ".$status;
      
      echo "<br>";
      ?>

      <!-- button to call the logout.php page to logout the user -->
      <div class="text-center">
       <a href="html/logout.php" class="btn btn-info m-5" role="button">Logout</a>
     </div>
   </section>
 <?php endif ?>
</article>

</main>
<!-- php page for common header -->

<header>
  <!-- bootstrap navbar which collapses on small screens into a hamburger icon-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <h2 class="navbar-brand ">
      <!-- brand of top navigation bar -->
      <img src="images/diceicon.png" width="30" height="30" class="d-inline-block align-top" alt="dice icon">
    DICED</h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" id="#" role="button" data-toggle="d" aria-haspopup="true" aria-expanded="false">
            About Us
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categories.php" id="#" role="button" data-toggle="d" aria-haspopup="true" aria-expanded="false">
            Our Games
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Events
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="event.php">Upcoming Events</a>
            <a class="dropdown-item" href="event2.php">Weekly Events</a>
            
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="member.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      
      <!-- Login and register buttons -->
      <a href="login.php" class="btn btn-primary btn-sm ml-2" role="button">Login</a>
      <a href="register.php" class="btn btn-primary btn-sm ml-2" role="button">Register</a>
      
    </div>
  </nav>
</header>
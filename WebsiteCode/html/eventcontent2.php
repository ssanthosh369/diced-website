<!-- Php page to get data from weeklyevents table in database and display the results in the form of a table -->

<main class="event">
  <h1 class="anim">WEEKLY EVENTS</h1>
  <?php
// connect to database
  $db = mysqli_connect('localhost','root','','diceddb')
  or die(mysqli_connect_error());

//query for selecting rows from weeklyevents limited to 5
  $user_check_query = "SELECT * FROM weeklyevents LIMIT 10";
  $result = mysqli_query($db, $user_check_query);


// check if row isnt empty and then prints the row details 
  if ($result->num_rows > 0) {
    echo "<table class='anim table table-hover thead-dark table-borderless table-responsive-sm'><tr><th>Event ID</th><th>Name</th><th>Game</th><th>Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["event_name"]. "</td><td>" .$row["event_game"]."</td></td><td>" .$row["Day"]."</td></tr>";
    }
    echo "</table>";
  } else {
  // if table is empty print message
    echo "No events currently being held";
  }
// close connection
  mysqli_close($db);
  ?>
</main>



















<!-- <main class="event">

<h1>Upcoming events </h1>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event Name</th>
      <th scope="col">Game</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Summer Tourney</td>
      <td>Magic the Gathering</td>
      <td>May 20th 2019</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Chess Masters</td>
      <td>Chess</td>
      <td>June 5th 2019</td>
    </tr>
    <tr>
      <th scope="row">3</th>
	  <td>Word King</td>
      <td>Scrabble</td>
      <td>June 12th 2019</td>
    </tr>
  </tbody>
</table>

<h1>Regular events </h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Event Name</th>
      <th scope="col">Game</th>
      <th scope="col">Day</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Weekend Tourney</td>
      <td>Magic the Gathering</td>
      <td>Fridays</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>D&D meetups</td>
      <td>Dungeons and Dragons 3.0</td>
      <td>Mondays and Saturdays</td>
    </tr>
    <tr>
      <th scope="row">3</th>
	  <td>Assorted games</td>
      <td>Any</td>
      <td>Sundays</td>
    </tr>
  </tbody>
</table>

</main> -->
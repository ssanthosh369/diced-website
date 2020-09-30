

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Reset stylesheet-->
    <link href="css/reset.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Josefin+Sans" rel="stylesheet"> 

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Personal css stylesheet-->
    <link href="css/stylesheet.css" rel="stylesheet">
    <title>About US</title>
<body>
<?php
include('html/header.php');
?>
<!--Image Galery-->
<!--I used three div tag to divide the images in page. This ratio is 4/12 and max 3 photos can be shown in every row.-->
<section class="desc">
    <!--This class has a jumbotron and image on it.-->
    <!--Inside to the div I created text on it.-->
<div class="card card-image" style="background-image: url('images/monopoly.jpg');">
    <div class="text-white text-center rgba-stylish-strong py-5 px-4">
        <div class="py-5">

            <!-- Content -->
            <h5 class="h5 orange-text"><i class="fas fa-dice"></i>Gaming</h5>
            <h2 class="card-title h2 my-4 py-2">About Us</h2>
            <p class="mb-4 pb-2 px-md-5 mx-md-5">GL & HF</p>

        </div>
    </div>
</div>

<!-- Jumbotron -->
    <!--Paragraph tag prints the text and with style tag it changes the color and margin-top blanks from the top 2px.-->
    <!--This paragraph created at the en of the page-->
<p>Let's get together and play board games!
    We started this website to meet other people
    and expand our gaming circles. We plan to hold regular meet
    ups after hours in our Dublin office.
    All skill levels are welcome. We're a mixed bag of game players. Some of us
    have been playing board games for ages, some of us have only just begun
    to discover the wealth of board games out there. Some of us prefer Euros, others
    are more interested in the American style, dripping with theme board games. Some
    of us like abstracts. Some of us just like everything. All of us like to play games
    and just having a good time. We live all over Dublin have been gathering players from
    all over Europe and beyond!The Diced Social Club is a game club for
    everyone who wants to socialize and have fun. If you want to have have
    fun and meet with new people we are waiting for you.
</p>
</section>

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

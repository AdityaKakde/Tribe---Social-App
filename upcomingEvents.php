<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>EVENTS NEAR YOU</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="/owl.theme.default.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="style.css" />










  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
    color: black;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 15px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;
      color: #000;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
    color: #000;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
      color: #000;
  }
}

/* Style the counter cardss */
.cards {
  box-shadow: 0 4px 8px 0 rgba(1, 1, 1, 1.2);
  padding: 8px;
  margin-top:10px;
  margin-left: 10px;
  text-align: center;
  background-color: #f1f1f1;
  color:#000;
}
</style>
</head>
<body>
<script type="text/javascript" src="bootstrap.min.js"></script>

	<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
        <!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
						<img class="logo-img" src="img/Tribe-Logo.jpg" alt="logo">
						<!--<img class="logo-alt-img" src="img/Tribe-Logo.jpg" alt="logo">-->
					</a>
				</div>
				<!-- /Logo -->

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.html">ABOUT US</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contactUs.html">CONTACT US</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul><li class="nav-item" style="align-content: left;">
        <a class="nav-link" href="pastEventsPage.html">PAST EVENTS</a>
          </li></ul>
    </form>
  </div>
</nav>




<h3 style="color:#3477FB; font-size: 35px; margin-top: 25px; margin-left: 35px; margin-bottom: 20px;" >Trending Events Near you</h3>

<div class="row">
<?php
$con = mysqli_connect("localhost","root","","tribe");
$sql = "SELECT * FROM events";
$result = $con -> query($sql);
if($result -> num_rows > 0){
  while($row = $result -> fetch_assoc()){
    echo '<div class="column">';
    echo '<div class="cards">';
    echo '<img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">'.$row['etitle'].'</h5>';
    echo '<p class="card-text">'.$row['edescription'].'</p>';
    echo '<a href="index.html" class="btn btn-primary">Intrested</a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo($row['etitle']);
  }
}


?>
</div>


<!-- <div class="row">
  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>
  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>

  <div class="column">
    <div class="cards">
      <img class="card-img-top" src="img/cyclingCover.jpg" alt="img/Tribe-Logo.jpg">
    <div class="card-body">
      <h5 class="card-title">CYCLING</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

        <a href="index.html" class="btn btn-primary">Intrested</a>
    </div>
    </div>
  </div>
</div> -->






</body>

</html>

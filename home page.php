<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>BOOKPG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: 10px;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
      text-shadow:4px;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }

  .nav-tabs li a {
      color: #777;
  }

  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }

  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  </style>
</head>

<?php $name; $nam= $_GET['name']; echo $nam; ?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#myPage">HOME</a></li>	
        <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php $name; $nam= $_GET['name']; echo $nam; ?></a></li>
        <li><a href="pgsignin.php"><span class="glyphicon glyphicon-log-in"></span>Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="homepic/a.jpg" alt="" style="width:1200px; height:600px">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="homepic/b.jpg" alt="" style="width:1200px; height:600px">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="homepic/c.jpg" alt="" style="width:1200px; height:600px">
        <div class="carousel-caption">

        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div id="locations" class="bg-1">
  <div class="container-fluid">
    <div class="row text-center">
      <h1> LOCATIONS</h1><br>
      <div class="col-md-3">
        <div class="thumbnail"><a href="kailash.php">
          <img src="homepic/d.jpg" alt="" style="width:600px; height:350px">
          <p><strong>Greater Kailash</strong></p></a>

        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail"><a href="indirapuram.php">
          <img src="homepic/e.jpg" alt="" style="width:600px; height:350px">
          <p><strong>Indirapuram</strong></p></a>


        </div>
      </div>
      <div class="col-md-3">
        <div class="thumbnail"><a href="hauzkhas.php">
          <img src="homepic/f.jpg"  style="width:600px; height: 350px">
          <p><strong>Hauz Khas</strong></p></a>


        </div>
      </div>

      <div class="col-md-3">
        <div class="thumbnail"><a href="mayurvihar.php">
          <img src="homepic/k.jpg" alt="" style="width:600px; height:350px">
          <p><strong>Mayur Vihar</strong></p></a>


        </div>
      </div>
    </div>
  </div>
</div>


<div id="contact" class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Archita</a></li>
    <li><a data-toggle="tab" href="#menu1">Shivam</a></li>
    <li><a data-toggle="tab" href="#menu2">Prakhar</a></li>
    <li><a data-toggle="tab" href="#menu3">Somil</a></li>
    <li><a data-toggle="tab" href="#menu4">Yasharth</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Archita Mittal, Front End developer</h2>

    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Shivam Singh, Front and Back End developer</h2>

    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>PrakharDev Singh, Back End developer</h2>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h2>Somil Rastogi, Back End developer</h2>

    </div>
    <div id="menu4" class="tab-pane fade">
      <h2>Yasharth, Back End developer</h2>

    </div>
  </div>
</div>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>

</footer>


</body>
</html>

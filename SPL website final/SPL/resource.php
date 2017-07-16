<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>useful resources</title>
	 <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="shortcut icon" type="image/jpg" href="images/logo.jpg"/>
<script type="text/javascript">
	$(document).ready(function(){
		$("").addClass("active");
	});
</script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
 </head>

  <body>

<?php include "header.php"; ?>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <a href="http://www.tedxdtu.in/" target="_blank"><img src="images/tedx.jpg" alt="tedx" width="460" height="345"></a>
      </div>

      <div class="item">
       <a href="https://campuscommune.tcs.com/en-in/intro" target="_blank"> <img src="images/codevita.jpg" alt="codevita" width="460" height="345"></a>
      </div>

      <div class="item">
        <a href="https://code.google.com/codejam/" target="_blank"> <img src="images/codejam.jpg" alt="codejam" width="460" height="345"></a>
      </div>

      <div class="item">
        <a href="https://campuscommune.tcs.com/en-in/intro" target="_blank"> <img src="images/Testimony2017.jpg" alt="testimony" width="460" height="345"></a>
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="color:red;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="color:red;">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php include "footer.php"; ?>
  </body>
</html>

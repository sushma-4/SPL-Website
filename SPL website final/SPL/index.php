<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SPL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>
    <?php include "header.php"; ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><font face="Rockwell">Society of Programming Languages</font></h1>
        <p><font face='Sitka Subheading'>SPL(Society of Programming Languages) is the sole Tehnical club for students of Computer Science entirely run by the students themselves and greatly supported by some faculty members.</font></p>
        <p><a class="btn btn-primary btn-lg" href="achievement.php" role="button">Check out our Achievements &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Upcoming Events</h2>
          <p>The first ever exclusive HackerRank contest is about to go live.Ofcourse, it's free and if you code like hell to make it to the top ,HackerRank shall have something stacked up for you!
          </p>
          <p><a class="btn btn-default" href="upcoming.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Past Events</h2>
          <p>SPL has always been determined in developing the technical skills of the participants through various hackathons or projects in various programming languages and in different working environments.</p>
          <p><a class="btn btn-default" href="past.php" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Competetive Events</h2>
          <p>We would be sharing a few important and competitive events for budding developers and tech enthusiasts where they can participate and improve their programming skills. </p>
          <p><a class="btn btn-default" href="resource.php" role="button">View details &raquo;</a></p>
        </div>
      </div>
    </div> <!-- /container -->
     <?php include "footer.php"; ?>
  </body>
</html> 

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#home").addClass("active");
	});
</script>

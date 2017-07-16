<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SPL</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/achieve.css" rel="stylesheet">
  </head>

  <body>
    <?php include "header.php"; ?>
    <div class="heading">Achievements</div>
    <div id="achievements" class="container">
      <div class="panel-group" id="accordion">
    <?php
      include "connection.php";
      $stmt=$conn->prepare("SELECT name,heading,achievement from achieve where display=1");
      $stmt->execute();
      $stmt->bind_result($name,$head,$achieve);
      $count=0;
      while($stmt->fetch()){  $count++;
    ?>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href='<?php echo "#collapse$count"; ?>'><?php echo $head; ?></a>
            </h4>
          </div>
          <div id='<?php echo "collapse$count"; ?>' class="panel-collapse collapse">
            <div class="panel-body"><?php echo $achieve; ?><div id="achiever">Achieved By : <?php echo $name; ?></div></div>
          </div>
        </div>
    <?php } ?>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html> 
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
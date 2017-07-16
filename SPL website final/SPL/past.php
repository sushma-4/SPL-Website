 <?php
include "connection.php";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT heading,description,winners FROM past_event";
$result = mysqli_query($conn, $sql);
$a=mysqli_num_rows($result);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Past Events</title>
    <!--Importing google fonts-->
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script> 
<?php
for($i=0;$i<$a;$i++)
{
echo<<<EOT

	$(document).ready(function(){
   	 $(".flip$i").click(function(){
         $(".panel$i").slideToggle("slow");
    	});
	});
EOT;
}
?>	

</script>

<style> 
<?php
for($i=0;$i<$a;$i++)
{
echo<<<EOT
	
	.panel$i, .flip$i {
    	padding: 5px;
 	text-align: left;
	margin-left:05px;
	margin-right:5px;
	border-radius:5px;
   	background-color: #e5eecc;
    	border: solid 1px #c3c3c3;
    	font-family: "Comic Sans MS", cursive, sans-serif;
	 }
	
	.panel$i {
	   padding: 50px;
	   display: none;
	   opacity:0.7;
	}
EOT;
}
?>	

</style>
  
</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
	
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<br><br>

<?php
$i=0;
while($row = mysqli_fetch_assoc($result)) {
     

    
		echo "<div class='flip$i'>".$row["heading"]."</div>";
		echo "<div class='panel$i'>".$row["description"]."<br><b>Winner:</b>".$row["winners"]."</div>";
		$i++;

		echo "<br>";
}		
?>
      <hr>

      <footer>
<div style="position:absolute;bottom:0px;margin-left:40%">
        <p>&copy; SPL, The Northcap University</p>
</div>
      </footer>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html> 
<?php
mysqli_close($conn);
?>

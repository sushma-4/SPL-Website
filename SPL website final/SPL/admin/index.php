<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		?>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="css/admin.css" rel="stylesheet">
		<div class="heading">Admin Panel<a href="../index.php"><button class="right btn btn-primary">Home</button></a></div>
		<a href="approve_achieve.php"><button class="btn btn-block btn-primary adminmenu">Approve Achievements</button></a>
		<a href="approve_event.php"><button class="btn btn-block btn-primary adminmenu">Approve Events</button></a>
		<?php
	}else
		header("location: ../index.php");
?>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
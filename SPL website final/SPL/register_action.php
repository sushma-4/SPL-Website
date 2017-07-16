<?php
	session_start();
	if(!isset($_SESSION['login'])) 
	{
		
	echo "<script type='text/javascript'>
			alert('login first!');
			window.location.href='index.php';
			</script>";
	}
	else
{
	include "connection.php";
	$name1=$_SESSION['login'];
	
	$title=$_POST['submit'];

	$sql = "SELECT applied_by FROM coming_event where coming_event_id=$title";
	 
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
	$already=$row["applied_by"];
	if(strpos($already,$_SESSION['login'].","))
	{
	echo "<script type='text/javascript'>
			alert('Already Registered!');
			window.location.href='index.php';
			</script>";
	}
	else
	{
	$new=$already.$_SESSION['login'].",";
	
	$sql = "Update coming_event set applied_by="."'".$new."'"." where coming_event_id=$title";
	$result = mysqli_query($conn, $sql);
	
	}
	echo "<script type='text/javascript'>
			alert('Registration Done!');
			window.location.href='index.php';
			</script>";
	}
}	
$conn->close();
	?>
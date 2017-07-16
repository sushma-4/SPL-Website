<?php
	if($_POST['eventname']==NULL || $_POST['eventemail']==NULL || $_POST['eventmssg']==NULL)
		header("location: index.php");
	else{
		include "connection.php";
		$stmt=$conn->prepare("INSERT into event(name,email,description) values(?,?,?)");
		$stmt->bind_param("sss",$_POST['eventname'],$_POST['eventemail'],$_POST['eventmssg']);
		$stmt->execute();
		echo "<script>
				alert('Thanks for contacting us!');
				window.location.href='index.php';
				</script>";
	}
?>
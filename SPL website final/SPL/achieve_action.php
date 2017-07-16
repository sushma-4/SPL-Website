<?php
	if($_POST['achievename']==NULL || $_POST['achieveemail']==NULL || $_POST['achievemssg']==NULL)
		header("location: index.php");
	else{
		include "connection.php";
		$stmt=$conn->prepare("INSERT into achieve(name,email,achievement) values(?,?,?)");
		$stmt->bind_param("sss",$_POST['achievename'],$_POST['achieveemail'],$_POST['achievemssg']);
		$stmt->execute();
		echo "<script>
				alert('Thanks for contacting us!');
				 window.location.href='index.php';
				</script>";
	}
?>
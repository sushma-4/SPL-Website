<?php
	if($_POST['contactname']==NULL || $_POST['contactemail']==NULL || $_POST['contactmssg']==NULL)
		header("location: index.php");
	else{
		include "connection.php";
		$stmt=$conn->prepare("INSERT into contact(name,email,message) values(?,?,?)");
		$stmt->bind_param("sss",$_POST['contactname'],$_POST['contactemail'],$_POST['contactmssg']);
		$stmt->execute();
		echo "<script>
				alert('Thanks for contacting us!');
				window.location.href='index.php';
				</script>";
	}
?>
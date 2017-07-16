<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		include "../connection.php";
		$stmt=$conn->prepare("SELECT name,email,achievement from achieve where achieve_id=?");
		$stmt->bind_param("i",$_POST['id']);
		$stmt->execute();
		$stmt->bind_result($name,$email,$achieve);
		if($stmt->fetch()){
			$result = array();
			$result['name']=$name;
			$result['email']=$email;
			$result['achieve']=$achieve;
			echo json_encode($result);
		}
	}else
		header("location: ../index.php");
?>

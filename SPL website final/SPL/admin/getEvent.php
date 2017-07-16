<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		include "../connection.php";
		$stmt=$conn->prepare("SELECT name,email,description from event where event_id=?");
		$stmt->bind_param("i",$_POST['id']);
		$stmt->execute();
		$stmt->bind_result($name,$email,$desc);
		if($stmt->fetch()){
			$result = array();
			$result['name']=$name;
			$result['email']=$email;
			$result['desc']=$desc;
			echo json_encode($result);
		}
	}else
		header("location: ../index.php");
?>

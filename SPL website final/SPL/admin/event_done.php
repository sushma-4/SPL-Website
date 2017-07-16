<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		include "../connection.php";
		
		$stmt=$conn->prepare("Insert into coming_event(heading,description) values (?,?)");
		$stmt->bind_param("ss",$_POST['heading'],$_POST['desc']);
		$stmt->execute();
		
		$stmt1=$conn->prepare("delete from event where event_id=?");
		$stmt1->bind_param("i",$_POST['id']);
		$stmt1->execute();
		
		$result=array();
		$result['mssg']="Approved!";
		
		echo json_encode($result);
	}else
		header("location: ../index.php");
?>

<?php
	session_start();
	if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
		include "../connection.php";
		$stmt=$conn->prepare("UPDATE achieve set display=1, heading=? where achieve_id=?");
		$stmt->bind_param("si",$_POST['heading'],$_POST['id']);
		$stmt->execute();
		$result=array();
		$result['mssg']="Approved!";
		echo json_encode($result);
	}else
		header("location: ../index.php");
?>

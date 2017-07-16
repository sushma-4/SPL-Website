<?php
	session_start();
	$input=true;
	if(!isset($_SESSION['emailcheck']) || !isset($_SESSION['namecheck']))
		$input=false;
	else if(strlen($_POST['uname'])<4)
		$input=false;
	else if($_POST['firstname']==NULL)
		$input=false;
	else if($_POST['lastname']==NULL)
		$input=false;
	else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		$input=false;
	else if(strlen($_POST['password'])<8)
		$input=false;

	unset($_SESSION['emailcheck']);
	unset($_SESSION['namecheck']);
	if(!$input){
		echo "<script type='text/javascript'>
				alert('Bad Input!');
				window.location.href='index.php';
				</script>";

	}
	else{
		include "connection.php";
		$stmt=$conn->prepare("INSERT INTO user(username,firstname,lastname,email,phone,password) VALUES(?,?,?,?,?,?)");
		$pass=password_hash($_POST['password'],PASSWORD_DEFAULT);
		$stmt->bind_param("ssssss",$_POST['uname'],$_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['phone'],$pass);
		$stmt->execute();
		$conn->close();
		echo "<script type='text/javascript'>
				alert('Sign Up Done!');
				window.location.href='index.php';
				</script>";
	}
?>
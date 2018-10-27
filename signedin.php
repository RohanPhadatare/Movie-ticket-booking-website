<?php
include 'conn.php';
session_start();
	$email1=$_POST['email'];
	$pass1=$_POST['pass'];

	$select=mysqli_query($conn,"SELECT * from `user` where email='".$email1."'");
	while($result=mysqli_fetch_array($select)){
		$mail=$result['email'];
		$pwd=$result['password'];
		$name=$result['name'];
		if($mail!=$email1 || $pwd!=$pass1){
			echo "<script type=\"text/javascript\">window.alert('Incorrect email or password!');
			window.location.href = 'signin.html';</script>"; 
			exit;
		}else{
			$_SESSION['nm']=$name;
			echo "<script type=\"text/javascript\">window.alert('Logged in successfully!');
			window.location.href = 'user.php';</script>"; 
			exit;
		}
	}
?>

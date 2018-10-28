<?php
include 'conn.php';
session_start();
	$email1=$_POST['email'];
	$pass1=$_POST['pass'];

	$select=mysqli_query($conn,"SELECT * from `user` where email='".$email1."' AND password='".$pass1."'");
	$flag=0;
	while($row=mysqli_fetch_array($select)){
		$flag=1;
		$name=$row['name'];
	}
	if($flag==1){
		$_SESSION['nm']=$name;
		echo "<script type=\"text/javascript\">window.alert('Logged in successfully!');
		window.location.href = 'user.php';</script>"; 
		exit;
	}else{
		echo "<script type=\"text/javascript\">window.alert('Incorrect email or password!');
		window.location.href = 'signin.html';</script>"; 
		exit;
	}

?>

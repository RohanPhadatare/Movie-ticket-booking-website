<?php
include 'conn.php';   

	$name1=$_POST['name'];
	$email1=$_POST['email'];
	$pass1=$_POST['pass'];
	$mobile1=$_POST['mobile'];
	$flag=0;
		$select=mysqli_query($conn,"SELECT * from user where email='".$email1."'");
	
    	while($result=mysqli_fetch_array($select)){
	    	$flag=1;
       	}
    	if($flag==0){
        	$insert = $conn->query("INSERT into user (name,email,password,mobile) VALUES ('".$name1."','".$email1."','".$pass1."','".$mobile1."')");
			echo "<script type=\"text/javascript\">window.alert('New record inserted successfully!');
			window.location.href = 'signin.html';</script>"; 
			exit;
    	}else{
			echo "<script type=\"text/javascript\">window.alert('Someone already registered using this email!');
			window.location.href = 'signup.html';</script>"; 
			exit;
	    }
?>

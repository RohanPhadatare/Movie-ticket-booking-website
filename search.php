<?php
include 'conn.php';
session_start();
$iname=$_POST['name'];
        $select=mysqli_query($conn,"SELECT * from movie where name='".$iname."'");
        $flag=0;
        while($result=mysqli_fetch_array($select)){
            $flag+=1;
            $img=$result['image'];
            $_SESSION['abc']=$img;
            header("Location:searched.php");
        }
        if($flag==0){
            echo "<script type=\"text/javascript\">window.alert('No such movie found!');
			window.location.href = 'user.php';</script>";
        }

?>

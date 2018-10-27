<?php
include 'conn.php';

        $mn=$_POST['name'];
        $lan=$_POST['lan'];
        $gen=$_POST['gen'];
        $per=$_POST['per'];
        $rat=$_POST['rat'];
        $image=$_FILES['image']['name'];
        
        $select=mysqli_query($conn,"SELECT * from movie where name='".$mn."'");
        $flag=0;
        while($result=mysqli_fetch_array($select)){
            $flag+=1;
        }
        if($flag==0){
            $insert = $conn->query("INSERT into movie (name,language,genre,period,rating,image) VALUES ('".$mn."','".$lan."','".$gen."','".$per."','".$rat."','".$image."')");
            echo "<script type=\"text/javascript\">window.alert('New record inserted successfully!');
			window.location.href = 'admin_dash.html';</script>"; 
			exit;
        }else{
            echo "<script type=\"text/javascript\">window.alert('Record exists already!');
			window.location.href = 'add.html';</script>"; 
			exit;
        }

?>

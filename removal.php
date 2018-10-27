<?php
include 'conn.php';
$mn=$_POST['name'];
$select=mysqli_query($conn,"SELECT * from movie where name='".$mn."'");
$del="DELETE FROM `tk`.`movie` WHERE `movie`.`name` = '".$mn."'";
$flag=0;
while($result=mysqli_fetch_array($select)){
    $flag+=1;
}
if($flag==1){
    mysqli_query($conn,$del);
    echo "<script type=\"text/javascript\">window.alert('Record deleted successfully!');
	window.location.href = 'admin_dash.html';</script>"; 
	exit;
}else{
    echo "<script type=\"text/javascript\">window.alert('No Record found!');
	window.location.href = 'remove.html';</script>"; 
    exit;
}

?>
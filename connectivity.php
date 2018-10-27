    <?php
    include 'conn.php';
    $name=$_POST['uname'];
    $pwd=$_POST['pwd'];
    if($name=="admin" && $pwd=="password123")
    {
        echo "<script type=\"text/javascript\">window.alert('Logged in successfully!');
		window.location.href = 'admin_dash.html';</script>"; 
		exit;
    }
    else{
        echo "<script type=\"text/javascript\">window.alert('Incorrect username or password!');
		window.location.href = 'admin.html';</script>"; 
		exit;
    }
    ?>


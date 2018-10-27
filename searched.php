<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="demo_css.css" >
</head>
<body>
<div class="topnav">
    <img src="ticket-single.png" alt="logo" id="photo" align="left" width="125px" height="95px">
     <form method="post" action="search.php">
  <input type="text" placeholder="Search for movies..." name="name">
  <input type="submit" id="sub" value="OK">
  <a href="home.html"><input id="l2" type="button" value="Logout"></a>
  <label id="l1"><?php
    session_start();
    echo "Welcome ".$_SESSION['nm'];
    ?></label>
    </form>  


<div class="bottom_menu">  
     
<marquee direction="left">
  <b>*New releases have been added! Check out the trailers given below!* </b>
</marquee>
 </div>
</div>
<table style="border: 0px; font-family: 'Courier New', Courier, monospace; width: 35%; padding: 0px; float: left;">
    <tr>
    <td><img src="<?php echo $_SESSION['abc']; ?>" style="height: 30%; width: 50%;"><br>
    <button><a href="seat.html">Buy tickets </a></button>
    <button><a href="https://www.youtube.com">Trailer</a></button>
    </td>
</tr>
</table>
</body>
</html>
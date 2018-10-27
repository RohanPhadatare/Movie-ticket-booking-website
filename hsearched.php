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
    <form method="post" action="hsearch.php">
  <input type="text" placeholder="Search for movies..." name="name">
  <input type="submit" action="#search" id="sub" value="OK">
   <a href="signin.html" id="su"><b>SIGN IN</b></a>
   <a href="signup.html" id="su"><b>SIGN UP</b></a>
  </form>
<div class="bottom_menu">  

<marquee direction="left">
  <b>*New releases have been added! Check out the trailers given below!* </b>
</marquee>
 </div>
</div>
<table style="border: 0px; font-family: 'Courier New', Courier, monospace; width: 35%; padding: 0px; float: left;">
    <tr>
    <td><img src="<?php session_start(); echo $_SESSION['pqr']; ?>" style="height: 30%; width: 50%;"><br>
    <button><a href="https://www.youtube.com">Trailer</a></button>
    </td>
</tr>
</table>

 
    
</body>
</html>
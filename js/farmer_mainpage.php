<?php 
//Start the session to see if the user is authenticated user. 
if(!isset($_SESSION['USER_ID'])) session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 


} 
else{ 
include('location:login_form.php'); 
exit(); 
} 

echo '
<html>
	<head>
		<title>
			FARMER HOME
		</title>
		
		<link href="style.css" rel="stylesheet" type="text/css">
	
    </head>
<body>		
<header>	
	<div class="row" >
        <div class="logo">
        <img src="lions.png">
        </div>
	<ul class="main-nav">
        <li class="active"><a href="farmer_mainpage.php">HOME</a></li>
        <li><a href="my_profilef.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero"><center><font size="6px" color="#F2E3E3">DEPARTMENT OF AGRICULTURE</font></center>
	                  <center><font size="7px" color="#F2E3E3">WELCOMES YOU</font></center>
	<div class="button">
	<center>
	<table>
	<tr><td>
     <a href=".php" class="btn btn-one" >PROPOSE PRICE</a></td>
     <td><a href=".php" class="btn btn-two">ACCEPTED CROPS</a></td>
     <td><a href=".php" class="btn btn-three">APPLY LOAN</a></td>
     <td><a href="loans_taken.php" class="btn btn-four">LOANS TAKEN</a></td></tr>
	 </table>
	 </center>
  </div>
</div>
	
	
</header>	
</body>
</html>';

?>
		
	
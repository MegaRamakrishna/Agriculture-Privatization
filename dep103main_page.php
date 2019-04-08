


<?php 
//Start the session to see if the user is authenticated user. 
session_start(); 
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
			CAMPS
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
        <li class="active"><a href="dep103main_page.php">HOME</a></li>
        <li><a href="my_profileemp103.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero"><center><font size="7px" color="#F2E3E3">CROP SERVICE DEPARTMENT</font></center><br />
	<div>
	<br/>
	<center>
	<table>
	<tr><td>
     <a href="completed_camps.php" class="btn btn-one" >COMPLETED</a></td>
     <td><a href="beingheld_camps.php" class="btn btn-two">BEING HELD</a></td>
     <td><a href="farmer2_details.php" class="btn btn-four">FARMER DETAILS</a></td></tr>
	 </table>
	 </center>
  </div>
</div>
	
	
</header>	
</body>
</html>';

?>
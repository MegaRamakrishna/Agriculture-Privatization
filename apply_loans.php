




<html>
	<head>
		<title>
			APPLY
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
        <li><a href="farmer_mainpage.php">HOME</a></li>
        <li><a href="my_profilef.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero1"><center><font size="7px" color="#F2E3E3">SUBMIT BELOW TO APPLY LOAN</font></center><br />
	<br/>
	
	<form method="post" name="editempprofile" action="apply_loansaction.php">
	<center>
	
	<?php 
		error_reporting(E_ALL ^ E_DEPRECATED);
		//Start the session to see if the user is authenticated user. 
		if(!isset($_SESSION['USER_ID']))session_start(); 
		//Check if the user is authenticated first. Or else redirect to login page 
		//Check if the user is authenticated first. Or else redirect to login page 
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
			
		} 
		else{ 
			include('location:login_form.php'); 
		exit(); 
		} 

		$link = mysql_connect("localhost", "root", ''); 
	
		$db = mysql_select_db('project'); 
	
		echo '
		<table class="tablee">
		<tr>
		<td class="tdd">USER ID*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="number" name="f_id" disabled value="'.$_SESSION['USER_ID'].'"></td>
	    </tr>
		</table>
		';
		
		
	

	
		?>
		
		</center>	
	<br/>
	<center><br/>
	<td><input class="btn btn-one" type="submit" name="submit" value="SUBMIT"></td>
	</center>
	<br />
	</form>
	</div>
</body>
</html>


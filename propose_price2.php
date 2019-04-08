




<html>
	<head>
		<title>
			PROPOSE
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
        <li ><a href="farmer_mainpage.php">HOME</a></li>
        <li ><a href="my_profilef.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero1">
	
	<form method="post" name="editempprofile" action="propose_priceaction.php">
	
	<center><h1 class="color">CROP PROPOSAL</h1></center><br/>
	
	<center>
	<table class="tablee">
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
	
		echo '<tr>
		<td class="tdd">CROP NAME*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="text" name="c_name" placeholder="ENTER CROP NAME" required></td>
	    </tr>
		
		<tr>
		<td class="tdd">CROP PRICE*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="number" name="f_proposal" placeholder="ENTER CROP PRICE" required></td>
	    </tr>
		
		';
		
		
	

	
		?>
		</table>
		
		
		<?php
				echo "<div class='color'>";
		echo "<br/><br/><br/><br/><br/><br/><br/>";
		echo "<b><center>WE CANNOT RECORD YOUR RESPONSE..</center>";
		echo "<CENTER>PROCEED ENTER VALID CROP!!</CENTER></b>";
        echo "</div>";
		?>
		</center>	
	<br/>
	<center>
	<td><input class="btn btn-one" type="submit" name="submit" value="SUBMIT"></td>
	</center>
	<br />
	</form>
	</div>
	
		
</body>
</html>


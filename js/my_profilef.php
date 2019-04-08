




<html>
	<head>
		<title>
			PROFILE
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
        <li class="active"><a href="my_profilef.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div><br />
	<div class="hero1"><center><font size="7px" color="#F2E3E3">MY DETAILS</font></center><br />
	
	<form method="post" name="editempprofile" action="my_profilef_edit.php">
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
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result = mysql_query("SELECT * FROM farmer WHERE f_id='".$_SESSION['USER_ID']."' ;" ); 
		
		
		

		$count = mysql_num_rows($result);


	
		if( $count != 0 ){
		
		$m = mysql_fetch_array($result);
		echo '
		<tr>
		<td class="tdd">USER ID*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="number" name="f_id" disabled value="'.$m['f_id'].'"></td>
	    </tr>
		
		
		<tr>
		<td class="tdd">NAME*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="text" name="f_name" value="'.$m['f_name'].'"></td>
	    </tr>
		
		
		<tr>
		<td class="tdd">DATE OF BIRTH*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="date" name="dateofbirth" value="'.$m['dateofbirth'].'"></td>
	    </tr>
		
		
		<tr>
		<td class="tdd">SEX*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="text" name="sex" disabled value="'.$m['sex'].'"></td>
		</tr>
		
		<tr>
		<td class="tdd">ADDRESS*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="text" name="address" value="'.$m['address'].'"></td>
		</tr>
		
		<tr>
		<td class="tdd">PINCODE*</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="number" name="r_id" value="'.$m['r_id'].'"></td>
		</tr>
		
				
		<tr>
		<td class="tdd">NEW PASSWORD</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="password" name="passwordf" placeholder="ENTER NEW PASSWORD" ></td>
		</tr>
		
		
	    <tr>
		<td class="tdd">PASSWORD**</td>
		<td class="tdd">:</td>
		<td class="tdd"><input type="password" name="password" placeholder="ENTER OLD PASSWORD" required="required"></td>
		</tr>

		';
		
		}
	
	
		else{
			
			echo '<div style="padding:50px;"><h1><center>NO RECORD FOUND</center></h1></div>';
		
		}
	
		?>
		</table>
		</center>	
	<br/>
	<center>
	<td><input class="btn btn-one" type="submit" name="submit" value="SAVE"></td>
	</center>
	</form>
	</div>
</body>
</html>


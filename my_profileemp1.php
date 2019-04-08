




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
        <li><a href="dep101main_page.php">HOME</a></li>
        <li class="active"><a href="my_profileemp.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero1">
	
	<form method="post" name="editempprofile" action="my_profileemp_edit.php">
	<center>
	<table class="tablee1">
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
		$result = mysql_query("SELECT * FROM employee WHERE emp_id='".$_SESSION['USER_ID']."' ;" ); 
		
		
		

		$count = mysql_num_rows($result);


	
		if( $count != 0 ){
		
		$m = mysql_fetch_array($result);
		echo '
		<tr>
		<td class="tdd1">USER ID*</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="number" name="emp_id" disabled value="'.$m['emp_id'].'"></td>
	    </tr>
		
		
		<tr>
		<td class="tdd1">NAME*</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="text" name="e_name" value="'.$m['e_name'].'"></td>
	    </tr>
		
		
		<tr>
		<td class="tdd1">DATE OF BIRTH*</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="date" name="dateofbirth" disabled value="'.$m['dateofbirth'].'"></td>
	    </tr>
		
		
		<tr>
		<td class="tdd1">SEX*</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="text" name="sex" disabled value="'.$m['sex'].'"></td>
		</tr>
		
		<tr>
		<td class="tdd1">ADDRESS*</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="text" name="address" value="'.$m['address'].'"></td>
		</tr>
		
		<tr>
		<td class="tdd1">DEPARTMENT*</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="number" name="d_id" disabled value="'.$m['d_id'].'"></td>
		</tr>
		
		<tr>
		<td class="tdd1">NEW PASSWORD</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="password" name="passworde" placeholder="ENTER NEW PASSWORD" ></td>
		</tr>
		
		
	    <tr>
		<td class="tdd1">PASSWORD**</td>
		<td class="tdd1">:</td>
		<td class="tdd12"><input type="password" name="password" placeholder="ENTER OLD PASSWORD" required="required"></td>
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
	<br />
	
	<center><b class="color">You have entered wrong password</b></center>
	</form>
	</div>
</body>
</html>


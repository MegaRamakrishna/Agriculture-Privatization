

<html>
	<head>
		<title>
			CROPDM
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
        <li><a href="my_profileemp.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero1"><center><font size="7px" color="#F2E3E3">FARMER DETAILS</font></center>
	<br/>
	
	<center><form  method="post" action="search_farmer.php"  id="searchform"> 
	      
		  <input  type="number" name="name" placeholder="ENTER FARMER ID"> 
	      <input  type="submit" name="submit" value="Search">
		  
	    </form></center>
	<br/>
	
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
		$result = mysql_query("SELECT * FROM farmer ;" ); 
		
		
	


	
		if( $result){
			
		echo '<tr>
		<th class="tdd">FARMER NAME</th>
		<th class="tdd">FARMER ID</th>
	    <th class="tdd">REGION</th>
		</tr>';
		
		while($m = mysql_fetch_array($result)) {
		echo '<tr>
			<td class="tdd">'.$m['f_name'].'</td>
			<td class="tdd">'.$m['f_id'].'</td>
			<td class="tdd">'.$m['r_id'].'</td>
		</tr>';
		}
		
		}
	
	
		else{
			
			echo '<div style="padding:50px;"><center>NO RECORD FOUND</center></div>';
		
		}
		
		?>
		
		
	</table>
	</center>
	
	
</body>
</html>


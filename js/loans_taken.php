




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
        <li class="active"><a href="farmer_mainpage.php">HOME</a></li>
        <li><a href="my_profilef.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
		<div class="hero1">
		<center><table class="tablee">
		
		
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
		$result = mysql_query("SELECT * FROM financialhelp WHERE f_id='".$_SESSION['USER_ID']."' ;" ); 
		
		
		

		$count = mysql_num_rows($result);


	
		if( $count != 0 ){
			
		echo '<tr>
	    <th class="tdd">ISSUE DATE</th>
	    <th class="tdd">LOAN DUE</th>

		</tr>';
		
		while($m = mysql_fetch_array($result)) {
		echo '<tr>
			<td class="tdd">'.$m['issuedate'].'</td>
			<td class="tdd">'.$m['due'].'</td>
			
		</tr>';
	
		}
		
		}
	
	
		else{
			
			echo '<div style="padding:50px;"><center>NO RECORD FOUND</center></div>';
		
		}
		
		?>
		
		
	</table>
	</center>
	
</div>
	
	
</header>	
</body>
</html>

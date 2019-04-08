
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
        <li ><a href="dep103main_page.php">HOME</a></li>
        <li><a href="my_profileemp103.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero1"><center><font size="7px" color="#F4F6F7">CROP SERVICE DEPARTMENT</font></center>
                       <center><font size="6px" color="#F2E3E3">COMPLETED CAMPS</font></center>	
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

	
		$date1= date("Y-m-d");
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result = mysql_query("SELECT * FROM camps WHERE '$date1 - startdate >= duration';" ); 
		
		
		

		$count = mysql_num_rows($result);


	
		if( $count != 0 ){
			
		echo '<tr>
		<th class="tdd">EMPLOYEE</th>
		<th class="tdd">REGION PINCODE</th>
	    <th class="tdd">START DATE</th>
	    <th class="tdd">DURATION</th>
		</tr>';
		
		while($m = mysql_fetch_array($result)) {
			$start = strtotime($date1);
			$end = strtotime($m['startdate']);

			$days_between = ceil(abs($end - $start) / 86400);
			if($days_between >= $m['duration']){
		echo '<tr>
			<td class="tdd">'.$m['emp_id'].'</td>
			<td class="tdd">'.$m['r_id'].'</td>
			<td class="tdd">'.$m['startdate'].'</td>
			<td class="tdd">'.$m['duration'].'</td>
		</tr>';
		}
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
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
		$empdetails= mysql_fetch_array($result);
		$password = $empdetails['passwordf'];
		if($_POST['submit']=='SAVE'){
			if($password == $_POST['password'] ) {
			
				if($empdetails['address'] != $_POST['address']) 
					$result2 =mysql_query("UPDATE farmer SET address = '".$_POST['address']."' WHERE f_id='".$_SESSION['USER_ID']."' ;" ); 
				if($_POST['f_name'] != $empdetails['f_name'])
					$result2 =mysql_query("UPDATE farmer SET f_name = '".$_POST['f_name']."' WHERE f_id= '".$_SESSION['USER_ID']."' ;" ); 
				if($_POST['passwordf'] != '' )
					$result2 =mysql_query("UPDATE farmer SET passwordf = '".$_POST['passwordf']."' WHERE f_id='".$_SESSION['USER_ID']."' ;" ); 
			
				include('my_profilef.php');
			
			}
			else{
			
				include('my_profilef1.php');
				
			}
			
		
		}


?>
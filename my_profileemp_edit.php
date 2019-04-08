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

		$resut=mysql_query("SELECT d_id FROM employee WHERE emp_id='".$_SESSION['USER_ID']."' ;" );
		$resut=mysql_fetch_array($resut);
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result = mysql_query("SELECT * FROM employee WHERE emp_id='".$_SESSION['USER_ID']."' ;" ); 
		$empdetails= mysql_fetch_array($result);
		$password = $empdetails['passworde'];
		if($_POST['submit']=='SAVE'){
			if($password == $_POST['password'] ) {
			
				if($empdetails['address'] != $_POST['address']) 
					$result2 =mysql_query("UPDATE employee SET address = '".$_POST['address']."' WHERE emp_id='".$_SESSION['USER_ID']."' ;" ); 
				if($_POST['e_name'] != $empdetails['e_name'])
					$result2 =mysql_query("UPDATE employee SET e_name = '".$_POST['e_name']."' WHERE emp_id='".$_SESSION['USER_ID']."' ;" ); 
				if($_POST['passworde'] != '' )
					$result2 =mysql_query("UPDATE employee SET passworde = '".$_POST['passworde']."' WHERE emp_id='".$_SESSION['USER_ID']."' ;" ); 
			
				
				if($resut[0]==101)
					include('my_profileemp.php');
				if($resut[0]==102)
					include('my_profileemp102.php');
				if($resut[0]==103)
					include('my_profileemp103.php');
			
			}
			else{
			
				if($resut[0]==101)
					include('my_profileemp.php');
				if($resut[0]==102)
					include('my_profileemp102.php');
				if($resut[0]==103)
					include('my_profileemp103.php');
			
				
			}
			
		
		}


?>
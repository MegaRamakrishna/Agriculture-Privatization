



<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
		//Start the session to see if the user is authenticated user. 
		if(!isset($_SESSION['USER_ID']))	session_start();
		//Check if the user is authenticated first. Or else redirect to login page 
		//Check if the user is authenticated first. Or else redirect to login page 
		if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 

		} 
		else{ 
			include('location:login_form.php'); 
		exit(); 
		} 
if ($_POST['submit']=='SUBMIT'){

		$f_id = $_SESSION['USER_ID'];
		$date = date("Y-m-d");
		$link = mysql_connect("localhost", "root", ''); 
	
		$db = mysql_select_db('project'); 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result=mysql_query("INSERT INTO financialhelps(f_id,issuedate) VALUES(".$f_id.",'".$date."');");
		
	
		include('loans_taken1.php');
		

	}
	
?>
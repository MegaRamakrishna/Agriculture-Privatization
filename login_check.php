

<?php 
$rrr =$_POST['submit'];
error_reporting(E_ALL ^ E_DEPRECATED);

if ( $rrr== 'LOG IN'){ 

//Collect POST values 
	$login = $_POST['useridf']; 
	$password = $_POST['passwordf']; 
	
	if($login && $password){ 
	
		//Connect to mysql server 
		$link = mysql_connect("localhost", "root", ''); 
		
		//Check link to the mysql server 
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		
		//Select database 
		$db = mysql_select_db('project'); 
		if(!$db) { 
			die("Unable to select database"); 
		} 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result=mysql_query("SELECT * FROM farmer WHERE f_id ='".$login."' AND passwordf ='".$password."';" ); 
		$farmerdetails=mysql_fetch_array($result);
		//Check whether the query was successful or not 
		if($result){ 
			$count = mysql_num_rows($result);
		
		} 
		
		else{ 
			//Login failed 
				echo '<center>Incorrect Username or Password !!!<center>'; 
			include('login_form.php'); 
		
			exit(); 
		} 
	
		//if query was successful it should fetch 1 matching record from the table. 
		if( $count == 1){ 
		//Login successful set session variables and redirect to main page. 
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $login; 
	
			include('farmer_mainpage.php');exit(); 
		} 
		else{ 
			//Login failed 
	
			include('login_form.php'); 
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		} 
	} 
	else{ 
		 include('login_form.php');
		echo '<center>Username or Password missing!!</center>'; 
		 
	} 
	
}


if ($rrr == 'SIGN UP'){ 
//new page
	
	include('sign_up.php'); 
    exit();
}


if ($rrr == 'LOGIN'){ 

	
	//Collect POST values 
	$login1 = $_POST['useride']; 
	$password1 = $_POST['passworde']; 
	if($login1 && $password1){ 
	
	//Connect to mysql server 
		$link = mysql_connect('localhost', 'root', ''); 
		
		//Check link to the mysql server 
		if(!$link) { 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		
		//Select database 
		$db = mysql_select_db('project'); 
		if(!$db) { 
			die("Unable to select database"); 
		} 
		
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result=mysql_query("SELECT * FROM employee WHERE emp_id = '".$login1."' AND passworde ='".$password1."';" ); 
		 
		
		//Check whether the query was successful or not 
		if($result){ 
			$count = mysql_num_rows($result);
		} 
		else{ 
			//Login failed 
			include('login_form.php'); 
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		} 
		
		//if query was successful it should fetch 1 matching record from the table. 
		if( $count == 1){ 
			//Login successful set session variables and redirect to main page. 
			session_start(); 
			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_ID'] = $login1; 
		 
			
			$depqry = mysql_query("SELECT d_id FROM employee WHERE emp_id ='".$login1."';");
			
			if($depqry){
			if(mysql_result($depqry,0) == 102 )		header('location:dep102main_page.php'); 
			if(mysql_result($depqry,0) == 101 )		header('location:dep101main_page.php');
			if(mysql_result($depqry,0) == 103 )		header('location:dep103main_page.php');
			
			}
			else{
				
				echo "<h2><center>Invalid</center></h2> ";
			}
		
		
		
		} 
		
		else{ 
			//Login failed 
			include('login_form.php'); 
			echo '<center>Incorrect or invalid Username or Password !!!<center>'; 
			exit(); 
		} 
	} 
	
	else{ 
		include('login_form.php'); 
		echo '<center>Username or Password missing!!</center>'; 
		exit(); 
	} 

}

else{ 
header("location: login_form.php"); 
exit(); 
} 
?>

<html><?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
 
     <h1>Member Area</h1>
     <pThanks for logging in! You are <code><?=$_SESSION['Username']?></code></p>
}  
     <?php

if (!empty($_POST['useridf']) && !empty($_POST['passwordf']))
{
	
	$login = $_POST['useridf']; 
	$password = $_POST['passwordf']; 
	
	echo "vaues ".$login."agnknsan".$password;
	if($login && $password){ 
	
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
		$result=mysql_query("SELECT * FROM farmer WHERE f_id ='$login' AND passwordf ='$password'" ); 
		
		//Check whether the query was successful or not 
		if($result){ 
			$count = mysql_num_rows($result);
		
		} 

		else{ 
			//Login failed 
			include('main_page.php'); 
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		} 
	
	
    $username = mysql_real_escape_string($_POST['useridf']);
    $password = md5(mysql_real_escape_string($_POST['passwordf']));
     
    $checklogin = mysql_query("SELECT * FROM farmer WHERE f_id = '".$username."' AND passwordf = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
         
        $_SESSION['Username'] = $username;
        $_SESSION['LoggedIn'] = 1;
         
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}

?>
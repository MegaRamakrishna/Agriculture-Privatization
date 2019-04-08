



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

		$c_name = $_POST['c_name'];
		$f_id = $_SESSION['USER_ID'];
		$f_proposal = $_POST['f_proposal'];
		
		$link = mysql_connect("localhost", "root", ''); 
	
		$db = mysql_select_db('project'); 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
	
		
		if($result=mysql_query("INSERT INTO cropdecisionmaking(f_id,c_name,f_proposal) VALUES('".$f_id."','".$c_name."',".$f_proposal.");")){

		
		include('propose_price1.php');
		}
		else {
			
			include('propose_price2.php');
		}
	
		
	}
	
?>
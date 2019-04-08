



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

		$f_id = $_POST['f_id'];
		$emp_id = $_SESSION['USER_ID'];
		$c_name = $_POST['c_name'];
		$f_proposal = $_POST['f_proposal'];
		$finalprice = $_POST['finalprice'];
		
		$link = mysql_connect("localhost", "root", ''); 
	
		$db = mysql_select_db('project'); 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result = mysql_query("UPDATE cropdecisionmaking SET finalprice = ".$finalprice." WHERE c_name = '".$c_name."' AND f_id =".$f_id." AND f_proposal= ".$f_proposal." ;" );
		$result = mysql_query("UPDATE cropdecisionmaking SET emp_id=".$emp_id." WHERE c_name = '".$c_name."' AND f_id =".$f_id." AND f_proposal= ".$f_proposal." AND finalprice = ".$finalprice.";" ); 
		
	
		include('pendingcrop_price.php');
		
		echo "<div class='color'>";
		echo "<br/><br/>";
		echo "<b><center>WE HAVE RECORDED THE RESPONSE FROM YOU..</center>";
		echo "<CENTER>PROCEED FURTHER!!</CENTER></b>";
        echo "</div>";
	}
	
?>
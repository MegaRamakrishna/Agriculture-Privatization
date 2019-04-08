



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
		$issuedate = date("Y-m-d");
		$status = $_POST['status'];
		$emp_id = $_SESSION['USER_ID'];
		$link = mysql_connect("localhost", "root", ''); 
		$date1=$_POST['issuedate']
		$db = mysql_select_db('project'); 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
	 mysql_query("UPDATE financialhelp SET status = '".$status."' WHERE f_id = '".$f_id."' AND issuedate='".$date1."';" );
		
		mysql_query("UPDATE financialhelp SET emp_id=".$emp_id." WHERE f_id = '".$f_id."' AND issuedate='".$date1."' AND status= '".$status."';" ); 
		
	 mysql_query("UPDATE financialhelp SET issuedate = '".$issuedate."' WHERE f_id = '".$f_id."' AND status= '".$status."' AND emp_id=".$emp_id.";" );
		
		if($status == 'APPROVE')
		$result = mysql_query("UPDATE financialhelp SET due='YES' WHERE f_id = '".$f_id."' ;" ); 
	
		if($status == 'REJECT')	
			$result = mysql_query("UPDATE financialhelp SET due='NO' WHERE f_id = '".$f_id."';" ); 
	
		include('pending_loan.php');
		
		echo "<div class='color'>";
		echo "<br/><br/>";
		echo "<b><center>WE HAVE RECORDED THE RESPONSE FROM YOU..</center>";
		echo "<CENTER>PROCEED FURTHER!!</CENTER></b>";
        echo "</div>";
	}
	
?>
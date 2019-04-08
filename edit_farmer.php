
<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if($_POST['signup'] == 'SIGN UP'){




		$link = mysql_connect("localhost", "root", ''); 
	
		$db = mysql_select_db('project'); 

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		$f_name = $_POST['f_name']; 
		$address = $_POST['address']; 
		$sex = $_POST['sex']; 
		$f_id = $_POST['f_id']; 
		$passwordf = $_POST['passwordf']; 
		$r_id = $_POST['r_id']; 
		$dateofbirth = $_POST['dateofbirth'];


		
		//Execute query 
		$result=mysql_query("INSERT INTO farmer VALUES(".$f_id.",'".$f_name."','".$address."','".$sex."','".$dateofbirth."',".$r_id.",'".$passwordf."');" ); 
		
		if($result){
			
			echo "<h2><center>CONGRATULATIONS!YOU HAVE CREATED YOUR ACCOUNT SUCCESSFULLY</center></h2>";
			echo "<h3><center>Please login with your details</center></h3>";
			
		}
		else{
			
			echo "<h2><center>You cannot create account on this ".$f_id." please choose another</center></h2>";
			
		}
		
		include('login_form.php');
	
		

}
 ?>
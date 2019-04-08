<html>
	<head>
		<title>
			FINANCIALHD
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
        <li><a href="dep102main_page.php">HOME</a></li>
        <li><a href="my_profileemp102.php">MY PROFILE</a></li>
        <li><a href="log_out.php">LOG OUT</a></li>
        
        </ul>

        </div>
	<div class="hero1"><center><font size="7px" color="#F2E3E3">FINANCIAL HELP DEPARTMENT</font></center><br />
	                   <center><font size="6px" color="#F2E3E3">PENDING LOANS</font></center>
	<br/><br />
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

	
	
		//Create query (if you have a Logins table the you can select login id and password from there)
		
		
		//Execute query 
		$result = mysql_query("SELECT f_id,issuedate FROM financialhelp WHERE status IS NULL ;" ); 
		
		
		

		$count = mysql_num_rows($result);


	
		if( $count != 0 ){
			
		echo '<tr>
		<th class="tdd" >FARMER ID</th>
	    
	    <th class="tdd">STATUS</th><th></th>
		</tr>';
		
		while($m = mysql_fetch_array($result)) {
		echo '<form method="post" name="pendingloan" action="pending_loanaction.php">';
		echo '<tr>
			<td class="tdd">'.$m['f_id'].'</td>
			
			<input type="hidden" name="f_id" value=	"' . htmlspecialchars($m[0]) . '">
			<input type="hidden" name="issuedate" value= "' . htmlspecialchars($m[1]) . '">
			<input type="hidden" name="status" value= "'.htmlspecialchars($_SESSION['USER_ID']).'">
			
			<td class="tdd">
			
			
			<select name="status">

				<option value="APPROVE">APPROVE</option>
				<option value="REJECT">REJECT</option>
			</select>
			
			</td>
			<td class="btn"><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>';
		echo "</form>";
		}
		
		}
	
	
		else{
			
			echo '<div style="padding:50px;"><b><center>NO RECORD FOUND</center></b></div>';
		
		}
		
		?>
		
		
	</table>
	
	
	
</body>
</html>
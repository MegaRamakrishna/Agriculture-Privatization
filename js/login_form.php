
<html>
	<head>
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			AGRICULTURAL PRIVATIZATION
		</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<style type="text/css">
			body{     font-family: georgia,Arial,Verdana,sans-serif;}
           
		   .fs1{ width:20%;
		         margin-left:25%;
				 margin-top:120px;
			     display:inline-block;
			    }
				
			.fs2{width:20%;
			     margin-right:20%;
				 margin-top:120px;
				 display:inline-block;
				 margin-left:100px
				 }
				 
			.space{margin-left:20%;}
		</style>
	</head>

	<body>
		<img src="image1.png" width=100%  height=100 alt="Lion Image"/>
		
		
		<form name="myloginForm" method="POST" action="login_check.php">
		<fieldset class="fs1">
		<div><center><font size=5>FARMER LOGIN</font></center>
		</div>
		<br />
		<table>
		<tr><td> <label for="useridf">USER_ID*</label></td>
            <td> <input type="text" name="useridf"></td></tr>
		<tr><td> <label for="passwordf">PASSWORD*</label></td>
            <td> <input type="password" name="passwordf"></td></tr>
		</table>
		<br />
		<center>
		<button type="submit" class="btn btn-primary" name="submit" value="LOG IN">LOG IN</button>
        <button type="submit" class="btn btn-primary" name="submit" value="SIGN UP">SIGN UP</button>
		</center>
		</fieldset>
        
		
		<fieldset class="fs2">
	
		<div><center><font size=5>EMPLOYEE LOGIN</font></center>
		</div>
		<br />
		<table>
		
		<tr><td> <label for="useride">USER_ID*</label></td>
            <td> <input type="text" name="useride"></td></tr>
		<tr><td> <label for="passworde">PASSWORD*</label></td>
            <td> <input type="password" name="passworde"></td></tr>
		</table>
		<br />
		<center>
		<button type="submit" class="btn btn-primary" name="submit" value="LOGIN">LOGIN</button>
        
        </center>	
		</fieldset></form>
		
	</body>

</html>

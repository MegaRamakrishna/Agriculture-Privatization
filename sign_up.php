

<html>
<head>
<title>
SIGNUP
</title>
<link href="style.css" rel="stylesheet" type="text/css">

</style>
</head>
<body background="pic3.jpg">
		<br/>
		<div><center><font size=5 color="#F3E2E2">SIGN UP</font></center>
		</div>
		<br /><center>
		<table class="tablee">
		<form action="edit_farmer.php" method="post"> 
		<tr><td class="tdd"> <label for="Name">NAME*</label> </td>
            <td class="tdd"> <input type="text" name="f_name" placeholder="ENTER YOUR FULL NAME" required="required"></td></tr>
		<tr><td class="tdd"> <label for="userid">USER_ID*</label></td>
            <td class="tdd"> <input type="text" name="f_id" required="required" placeholder="ENTER VALID NUM"></td></tr>
		<tr><td class="tdd"> <label for="password">PASSWORD*</label></td>
            <td class="tdd"> <input type="password" name="passwordf" placeholder="ENTER PASSWORD" required="required"></td></tr>
		<tr><td class="tdd"> <label for="sex">SEX*</label> </td>
                 <td class="tdd"> <select name="sex" required="required"> 
                 <option value="M">Male</option> 
                 <option value="F">Female</option>  
                 <option value="O">Other</option>  </select> 
				 </td></tr>
		<tr><td class="tdd"> <label for="Date of birth">DATEOFBIRTH*</label></td>
            <td class="tdd"> <input type="date" name="dateofbirth" placeholder="MM/DD/YYYY" required="required"></td></tr>
		<tr><td class="tdd"> <label for="address">ADDRESS*</label></td>
             <td class="tdd"><textarea rows="4" cols="22" name="address" required="required" placeholder="Enter Your address here..."></textarea></td></tr>
		<tr><td class="tdd"> <label for="integer">PINCODE*</label></td>
            <td class="tdd"> <input type="integer" name="r_id" required="required"></td></tr>	 
        </table></center><br/>
		<center>
        <input class="btn btn-one" type="submit" name="signup" value="SIGN UP">
        </center>			 
	
		</body>
		</html>
		
<!DOCTYPE HTML>
<html>
<head> 
<title>Registration Form</title>
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script type="text/javascript">
	function val(){
		if(form.sPassword.value == ""){
			alert("Enter the password");
			return false;
		}
		if((form.sPassword.value).length <6){
			alert("Password should be minimum 6 character");
			return false;
		}
		if(form.srPassword.value == ""){
			alert("Enter the configuration password.");
			return false;
		}
		if(form.srPassword.value != form.sPassword.value){
			alert("Password didnot matched.");
			return false;
		}
		else{
		alert("Password match");
		header("refresh:5; url="<?php echo base_url();?>Owner/staffRegister");
		return false;
		}
	return true;
	}
</script>
<body>
		<div class="up">
		<div class="logo">
			<img src="http://localhost/CI/assets/Images/login.jpg" width="30%" height="20%"/>
		</div>
		<div class="heading">
			<font color="pink">
				<h1><b>Hardware Sales and Purchases System<b/></h1>
			</font>
		</div>
	
		<div class="navigation">
			<a href="<?php echo base_url();?>owner/homepage">HOME </a></li>
			<a href="index.html"> PIPE & FITTINGS</a>
			<a href="<?php echo base_url();?>owner/gallery"> GALLERY </a>
			<a href="services.php"> SERVICES </a>	
		</div>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<hr/>
	<font color="white" size="5px">
	<form action="<?php echo base_url();?>Staff/saveData" method="POST">
	<div class="registrationForm">
	<font size="6px">Register Form for Owner/Staff</font>
	<table>
		<tr>
			<td>First Name: </td>
			<td> <input type="text" name="sName" required="required"> </td> 
		</tr>	
		<tr>
			<td>Last Name: </td>
			<td> <input type="text" name="sLName" required="required"> </td> 
		</tr>
		<tr>
			<td> Staff Type ID: </td>
			<td> <input type="text" name="sType" value="2" required="required"> </td>
		</tr>
		<tr>
			<td> Adress: </td>
			<td> <input type="text" name="sAddress" required="required"> </td>
		</tr>	
		<tr>
			<td> Gender: </td> 
			<td> 
				<input type="radio" name="sGender" value="Male" required="required"/> Male
				<input type="radio" name="sGender" value="Female" required="required"/> Female<br/>
				<input type="radio" name="sGender" value="Others" required="required"/>Others<br/>
			</td>
		</tr>
		<tr>
			<td> Contact No.: </td>
			<td> <input type="text" name="sContact" required="required"> </td>
		</tr>
		<tr>
			<td> Email: </td>
			<td> <input type="email" name="sEmail" required="required" placeholder="abc@gmail.com"> </td>
		</tr>	
		<tr>
			<td> Username: </td>
			<td> <input type="text" name="sUsername" required="required"> </td>
		</tr>
		<tr>
			<td> Password: </td>
			<td> <input type="password" name="sPassword" required="required"> </td>
		</tr>
		<tr>
			<td> Re-enter Password: </td>
			<td> <input type="password" name="srPassword" required="required"> </td>
			</tr>
		<tr align="center">
			<td > <input type="submit" name="submit" onClick="return val();" value="Register"> </td>
		</tr>
	</table>
	</div>
	</form>
	<?php
		if(isset($msg)) echo $msg;
	?>
	</font>
</body>
</html>

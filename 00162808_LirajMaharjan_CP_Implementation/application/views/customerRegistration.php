<!DOCTYPE HTML>
<html>
<head> 
<title>Registration Form</title>
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<script type="text/javascript">
	function valid(){
		if(form.cPassword.value == ""){
			alert("Enter the password");
			return false;
		}
		if((form.cPassword.value).length <6){
			alert("Password should be minimum 6 character");
			return false;
		}
		if(form.crPassword.value == ""){
			alert("Enter the configuration password.");
			return false;
		}
		if(form.crPassword.value != form.cPassword.value){
			alert("Password didnot matched.");
			return false;
		}
		else{
		alert("Password match");
		header("refresh:5; url=<?php echo base_url();?>Owner/customerRegistration");
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
				<h1><b>Hardware Sales and Purchases Shop<b/></h1>
			</font>
		</div>
	
		<div id="menu">
			<ul>
				<li><a href="index.html"> HOME </a></li>
				<li><a href="index.html"> PIPE & FITTINGS</a></li>
				<li><a href="gallery.html"> GALLERY </a></li>
				<li><a href="services.php"> SERVICES </a></li>
			<ul>
		</div>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<hr/>
	<font color="white" size="5px">
	<div class="registrationForm">
	<form action="<?php echo base_url();?>Customer/saveCusData" method="POST">
	<font size="6px">Register Form for Customer</font>
	<table>
		<tr>
			<td>First Name: </td>
			<td> <input type="text" name="cName" required="required"> </td> 
		</tr>	
		<tr>
			<td>Last Name: </td>
			<td> <input type="text" name="cLName" required="required"> </td> 
		</tr>
		<tr>
			<td> Adress: </td>
			<td> <input type="text" name="cAddress" required="required"> </td>
		</tr>	
		<tr>
			<td> Gender: </td> 
			<td> 
				<input type="radio" name="cGender" value="Male" required="required"/> Male
				<input type="radio" name="cGender" value="Female" required="required"/> Female<br/>
				<input type="radio" name="cGender" value="Others" required="required"/>Others<br/>
			</td>
		</tr>
		<tr>
			<td> Contact No.: </td>
			<td> <input type="text" name="cContact" required="required"> </td>
		</tr>
		<tr>
			<td> Email: </td>
			<td> <input type="email" name="cEmail" required="required" placeholder="abc@gmail.com"> </td>
		</tr>	
		<tr>
			<td> Username: </td>
			<td> <input type="text" name="cUsername" required="required"> </td>
		</tr>
		<tr>
			<td> Password: </td>
			<td> <input type="password" name="cPassword" required="required"> </td>
		</tr>
		<tr>
			<td> Re-enter Password: </td>
			<td> <input type="password" name="crPassword" required="required"> </td>
			</tr>
		<tr align="center">
			<td > <input type="submit" name="submit" onClick="return valid();" value="Register"> </td>
		</tr>
		
	</table>
	</div>
		<?php
			if(isset($msg)) echo $msg;
		?>
	</font>
	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title> Customer Login</title>
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
</head>
<body>
	<div class="up">
		<div class="logo">
			<img src="http://localhost/CI/assets/Images/logo.png" width="60%" height="30%"/>
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
			<li><a href="<?php echo base_url();?>owner/gallery"> GALLERY </a></li>	
			<li><a href="services.php"> SERVICES </a>	</li>
		</div>
	</div>
	<hr>
	<div id="cuslogin">
		<form action="<?php echo base_url();?>Customer/cusLogin" method="POST">
			<font size="5px" color="white">
				<font size="6px"><b>Login Form </b></font><br/>
				<table border="2px split white">
				<tr>
					<td><label>Username:</label></td>
					<td><input type="text" name="cusUsername" required="required" /></td>
				</tr>
				<tr>
					<td><label>Password:</label></td>
					<td><input type="password" name="cusPassword" required="required" /></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="submit" onClick="return val();" value="Login" /></td>
					<td><font size="5px" color="white" align="left">
					If you are new then, first get registered. <br>
					<a href="<?php echo base_url();?>owner/registrationPage	"> Here </a></td>
				</tr>
				</table>
			</font>
		</form>
	</div>
</body>
<!DOCTYPE html>
<html>
<head>
<title> Customer Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
<style>
ul {
    list-style-type: none;
    margin-top: 0;
    padding: 0;
    overflow: hidden;
	width:60%;
}

li {
    float: left;
	height:35px;
	line-height:10px;
	color:white;
	margin:3px;
	margin-top:6%;
}

li a, .dropbtn {
    display: inline-block;
    color: #2c3e50;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #7f8c8d;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<div id="up">
	<div class="logo">
		<img src="http://localhost/CI/assets/Images/logo.png" width="60%" height="30%"/>
	</div>
	<div class="heading">
		<font color="#2c3e50">
			<h1><b>Hardware Sales and Purchases Shop<b/></h1>
		</font>
	</div>
	<div id="menu">
		<ul>
			<li><a href="<?php echo base_url();?>owner/homepage"> Home </a></li>
			<li><a href="<?php echo base_url();?>owner/pipefitting"> Pipe & Fittings</a></li>
			<li><a href="<?php echo base_url();?>owner/gallery"> Gallery </a></li>	
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Online Services</a>
			<div class="dropdown-content">
			  <a href="<?php echo base_url();?>owner/ownerLogin">Owner/Staff Login</a>
			  <a href="<?php echo base_url();?>owner/cusLogin">Customer Login</a>
			  <a href="<?php echo base_url();?>owner/cusRegistration">Customer Registration</a>
			</div>
		  </li>
		</ul>
	</div>
</div>
<div id="Form">
<form action="<?php echo base_url();?>Customer/saveCusData" method="POST">
	<font size="5px" color="white">
		<font size="6px"><b> Customer Registration </b></font>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" placeholder="Enter First Name" name="cName">
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" placeholder="Enter First Name" name="cLName">
		</div>
		<div class="form-group">
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" placeholder="Enter Address" name="cAddress">
		</div>
		<div class="form-group">
		<label for="Gender">Gender:</label>
		<input type="radio"  id="Gender" name="cGender" value="Male" required="required"/> Male
		<input type="radio" id="Gender" name="cGender" value="Female" required="required"/> Female
		<input type="radio" id="Gender" name="cGender" value="Others" required="required"/> Others
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" placeholder="Enter Contact Number" name="cContact">
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="cEmail">
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" placeholder="Enter Username" name="cUsername">
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" placeholder="Enter Password" name="cPassword">
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" placeholder="Enter password" name="crPassword">
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Register</button><br/>
		<?php
			if(isset($msg)) echo $msg;
		?>
	</font>
	</form>
</div>
</body>
</html>

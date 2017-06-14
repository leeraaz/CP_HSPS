<!DOCTYPE html>
<html>
<head>
	<title> Customer Login</title>
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
	border:2px solid white;
	height:35px;
	line-height:10px;
	background:black;
	color:white;
	margin:3px;
	margin-top:8%;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
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
			<li><a href="<?php echo base_url();?>owner/homepage"> HOME </a></li>
			<li><a href="<?php echo base_url();?>owner/pipefitting"> PIPE & FITTINGS</a></li>
			<li><a href="<?php echo base_url();?>owner/gallery"> GALLERY </a></li>	
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Online Services</a>
			<div class="dropdown-content">
			  <a href="<?php echo base_url();?>owner/cusLogin">Customer Login</a>
			  <a href="<?php echo base_url();?>owner/cusRegistration">Customer Registration</a>
			</div>
		  </li>
		</ul>
	</div>
</div>
	<hr>
	<div id="cuslogin">
		<form action="<?php echo base_url();?>Customer/cusLogin" method="POST">
			<font size="5px" color="white">
				<font size="6px"><b>Login Form </b></font><br/>
				<div class="form-group">
				<label for="username">Username:</label><br/>
				<input type="username" class="form-control" id="username" placeholder="Enter username" name="cusUsername"><br/>
				</div>
				<div class="form-group">
				<label for="pwd">Password:</label><br/>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="cusPassword"><br/>
				</div>
				<div class="checkbox">
				<label><input type="checkbox" name="remember"> Remember me</label><br/>
				</div>
				<button type="submit" class="btn btn-default">Submit</button><br/>
				If you are new then, first get registered.
				<a href="<?php echo base_url();?>owner/registrationPage	"> Here </a>
				
			</font>
		</form>
	</div>
</body>
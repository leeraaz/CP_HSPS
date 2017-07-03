<!DOCTYPE html>
<html>
<head>
<title> Customer Login</title>
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
.val_error{
	color:#E1F5FE;
}
</style>
</head>
<body>
<div id="up">
	<div id="logo">
		<img src="http://localhost/CI/assets/Images/logo.png" width="60%" height="30%"/>
	</div>
	<div id="heading">
		<font color="#2c3e50">
			<h1><b>Hardware Sales and Purchases Shop<b/></h1>
		</font>
	</div>
	<div id="menu">
		<ul>
			<li><a href="<?php echo base_url();?>owner/homepage"> Home </a></li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Pipe and Fittings</a>
			<div class="dropdown-content">
			  <a href="<?php echo base_url();?>PipeAndFittings/PPR">PPR Pipe and fittings</a>
			  <a href="<?php echo base_url();?>PipeAndFittings/CPVC">CPVC Pipe and Fittings</a>
			</div>
			</li>
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
<hr/>
<div id="Form">
		<form action="<?php echo base_url();?>Staff/stfLogin" method="POST" onsubmit="return loginValid()" name="loginFrom" >
			<font size="5px" color="white">
				<font size="6px"><h2 align="center"> Owner & Staff Login </h2></font>
				<div class="form-group">
				<label for="username">Username:</label>
				<input type="username" class="form-control" id="username" placeholder="Enter username" name="suser">
				<div id="username_error" class="val_error"></div>
				</div>
				<div class="form-group">
				<label for="pwd">Password:</label><br/>
				<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="spwd">
				<div id="password_error" class="val_error"></div>
				</div>
				<div class="checkbox">
				<label><input type="checkbox" name="remember"> Remember me</label><br/>
				</div>
				<input type="reset" style="margin-left:33%;width:15%;" class="btn btn-danger" />
				<button type="submit" class="btn btn-primary">Login</button></br>
				<?php
					echo  $this->session->flashdata("error");
				?>
			</font>
		</form>
</div>
</body>
</html>

<script type="text/javascript">
	//getting input value
	var suser = document.forms["loginFrom"]["suser"];
	var pwd = document.forms["loginFrom"]["pwd"];
	
	//getting all error display objects
	var username_error = document.getElementById("username_error");
	var password_error = document.getElementById("password_error");
	
	//setting all event listeners
	suser.addEventListener("blur",usernameVerify,true);
	pwd.addEventListener("blur",passwordVerify,true);
	
	function loginValid(){
		if(suser.value == ""){
			suser.style.border = "1px solid red";
			username_error.textContent = "Username is required";
			suser.focus();
			return false;
		}
		   
		if(pwd.value == ""){
			pwd.style.border = "1px solid red";
			password_error.textContent = "Password is required";
			pwd.focus();
			return false;
		}
	}
	
	function usernameVerify(){
		if(suser.value !=""){
			suser.style.border = "1px solid #5E6E66";
			username_error.innerHTML = "";
			return true;
		}
	}	
	function passwordVerify(){
		if(pwd.value !=""){
			pwd.style.border = "1px solid #5E6E66";
			password_error.innerHTML = "";
			return true;
		}
	}	
</script>
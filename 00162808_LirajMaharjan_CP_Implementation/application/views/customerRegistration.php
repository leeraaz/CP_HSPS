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
.val_error{
	color:#FF1F1F;
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
<hr/>
<div id="Form">
<form action="<?php echo base_url();?>Customer/saveCusData" method="POST" onsubmit="return validate()" name="form">
	<font size="5px" color="white">
		<center><font size="6px"><b> Customer Registration </b></font></center>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" placeholder="Enter First Name" name="cName">
		<div id="cname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" placeholder="Enter First Name" name="cLName">
		<div id="lname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" placeholder="Enter Address" name="cAddress">
		<div id="address_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Gender">Gender:</label>
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Male" required="required"/> Male
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Female" required="required"/> Female
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Others" required="required"/> Others
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" placeholder="Enter Contact Number" name="cContact">
		<div id="contact_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="cEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" placeholder="Enter Username" name="cUsername">
		<div id="username_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" placeholder="Enter Password" name="cPassword">
		<div id="password_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" placeholder="Enter configuration password" name="crPassword">
		<div id="comPassword_error" class="val_error"></div>
		</div>
		<input type="reset" style="margin-left:35%; width:15%;" class="btn btn-info">
		<button type="submit" class="btn btn-primary">Register</button>
		<?php
			if(isset($msg)) echo $msg;
		?>
	</font>
	</form>
</div>
</body>
</html>
<script type="text/javascript">
	//getting all input text objects
	var cName = document.forms["form"]["cName"];
	var cLName = document.forms["form"]["cLName"];
	var address = document.forms["form"]["cAddress"];
	//var gender = document.forms["form"]["cGender"];
	var contact = document.forms["form"]["cContact"];
	var email = document.forms["form"]["cEmail"];
	var username = document.forms["form"]["cUsername"];
	var password = document.forms["form"]["cPassword"];
	var comPassword = document.forms["form"]["crPassword"];
	
	//getting all error display objects
	var cname_error = document.getElementById("cname_error");
	var lname_error = document.getElementById("lname_error");
	var address_error = document.getElementById("address_error");
	//var gender_error = document.getElementById("gender_error");
	var contact_error = document.getElementById("contact_error");
	var email_error = document.getElementById("email_error");
	var username_error = document.getElementById("username_error");
	var password_error = document.getElementById("password_error");
	var comPassword_error = document.getElementById("comPassword_error");
	
	//setting all event listeners
	cName.addEventListener("blur",cNameVerify,true);
	cLName.addEventListener("blur",cLNameVerify,true);
	cAddress.addEventListener("blur",cAddressVerify,true);
	//cGender.addEventListener("blur",cGenderVerify,true);
	cContact.addEventListener("blur",cContactVerify,true);
	cEmail.addEventListener("blur",cEmailVerify,true);
	username.addEventListener("blur",nameVerify,true);
	password.addEventListener("blur",passwordVerify,true);
	comPassword.addEventListener("blur",comPasswordVerify,true);
	
	//validation function
	function validate(){
		if(cName.value == ""){
			cName.style.border = "1px solid red";
			cname_error.textContent = "Customer name is required";
			cName.focus();
			return false;
		}
		   
		if(cLName.value == ""){
			cLName.style.border = "1px solid red";
			lname_error.textContent = "Customer last name is required";
			cLName.focus();
			return false;
		}
		
		if(address.value == ""){
			address.style.border = "1px solid red";
			address_error.textContent = "Address is required";
			address.focus();
			return false;
		}
		
		if(gender.value == ""){
			gender.style.border = "1px solid red";
			gender_error.textContent = "Gender is required";
			gender.focus();
			return false;
		}
		   
		if(contact.value == ""){
			contact.style.border = "1px solid red";
			contact_error.textContent = "Contact is required";
			contact.focus();
			return false;
		}
		   
		if(email.value == ""){
			email.style.border = "1px solid red";
			email_error.textContent = "Email is required";
			email.focus();
			return false;
		}
		   
		if(username.value == ""){
			username.style.border = "1px solid red";
			username_error.textContent = "Username is required";
			username.focus();
			return false;
		}
		
		if(password.value == ""){
			password.style.border = "1px solid red";
			password_error.textContent = "Password is required";
			password.focus();
			return false;
		}
		
		if(comPassword.value == ""){
			comPassword.style.border = "1px solid red";
			comPassword_error.textContent = "Configuration password is required";
			comPassword.focus();
			return false;
		}
		
		//checking if the password and Re-password match or not
		if(password.value != comPassword.value ){
			password.style.border = "1 px red";
			comPassword.style.border = "1 px red";
			comPassword_error.innerHTML = "The password didnot match";
			return false;
		}
	}

	function cNameVerify(){
		if(cName.value !=""){
			cName.style.border = "1px solid #5E6E66";
			cname_error.innerHTML = "";
			return true;
		}
	}	
	function cLNameVerify(){
		if(cLName.value !=""){
			cLName.style.border = "1px solid #5E6E66";
			lname_error.innerHTML = "";
			return true;
		}
	}	
	function cAddressVerify(){
		if(cAddress.value !=""){
			cAddress.style.border = "1px solid #5E6E66";
			address_error.innerHTML = "";
			return true;
		}
	}
	function cGenderVerify(){
		if(cGender.value !=""){
			cGender.style.border = "1px solid #5E6E66";
			gender_error.innerHTML = "";
			return true;
		}
	}	
	function emailVerify(){
		if(cEmail.value !=""){
			cEmail.style.border = "1px solid #5E6E66";
			email_error.innerHTML = "";
			return true;
		}
	}
	function nameVerify(){
		if(username.value !=""){
			username.style.border = "1px solid #5E6E66";
			username_error.innerHTML = "";
			return true;
		}
	}
	function passwordVerify(){
		if(password.value !=""){
			password.style.border = "1px solid #5E6E66";
			password_error.innerHTML = "";
			return true;
		}
	}
	function comPasswordVerify(){
		if(comPassword.value !=""){
			comPassword.style.border = "1px solid #5E6E66";
			comPassword_error.innerHTML = "";
			return true;
		}
	}
</script>


<!DOCTYPE html>
<html>
<head>
<title> Update Staff </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
<style>
.val_error{
	color:#FF1F1F;
}
</style>
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/owner.png" alt="adminlogo"><br>
	this is admin panel.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="" >Add Supplier </a></li>
		<li> <a href="" >Add Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>owner/staffRegister" >Add Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/getCustomer" >Update Supplier </a></li>
		<li> <a href="" >Update Pipe and Fittings </a></li>
		<li> <a href="" >Update Staff</a></li>
		<li> <a href="" >Delete Supplier </a></li>
		<li> <a href="" >Delete Pipe and Fittings </a></li>
		<li> <a href="" >Delete Staff</a></li>
	</ul>
</div>
<div id="data">
<div id="staffForm">
<form action="<?php echo base_url();?>Staff/updateStaff" method="POST" onsubmit="return sValidate()" name="sForm">
	<font size="5px" color="white">
		<font size="6px"><b> Update Staff </b></font>
		<div class="form-group">
		<label for="ID">Staff Identity:</label>
		<input type="combo" class="form-control" id="staffID" placeholder="Enter First Name" name="sID">
		</div>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" placeholder="Enter First Name" name="sName">
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" placeholder="Enter First Name" name="sLName">
		</div>
		<div class="form-group">
		<label for="StaffTypeID">Staff Type ID:</label><br/>
		<input type="StaffTypeID" class="form-control" id="StaffTypeID" placeholder="Enter StaffTypeID" value="2" name="sType">
		</div>
		<div class="form-group"> 
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" placeholder="Enter Address" name="sAddress">
		</div>
		<div class="form-group">
		<label for="Gender">Gender:</label>
		<input type="radio"  id="Gender" name="sGender" value="Male" required="required"/> Male
		<input type="radio" id="Gender" name="sGender" value="Female" required="required"/> Female
		<input type="radio" id="Gender" name="sGender" value="Others" required="required"/> Others
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" placeholder="Enter Contact Number" name="sContact">
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="sEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" placeholder="Enter Username" name="sUsername">
		<div id="name_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" placeholder="Enter Password" name="sPassword">
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" placeholder="Enter password" name="srPassword">
		<div id="password_error" class="val_error"></div>
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Update</button>
		<button type="reset" class="btn btn-primary"> Reset </button>
		<?php
			if(isset($msg)) echo $msg;
		?>
	</font>
	</form>
</div>
</div>
</body>
</html>
<script type="text/javascript">
	//getting all input text objects
	var email = document.forms["sForm"]["sEmail"];
	var username = document.forms["sForm"]["sUsername"];
	var password = document.forms["sForm"]["sPassword"];
	var comPassword = document.forms["sForm"]["srPassword"];
	
	//getting all error display objects
	var name_error = document.getElementById("name_error");
	var email_error = document.getElementById("email_error");
	var password_error = document.getElementById("password_error");
	
	//setting all event listeners
	username.addEventListener("blur",nameVerify,true);
	email.addEventListener("blur",emailVerify,true);
	password.addEventListener("blur",passwordVerify,true);
	
	//validation function
	function sValidate(){
		if(email.value == ""){
			email.style.border = "1px solid red";
			email_error.textContent = "Email is required";
			email.focus();
			return false;
		}
		   
		if(username.value == ""){
			username.style.border = "1px solid red";
			name_error.textContent = "Username is required";
			username.focus();
			return false;
		}
		
		if(password.value == ""){
			password.style.border = "1px solid red";
			password_error.textContent = "Password is required";
			password.focus();
			return false;
		}
		
		//checking if the password and Re-password match or not
		if(password.value != comPassword.value ){
			password.style.border = "1 px red";
			comPassword.style.border = "1 px red";
			password_error.innerHTML = "The password didnot match";
			return false;
		}
	}

	function nameVerify(){
		if(username.value !=""){
			username.style.border = "1px solid #5E6E66";
			name_error.innerHTML = "";
			return true;
		}
		if(email.value !=""){
			email.style.border = "1px solid #5E6E66";
			email_error.innerHTML = "";
			return true;
		}
		if(password.value !=""){
			password.style.border = "1px solid #5E6E66";
			password.innerHTML = "";
			return true;
		}
	}
</script>

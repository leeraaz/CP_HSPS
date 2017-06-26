<!DOCTYPE html>
<html>
<head>
	<title> Update Customer</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
	<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet" content="text/css" />
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/customer.png" alt="adminlogo"><br>
	Customer PANEL.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li><a href="<?php echo base_url();?>customer/viewItems"> View items </a> </li>
		<li><a href="<?php echo base_url();?>customer/order"> Place Order </a></li>
		<li><a href="<?php echo base_url();?>customer/updateCustomer"> Update profile </a> </li>
		<li><a href="<?php echo base_url();?>Customer/cusLogout"> Logout </a></li>
	</ul>
</div>
<div id="data">
<h3>hello everyone</h3>
<div id="customerForm">
<?php
	foreach($record as $row){
?>
<form action="<?php echo base_url();?>Customer/updateCustomer" method="POST" onsubmit="return validate()" name="form">
	<font size="5px" color="white">
		<center><font size="6px"><b> Customer Registration </b></font></center>
		<div class="form-group">
		<label for="cID">Customer ID:</label>
		<input type="cID" class="form-control" id="cID" value="<?php echo $row->CUSTOMER_ID?>" placeholder="Enter First Name" name="cID">
		<div id="cname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" value="<?php echo $row->CUSTOMER_FIRSTNAME?>" placeholder="Enter First Name" name="cName">
		<div id="cname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" value="<?php echo $row->CUSTOMER_LASTNAME?>" placeholder="Enter First Name" name="cLName">
		<div id="lname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" value="<?php echo $row->CUSTOMER_ADDRESS?>"placeholder="Enter Address" name="cAddress">
		<div id="address_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Gender">Gender:</label>
		<?php   $gender= $row->GENDER;
			if($gender=='Male'){
				?>
			<input type="radio" class="radio-control" id="Gender" name="cGender" value="Male" required="required" checked="checked"/> Male
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Female" required="required"/> Female
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Others" required="required"/> Others
		<?php	} else if($gender == 'Female'){
		?>
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Male" required="required" /> Male
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Female" required="required" checked="checked"/> Female
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Others" required="required"/> Others
		<?php
		}	else{		?>
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Male" required="required" /> Male
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Female" required="required" /> Female
		<input type="radio" class="radio-control" id="Gender" name="cGender" value="Others" required="required" checked="checked"/> Others
		<?php
		}
		?>
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" value="<?php echo $row->CONTACT?>" placeholder="Enter Contact Number" name="cContact">
		<div id="contact_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" value="<?php echo $row->EMAIL?>" placeholder="Enter Email" name="cEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" value="<?php echo $row->USERNAME?>" placeholder="Enter Username" name="cUsername">
		<div id="username_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" value="<?php echo $row->PASSWORD?>" placeholder="Enter Password" name="cPassword">
		<div id="password_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" value="<?php echo $row->PASSWORD?>" placeholder="Enter configuration password" name="crPassword">
		<div id="comPassword_error" class="val_error"></div>
		</div>
		<input type="reset" style="margin-left:35%; width:15%;" class="btn btn-info">
		<button type="submit" class="btn btn-primary">Register</button>
		<?php
			if(isset($msg)) echo $msg;
		?>
	</font>
	</form>
<?php
	}
?>
</div>
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


<!DOCTYPE html>
<html>
<head>
	<title> Supplier Form </title>
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" content="text/css" />
	<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet" content="text/css" />
</head>
<style>
.val_error{
	color:#FF1F1F;
}
</style>
<body>
	<div id="Form">
<form action="" method="POST" onsubmit="return supValidate()" name="supForm">
	<font size="5px" color="white">
		<center><font size="6px"><b> Supplier Registration </b></font></center>
		<div class="form-group">
		<label for="Company">Company Name:</label>
		<input type="Company" class="form-control" id="Company" placeholder="Enter Company Name" name="supName">
		<div id="name_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" placeholder="Enter Address" name="supAddress">
		<div id="address_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" placeholder="Enter Contact Number" name="supContact">
		<div id="contact_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" placeholder="Enter Email" name="supEmail">
		<div id="email_error" class="val_error"></div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Register</button><br/>
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
	var supName = document.forms["supForm"]["supName"];
	var address = document.forms["supForm"]["supAddress"];
	var contact = document.forms["supForm"]["supContact"];
	var email = document.forms["supForm"]["supEmail"];
	
	//getting all error display objects
	var name_error = document.getElementById("name_error");
	var address_error = document.getElementById("address_error");
	var email_error = document.getElementById("email_error");
	var contact_error = document.getElementById("contact_error");
	
	//setting all event listeners
	supName.addEventListener("blur",nameVerify,true);
	address.addEventListener("blur",addressVerify,true);
	contact.addEventListener("blur",contactVerify,true);
	email.addEventListener("blur",emailVerify,true);
	
	//validation function
	function supValidate(){   
		if(supName.value == ""){
			supName.style.border = "1px solid red";
			name_error.textContent = "Company name is required";
			supName.focus();
			return false;
		}
		
		if(address.value == ""){
			address.style.border = "1px solid red";
			address_error.textContent = "Address is required";
			address.focus();
			return false;
		}
		
		if(contact.value == ""){
			contact.style.border = "1px solid red";
			contact_error.textContent = "Contact is required";
			contact.focus();
			return false;
		}
		
		if(email.value == ""){
			contact.style.border = "1px solid red";
			email_error.textContent = "Email is required";
			email.focus();
			return false;
		}
	}

	function nameVerify(){
		if(name.value !=""){
			name.style.border = "1px solid #5E6E66";
			name_error.innerHTML = "";
			return true;
		}
	}
	function addressVerify(){
		if(address.value !=""){
			address.style.border = "1px solid #5E6E66";
			address_error.innerHTML = "";
			return true;
		}
	}
	function contactVerify(){
		if(contact.value !=""){
			contact.style.border = "1px solid #5E6E66";
			contact.innerHTML = "";
			return true;
		}
	}
	function emailVerify(){
		if(email.value !=""){
			email.style.border = "1px solid #5E6E66";
			email_error.innerHTML = "";
			return true;
		}
	}
</script>
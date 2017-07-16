<!DOCTYPE html>
<html>
<head>
	<title> Staff Registration Form </title>
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" content="text/css" />
	<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet" content="text/css" />
<style>
.val_error{
	color:#FF1F1F;
}
</style>
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/owner.png" alt="adminlogo"><br>
	Admin panel.<br/>
	<?php
	echo 'Welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>Owner/supplier" >Add Supplier </a></li>
		<li> <a href="<?php echo base_url();?>Owner/pipefitting" >Add Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Owner/staffRegister" >Add Staff</a></li>
		<li> <a href="<?php echo base_url();?>Owner/saleView" >View Sales</a></li>
		<li> <a href="<?php echo base_url();?>Staff/getCustomer" >Edit Customer </a></li>
		<li> <a href="<?php echo base_url();?>Supplier/getSupplier" >Update Supplier </a></li>
		<li> <a href="<?php echo base_url();?>Owner/deleSupplier" >Delete Supplier </a></li>
		<li> <a href="<?php echo base_url();?>PipeAndFittings/getItem" >Edit Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Staff/getStaff" >Edit Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data2">
<div id="staffForm">
<font size="5px" color="white">
<?php
	echo  $this->session->flashdata("error");
?>
<form action="<?php echo base_url();?>Staff/saveData" method="POST" onsubmit="return staffValidate()" name="sForm">
		<center><font size="6px"><b> Staff Registration </b></font></center>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" placeholder="Enter your first name" name="sName">
		<div id="sname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" placeholder="Enter your last name" name="sLName">
		<div id="slname_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="StaffTypeID">Staff Type ID:</label><br/>
		<input type="StaffTypeID" class="form-control" id="StaffTypeID" placeholder="Enter staff type ID" value="2" name="sType">
		<div id="stype_error" class="val_error"></div>
		</div>
		<div class="form-group"> 
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" placeholder="Enter address" name="sAddress">
		<div id="address_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Gender">Gender:</label>
		<input type="radio" class="radio-control" id="Gender" name="sGender" value="Male" required="required"/> Male
		<input type="radio" class="radio-control" id="Gender" name="sGender" value="Female" required="required"/> Female
		<input type="radio" class="radio-control" id="Gender" name="sGender" value="Others" required="required"/> Others
		<div id="gender_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" placeholder="Enter telephpone or mobile number" name="sContact">
		<div id="contact_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" placeholder="Enter email" name="sEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" placeholder="Enter username" name="sUsername">
		<div id="name_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" placeholder="Enter password" name="sPassword">
		<div id="password_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" placeholder="Configuration password" name="srPassword">
		<div id="comPassword_error" class="val_error"></div>
		</div>
		<input type="reset" style="margin-left:40%; width:15%;" class="btn btn-primary" />
		<button type="submit" class="btn btn-primary">Register</button><br/>
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
	var sName = document.forms["sForm"]["sName"];
	var sLName = document.forms["sForm"]["sLName"];
	var sType = document.forms["sForm"]["sType"];
	var address = document.forms["sForm"]["sAddress"];
	var gender = document.forms["sForm"]["sGender"];
	var contact = document.forms["sForm"]["sContact"];
	var email = document.forms["sForm"]["sEmail"];
	var username = document.forms["sForm"]["sUsername"];
	var password = document.forms["sForm"]["sPassword"];
	var comPassword = document.forms["sForm"]["srPassword"];
	
	//getting all error display objects
	var sname_error = document.getElementById("sname_error");
	var slname_error = document.getElementById("slname_error");
	var stype_error = document.getElementById("stype_error");
	var address_error = document.getElementById("address_error");
	var gender_error = document.getElementById("gender_error");
	var contact_error = document.getElementById("contact_error");
	var email_error = document.getElementById("email_error");
	var username_error = document.getElementById("username_error");
	var password_error = document.getElementById("password_error");
	var comPassword_error = document.getElementById("comPassword_error");
	
	//setting all event listeners
	sName.addEventListener("blur",sNameVerify,true);
	sLName.addEventListener("blur",sLNameVerify,true);
	stype.addEventListener("blur",stypeVerify,true);
	sAddress.addEventListener("blur",sAddressVerify,true);
	sGender.addEventListener("blur",sGenderVerify,true);
	sContact.addEventListener("blur",sContactVerify,true);
	sEmail.addEventListener("blur",sEmailVerify,true);
	username.addEventListener("blur",nameVerify,true);
	password.addEventListener("blur",passwordVerify,true);
	comPassword.addEventListener("blur",comPasswordVerify,true);
	
	//validation function
	function staffValidate(){
		if(sName.value == ""){
			sName.style.border = "1px solid red";
			sname_error.textContent = "Staff name is required";
			sName.focus();
			return false;
		}
		   
		if(sLName.value == ""){
			sLName.style.border = "1px solid red";
			slname_error.textContent = "Staff last name is required";
			sLName.focus();
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
			gender_error.textContent = "Address is required";
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
			comPassword_error.textContent = "configuration Password is required";
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

	function sNameVerify(){
		if(sName.value !=""){
			sName.style.border = "1px solid #5E6E66";
			sname_error.innerHTML = "";
			return true;
		}
	}	
	function sLNameVerify(){
		if(sLName.value !=""){
			sLName.style.border = "1px solid #5E6E66";
			slname_error.innerHTML = "";
			return true;
		}
	}	
	function sAddressVerify(){
		if(sAddress.value !=""){
			sAddress.style.border = "1px solid #5E6E66";
			address_error.innerHTML = "";
			return true;
		}
	}	
	function sGenderVerify(){
		if(sGender.value !=""){
			sGender.style.border = "1px solid #5E6E66";
			gender.innerHTML = "";
			return true;
		}
	}
	function sContactVerify(){
		if(sContact.value !=""){
			sContact.style.border = "1px solid #5E6E66";
			contact_error.innerHTML = "";
			return true;
		}
	}	
	function sEmailVerify(){
		if(sEmail.value !=""){
			sEmail.style.border = "1px solid #5E6E66";
			email_error.innerHTML = "";
			return true;
		}
	}
	
	function nameVerify(){
		if(username.value != ""){
			username.style.border = "1px solid #5E6E66";
			name_error.innerHTML = "";
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
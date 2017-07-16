<!DOCTYPE html>
<html>
<head>
	<title> Supplier Form </title>
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
		Owner panel.<br/>
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
		<div id="supplierForm">
			<form action="<?php echo base_url();?>Supplier/add" method="POST" onsubmit="return supValidate()" name="supForm">
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
				</div>
				<input type="reset" style="margin-left:35%; width:15%;" class="btn btn-info" />
				<button type="submit" style="width:15%;" class="btn btn-primary">Save</button><br/>
				</font>
			</form>
		</div>
	</div>
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
<!DOCTYPE html>
<html>
<head>
<title> Update Supplier </title>
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
<div id="staffForm">
<?php 
	foreach($supplier as $row){
?>
<form action="<?php echo base_url();?>Owner/updateSupplier" method="POST" onsubmit="return sValidate()" name="sForm">
	<font size="5px" color="white">
		<font size="6px"><b> Update Supplier </b></font>
		<div class="form-group">
		<label for="ID">Supplier Identity:</label>
		<input type="combo" class="form-control" id="staffID" value="<?php echo $row->SUPPLIER_ID; ?>" name="suppID">
		</div>
		<div class="form-group">
		<label for="Company">Company Name:</label>
		<input type="Company" class="form-control" id="Company" value="<?php echo $row->COMPANY_NAME; ?>" name="suppName">
		</div>
		<div class="form-group">
		<label for="Address">Address:</label><br/>
		<input type="Address" class="form-control" id="Address" value="<?php echo $row->ADDRESS; ?>" name="suppAddress">
		</div>
		<div class="form-group">
		<label for="Contact">Contact:</label><br/>
		<input type="Contact" class="form-control" id="Contact" value="<?php echo $row->CONTACT; ?>" name="suppContact">
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" value="<?php echo $row->EMAIL; ?>" name="suppEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Update</button>
		<button type="reset" class="btn btn-primary"> Reset </button>
	</font>
</form>
</div>
<?php
	}
?>
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

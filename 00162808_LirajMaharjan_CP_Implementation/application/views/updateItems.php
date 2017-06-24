<!DOCTYPE html>
<html>
<head>
<title> Update Pipe and Fittings </title>
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
<?php 
	foreach($supplier as $row){
?>
  <h2>Pipe and Fittings form</h2>
  <form action="<?php echo base_url();?>PipeAndFittings/info" method="POST">
	<div class="form-group">
      <label for="Image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Insert image" name="image">
    </div>
	 <div class="form-group">
      <label for="Item Name">Item Name:</label>
      <input type="Item Name" class="form-control" id="Item Name" placeholder="Enter Item Name" name="itemName">
    </div>
	 <div class="form-group">
      <label for="Size">Size:</label>
      <input type="Size" class="form-control" id="Size" placeholder="Enter Size" name="size">
    </div>
	 <div class="form-group">
      <label for="Quantity">Quantity:</label>
      <input type="Quantity" class="form-control" id="Quantity" placeholder="Enter Quantity" name="quantity">
    </div>
	 <div class="form-group">
      <label for="Buying">Buying price:</label>
      <input type="Buying" class="form-control" id="Buying" placeholder="Enter Buying" name="buying">
    </div>
	 <div class="form-group">
      <label for="Selling">Selling price:</label>
      <input type="Selling" class="form-control" id="Selling" placeholder="Enter Selling" name="selling">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
	<button type="reset" class="btn btn-primary"> Reset </button>
<?php
	}
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

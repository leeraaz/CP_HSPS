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
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/staff.png" alt="adminlogo"><br>
	Staff panel.<br/>
	<?php
	echo 'Welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>Staff/viewStaffUpdate" >Update Profile </a></li>
		<li> <a href="<?php echo base_url();?>Staff/orderView" >View Order</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/customerName" >Prepare bill</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<div id="staffForm">
<font size="5px" color="white">
<?php
	echo  $this->session->flashdata("error");
	foreach($staff as $row){
?>
<form action="<?php echo base_url();?>Staff/updateStaff" method="POST" onsubmit="return sValidate()" name="sForm">
		<font size="6px"><b> Update Staff </b></font></br>
		<?php echo "Your Staff ID is <strong>" . $row->STAFF_ID . "</strong>"?>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" value="<?php echo $row->STAFF_FIRSTNAME; ?>" name="sName">
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" value="<?php echo $row->STAFF_LASTNAME; ?>" name="sLName">
		</div>
		<div class="form-group">
		<label for="StaffTypeID">Staff Type ID:</label><br/>
		<input type="StaffTypeID" class="form-control" id="StaffTypeID" value="<?php echo $row->STAFF_TYPE_ID; ?>" name="sType">
		</div>
		<div class="form-group"> 
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" value="<?php echo $row->STAFF_ADDRESS; ?>" name="sAddress">
		</div>
		<div class="form-group">
		<label for="Gender">Gender:</label>
		<?php   $gender= $row->GENDER;
			if($gender=='Male'){
		?>
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Male" required="required" checked="checked"/> Male
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Female" required="required"/> Female
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Others" required="required"/> Others
		<?php	} else if($gender == 'Female'){
		?>
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Male" required="required" /> Male
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Female" required="required" checked="checked"/> Female
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Others" required="required"/> Others
		<?php
		}	else{		?>
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Male" required="required" /> Male
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Female" required="required" /> Female
		<input type="radio" class="radio-control" id="sGender" name="cGender" value="Others" required="required" checked="checked"/> Others
		<?php
		}
		?>
		</div>
		<div class="form-group">
		<label for="Contact">Contact Number:</label>
		<input type="Contact" class="form-control" id="Contact" value="<?php echo $row->CONTACT; ?>" name="sContact">
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" value="<?php echo $row->EMAIL; ?>" name="sEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" value="<?php echo $row->USERNAME; ?>" name="sUsername">
		<div id="name_error" class="val_error"></div>
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" value="<?php echo $row->PASSWORD;?>" name="sPassword">
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" value="<?php echo $row->PASSWORD; ?>" name="srPassword">
		<div id="password_error" class="val_error"></div>
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Update</button>
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

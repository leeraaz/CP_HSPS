<!DOCTYPE html>
<html>
<head>
<title> Update Staff </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
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
<form action="<?php echo base_url();?>Staff/saveData" method="POST">
	<font size="5px" color="white">
		<font size="6px"><b> Update Staff </b></font>
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
		</div>
		<div class="form-group">
		<label for="Username">Username:</label>
		<input type="Username" class="form-control" id="Username" placeholder="Enter Username" name="sUsername">
		</div>
		<div class="form-group">
		<label for="Password">Password:</label>
		<input type="Password" class="form-control" id="Password" placeholder="Enter Password" name="sPassword">
		</div>
		<div class="form-group">
		<label for="rPassword">Re-enter Password:</label><br/>
		<input type="password" class="form-control" id="rPassword" placeholder="Enter password" name="srPassword">
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Register</button><br/>
		<?php
			if(isset($msg)) echo $msg;
		?>
	</font>
	</form>
</div>
</div>
</body>
</html>

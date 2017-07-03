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
	this is admin panel.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>owner/supplier" >Add Supplier </a></li>
		<li> <a href="<?php echo base_url();?>owner/pipefitting" >Add Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>owner/staffRegister" >Add Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/getCustomer" >Edit Customer </a></li>
		<li> <a href="<?php echo base_url();?>supplier/getSupplier" >Update Supplier </a></li>
		<li> <a href="<?php echo base_url();?>PipeAndFittings/getItem" >Edit Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Staff/getStaff" >Edit Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data2">
<div id="staffForm">
<?php 
?>
<form action="<?php echo base_url();?>Owner/findUpdateSupplier" method="POST" onsubmit="return sValidate()" name="sForm">
	<font size="5px" color="white">
		<font size="6px"><b> Update Supplier </b></font>
		<div class="form-group">
		<label for="ID">Supplier Identity:</label>
		<input type="combo" class="form-control" id="staffID" value="<?php  ?>" name="suppID">
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Search</button>
		<button type="reset" class="btn btn-primary"> Reset </button>
	</font>
</form>
</div>
</div>
<?php
	
?>
</body>
</html>
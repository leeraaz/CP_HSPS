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
		<li> <a href="<?php echo base_url();?>Owner/supplier" >Add Supplier </a></li>
		<li> <a href="<?php echo base_url();?>Owner/pipefitting" >Add Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Owner/staffRegister" >Add Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/getCustomer" >Edit Customer </a></li>
		<li> <a href="<?php echo base_url();?>Supplier/getSupplier" >Update Supplier </a></li>
		<li> <a href="<?php echo base_url();?>PipeAndFittings/getItem" >Edit Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Staff/getStaff" >Edit Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<div id="staffForm">
<form action="<?php echo base_url();?>Owner/deleteCustomer" method="POST" onsubmit="return sValidate()" name="sForm">
	<font size="5px" color="">
		<font size="6px"><b> Delete Customer </b></font>
		<label for="ID">Supplier Identity:</label>
		<select name="customer_ID">
			<?php 
				foreach ($customers as $value){
			?>
			<option value="<?php echo $value->CUSTOMER_ID; ?>"> <?php echo $value->CUSTOMER_FIRSTNAME; ?> </option>
			<?php
				}
			?>
		</select>
		
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Search</button>
	</font>
</form>
</div>
</div>

</body>
</html>

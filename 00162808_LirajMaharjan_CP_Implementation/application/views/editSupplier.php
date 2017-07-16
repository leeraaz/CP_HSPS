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

	<div id="data">
	<font color="white">
		<p>
			This function is yet to be done... Sorry :)
		</p>
	</font>
	</div>
	</div>
	</div>
</body>
</html>
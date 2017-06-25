<!DOCTYPE html>
<html>
<head>
	<title>Owner Panel</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
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
		<li> <a href="" >Edit Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Staff/getStaff" >Edit Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<h3>
<marquee>
<font size="18px" color="white">
<?php
	echo 'welcome - '.$this->session->userdata('USERNAME').' and your staff ID is.'.$this->session->userdata('STAFF_ID');
?>
</font>
</marquee>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
</head>
<body>
<div id="header">
	<center>
	<img id="adminlogo" src="<?php echo base_url();?>assets/Images/staff.png" alt="adminlogo"></br>
	Staff panel
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
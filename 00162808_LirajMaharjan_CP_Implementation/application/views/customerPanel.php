<!DOCTYPE html>
<html>
<head>
	<title>Customer Panel</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/customer.png" alt="adminlogo"><br>
	Customer PANEL.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li><a href="<?php echo base_url();?>customer/viewItems"> View items </a> </li>
		<li><a href="<?php echo base_url();?>Order/orderPage"> Place Order </a></li>
		<li><a href="<?php echo base_url();?>customer/detailCustomer"> Update profile </a> </li>
		<li><a href="<?php echo base_url();?>customer/cusLogout"> Logout </a></li>
	</ul>
</div>
<div id="data">
<h3>
<marquee>
<font size="18px" color="white">
<?php
	echo 'welcome - '.$this->session->userdata('USERNAME').' and your customer ID is.'.$this->session->userdata('CUSTOMER_ID');
?>
</font>
</marquee>
</h3>
</div>
</body>
</html>
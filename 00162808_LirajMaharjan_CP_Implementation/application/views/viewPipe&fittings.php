<!DOCTYPE html>
<html>
<head>
	<title>Customer Panel</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
	<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet" content="text/css" />
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/customer.png" alt="adminlogo"><br>
	Customer PANEL.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li><a href=""> View items </a> </li>
		<li><a href="<?php echo base_url();?>customer/order"> Place Order </a></li>
		<li><a href="<?php echo base_url();?>customer/updateCustomer"> Update profile </a> </li>
		<li><a href="<?php echo base_url();?>Customer/cusLogout"> Logout </a></li>
	</ul>
</div>
<div id="data">
	<?php
		echo "Not available";
	?>
</div>
</body>
</html>
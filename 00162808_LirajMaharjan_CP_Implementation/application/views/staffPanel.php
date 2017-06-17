<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
</head>
<body>
<div id="header">
	<center>
	<img id="adminlogo" src="<?php echo base_url();?>assets/Images/owner.png" alt="adminlogo"></br>
	STAFF PANNEL
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="" >Add </a></li>
		<li> <a href="" >View Order</a> </li>
		<li> <a href="" >Prepare bill</a> </li>
		<li> <a href="" >Logout</a> </li>
	</ul>
</div>
<div id="data">
<?php
echo 'welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
?>
</div>
</body>
</html>
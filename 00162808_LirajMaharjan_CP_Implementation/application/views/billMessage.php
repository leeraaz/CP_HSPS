<!DOCTYPE html>
<html>
<head>
<title> Update Staff </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/actualbootstrap.css" rel="stylesheet">
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
		<li> <a href="<?php echo base_url();?>staff/updateStaff" >Update Profile </a></li>
		<li> <a href="<?php echo base_url();?>staff/orderView" >View Order</a> </li>
		<li> <a href="<?php echo base_url();?>staff/prepareBIll" >Prepare bill</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<font color="white" size="5px">
<?php echo $this->session->flashdata('error'); ?>
	 <?php echo anchor("Staff/customerName", 'BACK' ,['class'=>"btn btn-danger"]);?> 
</font>
</body>
</html>

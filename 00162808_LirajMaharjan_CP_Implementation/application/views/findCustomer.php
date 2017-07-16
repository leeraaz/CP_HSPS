<!DOCTYPE html>
<html>
<head>
<title> Update Staff </title>
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
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/staff.png" alt="adminlogo"><br>
	Staff Panel.</br>
	<?php
	echo 'Welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
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
<form action="<?php echo base_url();?>Staff/prepareBill" method="POST" name="cusForm">
<font color="black">
<label style="color:white; size:5px" for="CUSTOMER">Select Customer:</label>
<select size="1" name="CUSTOMER_ID">
<option value="">Select customer name </option>
<?php if(count($getCUSTOMER)):?>
<?php foreach($getCUSTOMER as $CUSTOMER):?>
<option value='<?php echo $CUSTOMER->CUSTOMER_ID?>'>
<?php echo $CUSTOMER->CUSTOMER_FIRSTNAME;?> 
</option>
<?php endforeach;?>	
<?php else:?>
<?php endif;?>
</select>
<button type="submit" style="margin-left:5%; width:10%;" class="btn btn-primary">Bill</button>
</dd>
</dl>

</font>
</form>
</div>
</body>
</html>
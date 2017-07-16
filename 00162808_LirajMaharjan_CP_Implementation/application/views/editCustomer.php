<!DOCTYPE html>
<html>
<head>
<title> Edit Customer </title>
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
<div id="data2">
<div id="staffForm">
<form action="<?php echo base_url();?>Owner/deleteCustomer" method="POST" onsubmit="return sValidate()" name="sForm">
	<font size="5px" color="white">
		<font size="6px"><b> Delete Customer </b></font><br/>
		<font size="6px"><label for="delete">Select Customer to delete:</label></font>
		<font color="black">
		<select name="customer_ID">
			<?php
				foreach ($customers as $value){
			?>
			<option value="<?php echo $value->CUSTOMER_ID; ?>"> <?php echo $value->CUSTOMER_FIRSTNAME; ?> </option>
			<?php
				}
			?>
		</select>
		</font>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-danger">Delete</button>
	</font>
</form>
</div>
</div>

</body>
</html>

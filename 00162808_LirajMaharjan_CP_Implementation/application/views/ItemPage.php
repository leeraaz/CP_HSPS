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
	this is admin panel.<br/>
	<?php
	echo 'welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
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
<div id="Form">
  <h2>Pipe and Fittings form</h2>
  <form action="<?php echo base_url();?>Upload/do" method="POST">
	<div class="form-group">
      <label for="Image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Insert image" name="image">
    </div>
	 <div class="form-group">
      <label for="Item Name">Item Name:</label>
      <input type="Item Name" class="form-control" id="Item Name" placeholder="Enter Item Name" name="itemName">
    </div>
	 <div class="form-group">
      <label for="Size">Size:</label>
      <input type="Size" class="form-control" id="Size" placeholder="Enter Size" name="size">
    </div>
	 <div class="form-group">
      <label for="Quantity">Quantity:</label>
      <input type="Quantity" class="form-control" id="Quantity" placeholder="Enter Quantity" name="quantity">
    </div>
	 <div class="form-group">
      <label for="Buying">Buying price:</label>
      <input type="Buying" class="form-control" id="Buying" placeholder="Enter Buying" name="buying">
    </div>
	 <div class="form-group">
      <label for="Selling">Selling price:</label>
      <input type="Selling" class="form-control" id="Selling" placeholder="Enter Selling" name="selling">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
	<?php
	if(isset($msg)) echo $msg;
	?>
  </form>
</div>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title> Pipe and Fittings Form </title>
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
	Admin panel.<br/>
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
<div id="Form">
  <h2>Pipe and Fittings form</h2>
  <?php echo $this->session->flashdata('error'); ?>
   <?php echo form_open_multipart('PipeAndFittings/do_upload');?>
  <form action="<?php echo base_url();?>PipeandFittings/do_upload" method="POST">
	<div class="form-group">
      <label for="Image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Insert image" name="file">
    </div>
	 <div class="form-group">
      <label for="Item Name">Item Name:</label>
      <input type="Item Name" class="form-control" id="Item Name" placeholder="Enter Item Name" name="itemName">
    </div>
	 <div class="form-group">
      <label for="Size">Size:</label>
		<select type="Size" class="form-control" id="Size" placeholder="Enter Size" name="size">
		  <option value="1/2">1/2 </option>
		  <option value="3/4">3/4</option>
		  <option value="1">1</option>
		  <option value="1 1/2">1 1/2</option>
		  <option value="2 ">2</option>
		  <option value="2 1/2">2 1/2</option>
		</select>
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
	<input type="reset" class="btn btn-danger" style="margin-left:35%">
    <button type="submit" class="btn btn-primary">Submit</button>
	<?php
	if(isset($msg)) echo $msg;
	?>
  </form>
</div>
</div>
</body>
</html>

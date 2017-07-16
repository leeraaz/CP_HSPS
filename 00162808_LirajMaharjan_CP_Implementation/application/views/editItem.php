<!DOCTYPE html>
<html>
<head>
	<title> Edit Pipe and Fittings </title>
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
<div id="data">
<font color="white" size="4">
<center><h2> Edit Pipe and Fittings </h2></center>
<table border="2" align="center">
<tr>
	<th> ID </th>
	<th> Image </th>
	<th>Name </th>
	<th>Size </th>
	<th> Quantity </th>
	<th> Buying </th>
	<th> Selling </th>
	<th> Delete </th>
</tr>
<?PHP
 //var_dump($data2->result());
	 foreach ($items as $product)

{ ?>
<tr>
    <td><center> <?php echo $product->PFID; ?></center> </td>
    <td> <img src='<?php echo base_url();?>assets/Images/<?php echo $product->IMAGE;?>' style="width:100px;" class="img-responsive"/></td>
	<td> <?php echo $product->ITEM_NAME; ?> </td>
	<td> <?php echo $product->SIZE_in_INCH; ?> </td>
	<td> <?php echo $product->QUANTITY; ?> </td>
	<td> <?php echo $product->BUYING_PRICE; ?> </td>
	<td> <?php echo $product->SELLING_PRICE; ?> </td>
	<td> <?php echo anchor("PipeAndFitting/delProduct{$product->PFID}", 'Delete' ,['class'=>"btn btn-danger"]);?> </td>
</tr>
<?php
 }			
?>
</table>
</div>
</body>
</html>

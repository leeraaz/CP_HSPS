<!DOCTYPE html>
<html>
<head>
	<title> Viewing Sales </title>
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
<center><h2> Sales </h2></center>
<table border="2" align="center">
<tr>
	<th> Customer ID </th>
	<th> Item Name </th>
	<th>Size </th>
	<th> Quantity </th>
	<th> Price </th>
	<th> Total </th>
	<th> Vat </th>
	<th> Grand Total </th>
</tr>
<?PHP
 //var_dump($data2->result());
	 foreach ($sale as $sales)

{ ?>
<tr>
    <td><center> <?php echo $sales->CUSTOMER_ID; ?></center> </td>
	<td> <?php echo $sales->ITEM_NAME; ?> </td>
	<td> <?php echo $sales->SIZE; ?> </td>
	<td> <?php echo $sales->QUANTITY; ?> </td>
	<td> <?php echo $sales->SELLING_PRICE; ?> </td>
	<td> <?php echo $sales->TOTAL; ?> </td>
	<td> <?php echo $sales->VAT; ?> </td>
	<td> <?php echo $sales->GRAND_TOTAL; ?> </td>
</tr>
<?php
 }			
?>
</table>
</div>
</body>
</html>

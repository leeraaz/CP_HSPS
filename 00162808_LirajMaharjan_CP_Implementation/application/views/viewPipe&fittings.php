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
	Customer PANEL.</br>
	<?php
		echo 'Welcome - '.$this->session->userdata('USERNAME').' and your customer ID is.'.$this->session->userdata('CUSTOMER_ID');
	?>
	</center>
</div>
<div id="sidebar">
	<ul>
		<li><a href="<?php echo base_url();?>PipeAndFittings/getItemforCustomer"> View items </a> </li>
		<li><a href="<?php echo base_url();?>Order/orderPage"> Place Order </a></li>
		<li><a href="<?php echo base_url();?>customer/detailCustomer"> Update profile </a> </li>
		<li><a href="<?php echo base_url();?>customer/cusLogout"> Logout </a></li>
	</ul>
</div>
<div id="data">
	
<font color="white" size="4">
<center><h2> Pipe and Fittings available right now</h2></center>
<table border="2" align="center">
<tr>
	<th> ID </th>
	<th> Image </th>
	<th>Name </th>
	<th>Size </th>
	<th> Quantity </th>
	<th> Selling </th>
</tr>
<?PHP
	 foreach ($items as $product)

{ ?>
<tr>
    <td><center> <?php echo $product->PFID; ?></center> </td>
    <td> <img src='<?php echo base_url();?>assets/Images/<?php echo $product->IMAGE;?>' style="width:100px;" class="img-responsive"/></td>
	<td> <?php echo $product->ITEM_NAME; ?> </td>
	<td> <?php echo $product->SIZE_in_INCH; ?> </td>
	<td> <?php echo $product->QUANTITY; ?> </td>
	<td> <?php echo $product->SELLING_PRICE; ?> </td>
</tr>
<?php
 }			
?>
</table>
</div>
</body>
</html>
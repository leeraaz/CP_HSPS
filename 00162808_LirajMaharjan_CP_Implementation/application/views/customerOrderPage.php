<!DOCTYPE html>
<html>
<head>
	<title>Customer Order Page</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/customer.png" alt="adminlogo"><br>
	Customer PANEL.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li><a href="<?php echo base_url();?>customer/viewItems"> View items </a> </li>
		<li><a href="<?php echo base_url();?>customer/order"> Place Order </a></li>
		<li><a href="<?php echo base_url();?>customer/detailCustomer"> Update profile </a> </li>
		<li><a href="<?php echo base_url();?>customer/cusLogout"> Logout </a></li>
	</ul>
</div>
<div id="data">
<h3>hello everyone</h3>
<font color="white" size="5px">
	<div class="placeOrder">
	<font size="6px">Order Form</font>
	<table border="2px">
		<tr align="center">
			<td>Item Name </td>
			<td>Size</td>
			<td> Quantity </td>	
		</tr>	
		<div id="product">
	<ul>
		<?php foreach ($products as $product){?>
		<li>
			<?php echo form_open('Order/add');?>
			<div class="name"><?php echo $product->ITEM_NAME;?></div>
			<img src='<?php echo base_url();?>assets/Images/<?php echo $product->IMAGE;?>' width="212px" >
			<div class="name"><?php echo $product->IMAGE;?></div>
			<div class="size"><?php echo $product->SIZE_in_INCH;?></div>
			<div class="qty"><?php echo $product->QUANTITY;?></div>
			<div class="sale"><?php echo $product->SELLING_PRICE;?></div>
			
			<?php echo form_hidden('id',$product->PFID);?>
			<?php echo form_submit('action','Add to CART');?>
			<?php echo form_close();?>
		</li>
		<?php }?>
	</ul>	
</div>
		<td align="right"> <input type="button" name="order" align="center" value="Order"> </td>
	</table>
	</div>
	</font>

</div>
</body>
</html>
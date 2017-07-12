<!DOCTYPE html>
<html>
<head>
	<title>Customer Panel</title>
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
		<li><a href="<?php echo base_url();?>Order/orderPage"> Place Order </a></li>
		<li><a href="<?php echo base_url();?>customer/detailCustomer"> Update profile </a> </li>
		<li><a href="<?php echo base_url();?>customer/cusLogout"> Logout </a></li>
	</ul>
</div>
<div id="orderdata">
<font color="white" align="center">

<ul >
		<?php foreach ($products as $product){?>
		<li>
			<?php echo form_open('Order/addtoOrder');?>
			<div class="image">
			<img src='<?php echo base_url();?>assets/Images/<?php echo $product->IMAGE;?>' width="212px" >
			</div>
			<div class="name">
			<label>Item Name</label>
			<input type="text" value="<?php echo $product->ITEM_NAME;?>" name="itemName">
			</div>
			<div class="price">
			<label>Price</label>
			<input type="text" value="<?php echo $product->SELLING_PRICE;?>" name="price">
			</div>
			<div class="size">
			<label>Size</label>
			<input type="text" value="<?php echo $product->SIZE_in_INCH;?>" name="size">
			</div>
			<div class="qty">
			<label>Quantity</label><input type="text" name="qty">
			</div>
			<?php 
				echo form_hidden('id',$product->PFID);
			?>
				<?php 
					echo form_submit('action','Add to CART');
				?>
				<?php 
					echo form_close();
				?>
		</li>
		<?php }?>
	</ul>
</font>
</div>
</body>
</html>
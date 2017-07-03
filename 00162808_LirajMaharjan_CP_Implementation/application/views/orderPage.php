<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<meta charset="UTF-8">
</head>
<body>
<div id="product">
	<ul>
		<?php foreach ($products as $product){?>
		<li>
			<?php echo form_open('Order/add');?>
			<div class="name"><?php echo $product->ITEM_NAME;?></div>
			<div class="size"><?php echo $product->SIZE_in_INCH;?></div>
			<div class="qty"><?php echo $product->QUANTITY;?></div>
			<div class="sale"><?php echo $product->SELLING_PRICE;?></div>
			
			<?php echo form_hidden('id',$product->PFID);?>
			<?php echo form_submit('action','Add to bill');?>
			<?php echo form_close();?>
		</li>
		<?php }?>
	</ul>	
</div>

<div>
	<?php 
		if($cart=$this->cart->contents()){?>
		<?php print_r($cart);?>
		<?php } ?>
	
</div>		
</body>
</html>
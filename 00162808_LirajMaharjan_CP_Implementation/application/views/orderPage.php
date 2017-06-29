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
			<div class="thub">
			<?php echo img(array( 
				'src' => 'assets/Images/'.$product->IMAGE,
				'class' => 'thub',
				'alt' => $product->ITEM_NAME
				));
			?>
			</div>
			<div class="price"><?php echo $product->SELLING_PRICE;?></div>
			<div class="option">
				<?php if ($product->opti)
			</div>
			<?php echo form_close();?>
		</li>
		<?php }?>
</body>
</html>
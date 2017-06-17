<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pipe and Fittings </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/design.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/CSS/bootstrap.min.css">
  <script src="<?php echo base_url();?>assets/CSS/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div id="Form">
  <h2>Pipe and Fittings form</h2>
  <form action="<?php echo base_url();?>PipeAndFittings/info" method="POST">
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

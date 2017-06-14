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
<div class="pipes">
  <h2>Pipe and Fittings form</h2>
  <form action="Pipe&fittings/info" method="POST">
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
      <input type="Size" class="form-control" id="Size" placeholder="Enter Size" name="Size">
    </div>
	 <div class="form-group">
      <label for="Quantity">Quantity:</label>
      <input type="Quantity" class="form-control" id="Quantity" placeholder="Enter Quantity" name="Quantity">
    </div>
	 <div class="form-group">
      <label for="Buying">Buying price:</label>
      <input type="Buying" class="form-control" id="Buying" placeholder="Enter Buying" name="Buying">
    </div>
	 <div class="form-group">
      <label for="Selling">Selling price:</label>
      <input type="Selling" class="form-control" id="Selling" placeholder="Enter Selling" name="Selling">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
</div>

</body>
</html>

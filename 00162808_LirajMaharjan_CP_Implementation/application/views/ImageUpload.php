<html>
<head>
<title>Upload Form</title>
</head>
<body>
<br />
 <h2>Pipe and Fittings form</h2>
 <?php echo form_open_multipart('upload/do_upload');?>
  <form action="<?php echo base_url();?>Upload/do_upload" method="POST">
	<div class="form-group">
      <label for="Image">Image:</label>
     <input type="file" name="file" size="20" />	
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
  </form>

</form>

</body>
</html>
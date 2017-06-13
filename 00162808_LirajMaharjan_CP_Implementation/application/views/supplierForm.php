<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="<?php echo base_url();?>Supplier/add" method="POST">
		Company Name:<input type="text" name="supName" />
		Address:<input type="text" name="supAddress" />
		Contact:<input type="text" name="supContact" />
		Email:<input type="text" name="supEmail" />
		<input type="submit" name="submit" value="Save" />
	</form>
</body>
</html>
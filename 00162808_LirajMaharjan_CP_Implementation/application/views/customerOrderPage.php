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
		<li><a href="<?php echo base_url();?>customer/updateCustomer"> Update profile </a> </li>
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
		
		<tr>
			<td><input type="combobox" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<tr>
			<td><input type="text" name="items" required="required"/> </td>
			<td><input type="text" name="sizes" required="required"/>  </td>
			<td><input type="text" name="quantities" required="required"/> </td>
		</tr>
		<td></td>
		<td></td>
		<td align="right"> <input type="button" name="order" align="center" value="Order"> </td>
	</table>
	</div>
	</font>

</div>
</body>
</html>
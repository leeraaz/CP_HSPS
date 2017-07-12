<!DOCTYPE html>
<html>
<head>
	<title>Sales Panel</title>
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
		<li> <a href="<?php echo base_url();?>staff/updateStaff" >Update Profile </a></li>
		<li> <a href="<?php echo base_url();?>staff/sale" >View Order</a> </li>
		<li> <a href="" >Prepare bill</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="orderdata">
<font color="white" align="center">

<ul >
	
			
		<table border="2px">
			<thead>
				<tr>
					<th>Item name</th>
					<th>Size</th>
                    <th>Quanitity</th>
					<th>Price</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
               <?php 
	foreach($orders as $row){
?>
<form action="<?php echo base_url();?>Staff/updateStaff" method="POST" onsubmit="return sValidate()" name="sForm">
	<font size="5px" color="white">
		<font size="6px"><b> Update Staff </b></font></br>
		<?php echo "Your Staff ID is <strong>" . $row->ORDER_ID . "</strong>"?>
		<div class="form-group">
		<label for="FirstName">First Name:</label>
		<input type="FirstName" class="form-control" id="FirstName" value="<?php echo $row->CUSTOMER_ID; ?>" name="sName">
		</div>
		<div class="form-group">
		<label for="LastName">Last Name:</label><br/>
		<input type="LastName" class="form-control" id="LastName" value="<?php echo $row->ITEM_NAME; ?>" name="sLName">
		</div>
		<div class="form-group">
		<label for="StaffTypeID">Staff Type ID:</label><br/>
		<input type="StaffTypeID" class="form-control" id="StaffTypeID" value="<?php echo $row->SIZE; ?>" name="sType">
		</div>
		<div class="form-group"> 
		<label for="Address">Address:</label>
		<input type="Address" class="form-control" id="Address" value="<?php echo $row->QUANTITY; ?>" name="sAddress">
		</div>
		<div class="form-group">
		<label for="Email">Email:</label><br/>
		<input type="Email" class="form-control" id="Email" value="<?php echo $row->PRICE; ?>" name="sEmail">
		<div id="email_error" class="val_error"></div>
		</div>
		<button type="submit" style="margin-left:40%; width:15%;" class="btn btn-primary">Update</button>
		<button type="reset" class="btn btn-primary"> Reset </button>
<?php
	}
?>
	
	</ul>
</font>
</div>
</body>
</html>
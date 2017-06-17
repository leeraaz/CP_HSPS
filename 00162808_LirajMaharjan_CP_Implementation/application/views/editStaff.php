<!DOCTYPE html>
<html>
<head>
	<title>Owner Panel</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/owner.png" alt="adminlogo"><br>
	this is admin panel.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="" >Add Supplier </a></li>
		<li> <a href="" >Add Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>owner/staffRegister" >Add Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/getCustomer" >Edit Supplier </a></li>
		<li> <a href="" >Edit Pipe and Fittings </a></li>
		<li> <a href="" >Edit Staff</a></li>
		<li> <a href="" >Logout </a></li>
	</ul>
</div>
<div id="data">
<font color="white" size="4">
<h2> Edit Staff </h2>
<table border="2" align="center">
<tr>
	<th> Staff ID </th>
	<th> First Name </th>
	<th> Last Name </th>
	<th> Staff Type ID </th>
	<th> Address </th>
	<th> Gender </th>
	<th> Contact</th>
	<th> Email </th>
	<th> Username </th>
	<th> Password </th>
	<th> Update </th>
	<th> Delete </th>
</tr>
<?PHP
 //var_dump($data2->result());
	 
	 foreach ($staff as $row)
{ ?>
<tr>
    <td> <?php echo $row->STAFF_ID; ?> </td>
	<td> <?php echo $row->STAFF_FIRSTNAME; ?> </td>
	<td> <?php echo $row->STAFF_LASTNAME; ?> </td>
	<td> <?php echo $row->STAFF_TYPE_ID; ?> </td>
	<td> <?php echo $row->STAFF_ADDRESS; ?> </td>
	<td> <?php echo $row->GENDER; ?> </td>
	<td> <?php echo $row->CONTACT; ?> </td>
	<td> <?php echo $row->EMAIL; ?> </td>
	<td> <?php echo $row->USERNAME; ?> </td>
	<td> <?php echo $row->PASSWORD; ?> </td>
	<td> <a href="">Update</a> </td>
	<td> <a href="">Delete</a> </td>
</tr>
			<?php
 }
			
?>
</font>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Staff</title>
	<link content="text/css" href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet" /> 
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/owner.png" alt="adminlogo"><br>
	Owner panel.<br/>
	<?php
	echo 'Welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>Owner/supplier" >Add Supplier </a></li>
		<li> <a href="<?php echo base_url();?>Owner/pipefitting" >Add Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Owner/staffRegister" >Add Staff</a></li>
		<li> <a href="<?php echo base_url();?>Owner/saleView" >View Sales</a></li>
		<li> <a href="<?php echo base_url();?>Staff/getCustomer" >Edit Customer </a></li>
		<li> <a href="<?php echo base_url();?>Supplier/getSupplier" >Update Supplier </a></li>
		<li> <a href="<?php echo base_url();?>Owner/deleSupplier" >Delete Supplier </a></li>
		<li> <a href="<?php echo base_url();?>PipeAndFittings/getItem" >Edit Pipe and Fittings </a></li>
		<li> <a href="<?php echo base_url();?>Staff/getStaff" >Edit Staff</a></li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data2">
<font color="white" size="4">
<center><h2> Edit Staff </h2></center>
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
	<th> Delete </th>
</tr>
<?PHP
	foreach ($staff as $row)
{ ?>
<tr>
    <td><center> <?php echo $row->STAFF_ID; ?></center> </td>
	<td> <?php echo $row->STAFF_FIRSTNAME; ?> </td>
	<td> <?php echo $row->STAFF_LASTNAME; ?> </td>
	<td> <?php echo $row->STAFF_TYPE_ID; ?> </td>
	<td> <?php echo $row->STAFF_ADDRESS; ?> </td>
	<td> <?php echo $row->GENDER; ?> </td>
	<td> <?php echo $row->CONTACT; ?> </td>
	<td> <?php echo $row->EMAIL; ?> </td> 
	<td> <?php echo $row->USERNAME; ?> </td>
	<td> <?php echo anchor("owner/delStaff/{$row->STAFF_ID}", 'Delete' ,['class'=>"btn btn-danger"]);?> </td>
</tr>
			<?php
 }
			
?>
</font>
</div>
</body>
</html>
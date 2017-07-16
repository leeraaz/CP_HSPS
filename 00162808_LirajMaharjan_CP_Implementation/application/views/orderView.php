<!DOCTYPE html>
<html>
<head>
<title> View Order </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
<style>
.val_error{
	color:#FF1F1F;
}
</style>
</head>
<body>
<div id="header">
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/owner.png" alt="adminlogo"><br>
	Staff Panel.</br>
	<?php
	echo 'Welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>staff/updateStaff" >Update Profile </a></li>
		<li> <a href="<?php echo base_url();?>staff/orderView" >View Order</a> </li>
		<li> <a href="<?php echo base_url();?>staff/customerName" >Prepare bill</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<font color="white" size="4">
<center><h2> View Order </h2></center>
<table border="2" align="center">
<tr>
	<th> Order ID </th>
	<th> Customer ID </th>
	<th> Item Name </th>
	<th> Size </th>
	<th> Quantity </th>
	<th> Delete </th>
</tr>
<?PHP
	foreach ($order as $row){ 
?>
<tr>
    <td><center> <?php echo $row->ORDER_ID; ?></center> </td>
	<td> <?php echo $row->CUSTOMER_ID; ?> </td>
	<td> <?php echo $row->ITEM_NAME; ?> </td>
	<td> <?php echo $row->SIZE; ?> </td>
	<td> <?php echo $row->QUANTITY; ?> </td>
	<td> <?php echo anchor("owner/delStaff/", 'Delete' ,['class'=>"btn btn-danger"]);?> </td>
</tr>
<?php
}			
?>
</table>	
</font>
</div>
</body>
</html>
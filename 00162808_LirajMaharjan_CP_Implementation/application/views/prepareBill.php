<!DOCTYPE html>
<html>
<head>
<title> Update Staff </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/actualbootstrap.css" rel="stylesheet">
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
	this is admin panel.
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>staff/updateStaff" >Update Profile </a></li>
		<li> <a href="<?php echo base_url();?>staff/orderView" >View Order</a> </li>
		<li> <a href="" >Prepare bill</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<font color="white">
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
					$sum=0;
					foreach ($bill as $row){
					 $itemprice=$row['PRICE'];
					 $quantity=$row['QUANTITY'];
					 $totalcost=$itemprice * $quantity;
					 $sum+=$totalcost;
					 $vat=$sum * 0.13;
					 $grandTotal = $sum + $vat;
               ?>
			<tr>
				<td ><?php echo $row['ITEM_NAME'];?></td>
				<td ><?php echo $row['SIZE'];?></td>
				<td ><?php echo $row['QUANTITY'];?></td>
				<td ><?php echo $row['PRICE'];?></td>
				<td><?php echo $totalcost;?></td>
			</tr>   
			</tr>        
			<?php
				}
			?>
			<tr>
				<td><h4><strong>Total: </strong></h4></td>
				<td><td><td><td><h4><strong><?php echo $sum;?> </strong></h4></td></td></td></td>
			</tr>
			<tr>
				<td><h4><strong>Vat: </strong></h4></td>
				<td><td><td><td><h4><strong><?php echo $vat;?> </strong></h4></td></td></td></td>
			</tr>
			<tr>
				<td><h4><strong>Grand Total: </strong></h4></td>
				<td><td><td><td><h4><strong><?php echo $grandTotal;?> </strong></h4></td></td></td></td>
			</tr>   
			</tbody>
		</table>
	</font>	
</div>
</body>
</html>
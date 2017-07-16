<!DOCTYPE html>
<html>
<head>
<title> Update Staff </title>
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
	<center><img id="adminlogo" src="<?php echo base_url();?>assets/Images/staff.png" alt="adminlogo"><br>
	Staff Panel.</br>
	<?php
	echo 'Welcome -'.$this->session->userdata('USERNAME').' and you ID is.'.$this->session->userdata('STAFF_ID');
	?>
	</center>
</div>
<div id="sidebar">
	<ul>
		<li> <a href="<?php echo base_url();?>Staff/viewStaffUpdate" >Update Profile </a></li>
		<li> <a href="<?php echo base_url();?>Staff/orderView" >View Order</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/customerName" >Prepare bill</a> </li>
		<li> <a href="<?php echo base_url();?>Staff/logout" >Logout </a></li>
	</ul>
</div>
<div id="data">
<font color="white">
<?php echo $this->session->flashdata('error'); ?>
<form action="<?php echo base_url();?>Staff/sale" method="POST" name="sale">
        <table border="2px">
			<thead>
				<tr>
					<th><center>Item name</center></th>
					<th><center>Size</center></th>
                    <th><center>Quanitity</center></th>
					<th><center>Price</center></th>
                    <th><center>Amount</center></th>
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
			<label>Customer Identity: </label>
			<input style="color:black; width:15px" value="<?php echo $row['CUSTOMER_ID'];?>" name="saleCusID">    
			<tr>
				<td>
					<input type="text" style="color:black" value="<?php echo $row['ITEM_NAME'];?>" name="saleName" readonly>
				</td>
				<td>
					<input type="text" style="color:black" value="<?php echo $row['SIZE'];?>" name="saleSize"readonly>
				</td>
				<td>
					<input type="text" style="color:black" value="<?php echo $row['QUANTITY'];?>" name="saleQty" readonly>
				</td>
				<td>
					<input type="text" style="color:black" value="<?php echo $row['PRICE'];?>" name="salePrice" readonly>
				</td>
				<td>
					<input type="text" style="color:black" value="<?php echo $totalcost;?>" name="saleCost" readonly>
				</td>
			</tr>   
			</tr>        
			<?php
				}
			?>
			<tr>
				<td><strong>Total: </strong></td>
				<td><td><td><td><input type="text" style="color:black" value="<?php echo $sum;?>" name="saleSum" readonly></td></td></td></td>
			</tr>
			<tr>
				<td><strong>Vat: </strong></h4></td>
				<td><td><td><td><input type="text" style="color:black" value="<?php echo $vat;?>" name="saleVat" readonly></td></td></td></td>
			</tr>
			<tr>
				<td><strong>Grand Total: </strong></td>
				<td><td><td><td><input type="text" style="color:black" value="<?php echo $grandTotal;?>" name="saleGT" readonly></td></td></td></td>
			</tr>   
			</tbody>
		</table>
	</font>	
	<button type="submit" style="margin-left:15%; width:10%;"class="btn btn-primary">Sale</button>
	<button type="button" style="margin-left:50%; width:10%;" onClick="Print()" class="btn btn-primary">Print</button>
</form>
</div>
</body>
</html>
<script>
	function Print(){
      window.print()
    }
</script>
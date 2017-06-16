<html>
<body>
Hello done
<table border="2" align="center">
<tr>
	<td>Staff type id</td>
	<td>Staff type</td>
</tr>
<?PHP
 //var_dump($data2->result());
	 foreach($customers as $row){
?>
<tr>
        <td> <?php echo $row->STAFF_TYPE_ID; ?> </td>
			<td> <?php echo $row->STAFFTYPE; ?> </td>
</tr>
<?php
}			
?>
</table>
</body>
</html>
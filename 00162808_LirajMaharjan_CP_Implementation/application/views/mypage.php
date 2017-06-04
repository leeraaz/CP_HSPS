<!DOCTYPE HTML>
<html>
<head>
<link href="<?php echo base_url();?>assets/CSS/style.css" rel="stylesheet">
<style>
h1{
	color:white;
}
</style>
</head>
<body>
<h1>Hardware Sales and Purchase System </h1>
<a href="<?php echo base_url();?>User/page2">Click</a> <!--base_url represents http://localhost/CI and after that it is the path for the folder -->
<!--<img src="<?php echo base_url(); ?>assets/Images/bhairab.jpg" height=25% width=25% /> -->

<form action="<?php echo base_url();?>User/saveData" method="POST">
<h2> Sign up </h2>
Username:<input type="text" name="uname" /> <br/><br/>
Password:<input type="password" name="pwd"/> <br/>
<input type="submit" value="Signup" />

<?php
if(isset($msg)) echo $msg;
?>
</form></br>
<table border="2" align="center">
<tr>
	<td>Username</td>
	<td>Password</td>
</tr>
<?PHP
 //var_dump($data2->result());
 if(isset($data2)){
 foreach($data2->result() as $userData){
	echo '<tr><td>'.$userData->username.'</td><td>'
					.$userData->password.'</td></tr>';
 }
 }
?>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head> 
<title>Registration Form</title>
<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
</head>
<script type="text/javascript">
	function val(){
		if(form.Password.value == ""){
			alert("Enter the password");
			return false;
		}
		if((form.Password.value).length <6){
			alert("Password should be minimum 6 character");
			return false;
		}
		if(form.rPassword.value == ""){
			alert("Enter the configuration password.");
			return false;
		}
		if(form.rPassword.value != form.Password.value){
			alert("Password didnot matched.");
			return false;
		}
		else{
		alert("Password match");
		header("refresh:2; url=registerForm.php");
		return false;
		}
	return true;
	}
</script>
<body>
	<div class="logo">
		<img src="dogPic/logo.jpg" width="150" height="150">
	</div>
	<font color="white">
		<div class="add2" align="center">
			<b><font size="20">Hardware Sales and Purchase System</font></b><br/>
			Teku, Kathmandu</br>
			Contact No. : +9771354685, +97765464564</br>
			PO Box No : 54535</br>
			<u>hardwareS&P@gmail.com</u></br></br>
		</div>
		<a href="<?php echo base_url();?>owner/mypage1">Go to home Page</a>
	</font>
	<form name="form" action="registerForm.php" method="POST">
	<div class="registerForm">
	<h1 align="center">Register Form</h1>
	
	<table>
		<tr>
			<td>First Name: </td>
			<td> <input type="text" name="Name" required="required"> </td> 
		</tr>	
		<tr>
			<td>Last Name: </td>
			<td> <input type="text" name="Name" required="required"> </td> 
		</tr>
		<tr>
			<td> Adress: </td>
			<td> <input type="text" name="Address" required="required"> </td>
		</tr>	
		<tr>
			<td> Gender: </td> 
			<td> 
				<input type="radio" name="Gender" value="Male" required="required"/> Male
				<input type="radio" name="Gender" value="Female" required="required"/> Female<br/>
				<input type="radio" name="Gender" value="Others" required="required"/>Others<br/>
			</td>
		</tr>
		<tr>
			<td> Contact No.: </td>
			<td> <input type="text" name="Contact" required="required"> </td>
		</tr>
		<tr>
			<td> Email: </td>
			<td> <input type="email" name="Email" required="required" placeholder="abc@gmail.com"> </td>
		</tr>	
		<tr>
			<td> Username: </td>
			<td> <input type="text" name="Username" required="required"> </td>
		</tr>
		<tr>
			<td> Password: </td>
			<td> <input type="password" name="Password" required="required"> </td>
		</tr>
		<tr>
			<td> Re-enter Password: </td>
			<td> <input type="password" name="rPassword" required="required"> </td>
			</tr>
		<tr>
			<td> <input type="submit" name="submit" onClick="return val();" value="Signup"> </td>
			<td> <a href="loginForm.php"> Login </a>
		</tr>
	</table>
</div>
</form>
<?php
	if(isset($_POST['submit'])){
			
		$cName = $_POST['Name'];
		$cAdd = $_POST['Address'];
		$cGender = $_POST['Gender'];
		$cContact = $_POST['Contact'];
		$cMail = $_POST['Email'];
		$cUser = $_POST['Username'];
		$cPwd = md5($_POST['Password']);
		$cPwdr = md5($_POST['rPassword']);
		
		$connect = mysqli_connect("localhost","root","","assignment");
		
		if(!mysqli_select_db($connect,'assignment')){
			echo "Database not selected";
		}
		
		$query = "insert into tbl_customer(Name,Address,Gender,Contact,Email,Username,Password,Configuration) 
				values('$cName','$cAdd','$cGender','$cContact','$cMail','$cUser','$cPwd','$cPwdr')";
		
		if(!mysqli_query($connect,$query)){
			echo "Not inserted";
		}
		else{
			echo "Value has been insert.";
		}
		mysqli_close($connect);
	}
?>
</body>
</html>

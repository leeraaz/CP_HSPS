<!DOCTYPE HTML>
<html>
<head> 
<title>Registration Form</title>
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<div class="up">
		<div class="logo">
			<img src="http://localhost/CI/assets/Images/login.jpg" width="30%" height="20%"/>
		</div>
		<div class="heading">
			<font color="pink">
				<h1><b>Hardware Sales and Purchases Shop<b/></h1>
			</font>
		</div>
	
		<div class="navigation">
			<a href="index.html"> HOME </a></li>
			<a href="index.html"> PIPE & FITTINGS</a>
			<a href="gallery.html"> GALLERY </a>
			<a href="services.php"> SERVICES </a>	
		</div>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<hr/>
	<font color="white" size="5px">
	<div class="registrationForm">
	<font size="6px">Register Form</font>
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
		<tr align="center">
			<td > <input type="submit" name="submit" onClick="return val();" value="Register"> </td>
		</tr>
	</table>
	</div>
	</font>

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

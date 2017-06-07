<!DOCTYPE html>
<html>
<head>
	<title>Hardware Sales and Purchases Shop</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
<script type="text/javascript">
	var image1=new Image()
	image1.src="<?php echo base_url();?>assets/Images/45bend.jpg"
	var image2=new Image()
	image2.src="<?php echo base_url();?>assets/Images/ballvalve.jpg"
	var image3=new Image()
	image3.src="<?php echo base_url();?>assets/Images/cpvc.jpg"
	var image4=new Image()
	image4.src="<?php echo base_url();?>assets/Images/cpvcsocket.jpg"
	var image5=new Image()
	image5.src="<?php echo base_url();?>assets/Images/cpvcunion.jpg"
	var image6=new Image()
	image6.src="<?php echo base_url();?>assets/Images/elbow.jpg"
	var image7=new Image()
	image7.src="<?php echo base_url();?>assets/Images/pipes.jpg"
	var image8=new Image()
	image8.src="<?php echo base_url();?>assets/Images/pipestack.jpg"
	var image9=new Image()
	image9.src="<?php echo base_url();?>assets/Images/pprtee.jpg"
	var image10=new Image()
	image10.src="<?php echo base_url();?>assets/Images/rsocket.jpg"
	var image11=new Image()
	image11.src="<?php echo base_url();?>assets/Images/union.jpg"
</script>
</head>
<body>
	<div class="up">
		<div class="logo">
			<img src="http://localhost/CI/assets/Images/logo.png" width="40%" height="30%"/>
		</div>
		<div class="heading">
			<font color="pink">
				<h1><b>Hardware Sales and Purchases Shop<b/></h1>
			</font>
		</div>
	
		<div class="navigation">
			<a href="<?php echo base_url();?>owner/homePage"> HOME </a></li>
			<a href="index.html"> PIPE & FITTINGS</a>
			<a href="gallery.html"> GALLERY </a>
			<a href="services.php"> SERVICES </a>	
		</div>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/>
	<hr/>
	<div class="imagePage">
		<div class="gallery">
			<img src="<?php echo base_url();?>assets/Images/cpvcpipe.jpg" name="slide" align="center" width="100%" heigh="8%">
			<script type="text/javascript">
			var step=1
			function slideit(){
				document.images.slide.src=eval("image"+step+".src")
				if(step<11)
				step++
				else
				step=1
				setTimeout("slideit()",2500)		
			}
			slideit()
			</script><br/>
			<font size="5px" color="white" align="left">
			Here are the some images of the hardware sales and purchases shop. The images shown here are the pipe & fittings that are 
			being sold by this shop. We deal with PPR pipe & fittings as well as CPVC pipe & fittings manufactured by Panchakanya Group.
			</font>
		</div>
	
		<div class="loginForm2">
			<font size="5px" color="white" align="center">
			<font size="6px"><b>Login Form </b></font><br/>
			<label>Username:</label>
			<input type="text" name="Username" required="required" />
			<br/>
			<label>Password:</label>
			<input type="password" name="Password" required="required" />	
			<br/>
			<input type="submit" name="submit" onClick="return val();" value="Login" />
			<br/>	
			<font size="5px" color="white" align="left">
				If you are new then, first get registered. <br>
				<a href="<?php echo base_url();?>owner/registrationPage	"> Here </a>
			</font>
		</div>
	</div>
	
	<font color="white">
			<div class="bottom2" align="center">
				Teku, Kathmandu</br>
				Contact No. : +97765464564<br/>
				PO Box No : 54535</br>
				<u>hardwareS&P@gmail.com</u></br></br>
			</div>
		</font>
</body>
</html>
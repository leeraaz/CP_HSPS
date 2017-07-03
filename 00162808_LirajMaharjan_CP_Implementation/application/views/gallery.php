<!DOCTYPE html>
<html>
<head>
<title> Hardware Sales and Purchases Shop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>assets/CSS/design.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/CSS/bootstrap.min.css" rel="stylesheet">
<style>
ul {
    list-style-type: none;
    margin-top: 0;
    padding: 0;
    overflow: hidden;
	width:60%;
}

li {
    float: left;
	height:35px;
	line-height:10px;
	color:white;
	margin:3px;
	margin-top:6%;
}

li a, .dropbtn {
    display: inline-block;
    color: #2c3e50;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #7f8c8d;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
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
<div id="up">
	<div id="logo">
		<img src="http://localhost/CI/assets/Images/logo.png" alt="Godown"width="60%" height="30%"/>
	</div>
	<div id="heading">
		<font color="#2c3e50">
			<h1><b>Hardware Sales and Purchases Shop<b/></h1>
		</font>
	</div>
	<div id="menu">
		<ul>
			<li><a href="<?php echo base_url();?>owner/homepage"> Home </a></li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Pipe and Fittings</a>
			<div class="dropdown-content">
			  <a href="<?php echo base_url();?>PipeAndFittings/PPR">PPR Pipe and fittings</a>
			  <a href="<?php echo base_url();?>PipeAndFittings/CPVC">CPVC Pipe and Fittings</a>
			</div>
			</li>
			<li><a href="<?php echo base_url();?>owner/gallery"> Gallery </a></li>	
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Online Services</a>
			<div class="dropdown-content">
			  <a href="<?php echo base_url();?>owner/cusLogin">Owner/Staff Login</a>
			  <a href="<?php echo base_url();?>owner/cusLogin">Customer Login</a>
			  <a href="<?php echo base_url();?>owner/cusRegistration">Customer Registration</a>
			</div>
		  </li>
		</ul>
	</div>
</div> 
	<hr/>
	<div class="imagePage">
		<div class="gallery">
			<img src="<?php echo base_url();?>assets/Images/cpvcpipe.jpg" class="image-reponsive" name="slide" align="center" width="100%" height="8%">
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
		</div>
		<font color="#2c3e50">
			<div class="bottom" align="center">
				Teku, Kathmandu</br>
				Contact No. : +97765464564<br/>
				PO Box No : 54535</br>
				<u>hardwareS&P@gmail.com</u></br></br>
			</div>
		</font>
	
</body>
</html>

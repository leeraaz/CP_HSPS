<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="iso-8859-1">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
 <div id="header"> <a href="<?php echo site_url('Home/dashboard')?> " id="logo"><img src="<?php echo base_url();?>assets/images/logo1.png" width="310" height="114" alt=""></a>
  <ul class="navigation">
 <li class="active"><a href="<?php echo site_url('Home/dashboard')?>" value="PLAY"  onclick="play()">Home</a></li>
    <li><a href="<?php echo site_url('Cart/selectProduct')?>"  value="PLAY"  onclick="play()">PetMart</a></li>
    <li><a href="<?php echo site_url('Home/petservice1')?>"  value="PLAY"  onclick="play()">PetService</a></li>
    <li><a href="<?php echo site_url('Home/petguide1')?>"  value="PLAY"  onclick="play()">PetGuide</a></li>
     <li><a href="<?php echo site_url('Home/about1')?>"  value="PLAY"  onclick="play()">About us</a></li>
    <li><a href="<?php echo site_url('Home/contact1')?>"  value="PLAY"  onclick="play()">Contact us</a></li>
    <li><a href="<?php echo site_url('User/selectProfile')?>"  value="PLAY"  onclick="play()"> Update info</a></li>

  </ul>
</div>


<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
  
  $(document).ready(function() {
    $('.ask').jConfirmAction();
  });
  
</script>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/reg.js"></script>
    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">

    <!-- Website Font style -->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='<?php echo base_url();?>assets/css/googlefonts.css' rel='stylesheet' type='text/css'>
    <link href='<?php echo base_url();?>assets/css/googefonts.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url();?>assets/css/payment.css' rel='stylesheet' type='text/css'>
   
    <script>function Print(){
      window.print()
    }
     </script>
<div class="regform"&emsp;&emsp;&emsp;>
	<div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
   <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
   
               
  <div class="container">
  <div class="row">
    
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
          <div class="receipt-header">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="receipt-left">
              <img class="img-responsive" alt="" src="<?php echo base_url()?>assets/images/dog2.jpg" style="width: 71px; border-radius: 43px;">
            </div>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 text-right">
            <div class="receipt-right">
              <h5>City Pet Service</h5>
              <p>+977 0949015821 <i class="fa fa-phone"></i></p>
              <p>Citypetservice@gmail.com <i class="fa fa-envelope-o"></i></p>
              <p>Nepal <i class="fa fa-location-arrow"></i></p>
               <div>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</div>
                <button class="btn btn-danger" onclick="Print()"> Print </button>
            </div>
          </div>
        </div>
            </div>
   
      <div class="row">
        <div class="receipt-header receipt-header-mid">
          <div class="col-xs-8 col-sm-8 col-md-8 text-left">
            <div class="receipt-right">
             
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="receipt-left">
              <h1>Receipt</h1>
            </div>
          </div>
        </div>
            </div>
      
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Quanitity</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $total_sum=0;
                foreach ($bill as $row){
                 $itemprice=$row['cost'];
                 $quantity=$row['quantity'];
                 $totalcost=$itemprice * $quantity;
                 $total_sum+=$totalcost;

               
               ?>
                        <tr>
                            <td class="col-md-9"><?php echo $row['item_name'];?></td>
                            <td class="col-md-9"><?php echo $row['quantity'];?></td>
                            <td class="col-md-3"><i class="fa fa-inr"></i> <?php echo $totalcost;?></td>
                        </tr>   
                        
                        <!-- Returning value from array -->
                        <tr>
                            <td class="text-right">
                           
           
                           </td>
                        </tr>        <?php
}
?>
                 
                        <tr>
                           
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> <?php echo $total_sum;?></strong></h2></td>
                        </tr>
                   </tbody>
                </table>
        
            </div>
      
      <div class="row">
        <div class="receipt-header receipt-header-mid receipt-footer">
          <div class="col-xs-8 col-sm-8 col-md-8 text-left">
            <div class="receipt-right">
              <p></p>
              <h5 style="color: rgb(140, 140, 140);">Thank you for your business!</h5>
            </div>
          </div>
          <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="receipt-left">
              <h1>Signature</h1>
              
            </div>
          </div>
        </div>
            </div>
     
        </div>    
  </div>
</div>
 
</div>


</body>
</html>

<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', TRUE);
  require_once 'config/auth.php'; ?>
<?php require_once 'includes/header.php';?>

<body onload="initicket_history()" id="get_token"> 

   
   <?php require_once 'includes/navigation.php';?>  
   <div class="w3-container fullHeight">
      <div class="w3-row" style="margin-top: 8%">
    <div class="w3-hide-large w3-hide-medium" style="height: 50px;"> </div>
      <!-- sliderimage-->
    <div class="w3-row ">
        <div class="w3-col s12 m12 l12" id="wallet_point">
        
    <div class="w3-container w3-content w3-card-4 w3-padding w3-row-padding" style="max-width:600px" id="ticket_history">
    <!--
    <table class="w3-table w3-bordered" style="width:100%">
        <tr>
          <h4 style="border-bottom: 0px !important">Ticket Status</h4>
        </tr>
        <tr>
          <td><span style="font-size: 18px">Ticket ID: 123456</span> <br /> <span style="color: red">25 Dec 2018</span></td>
          <td><span style="font-size: 18px">Transaction Problem</span> <br /> <span style="color: #fff">Pending</span></td>
        </tr>
        
      </table>-->
    
   </div>   
  <!-- <div class="w3-col s3 m3 l3">&nbsp;</div> -->       
       </div>
 
   </div>
   <!-- !slider----->
   
   
 </div>
</div>     
    <!-- Kids Container---->
    
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
<?php require_once 'includes/footer.php';?>


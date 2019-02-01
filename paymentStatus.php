<?php  require_once 'config/auth.php'; ?>
<?php if(empty($_SESSION['user_id'])){ header("Location:index.php");}?>
<?php require_once 'includes/header.php';
  $_SESSION['paystatus']='OK';
$orderidByGatway=isset($_GET['orderID'])?$_GET['orderID']:'';
if(empty($orderidByGatway)){ header("Location:myaccount");}
?>
 <style type="text/css">
     #load {
    opacity:1;
    width: 80%;
    height: 70%;
    position: fixed;
    z-index: 9999;
    color: red;
    background: transparent url("<?php echo $baseUrl; ?>/images/icons/spinner1.gif") no-repeat center;
   }
</style>
<script type="text/javascript"> var orderIDgetFromUrl="<?php echo $orderidByGatway; ?>";</script>
<body onload="initFinalResponseFromPayment('<?php echo $orderidByGatway;?>')" id="get_token">
<?php require_once 'includes/navigation.php';?> 
   
    <div class="w3-seprator-top"></div> <!-- 60px top-->
    
    <div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="<?php echo $baseUrl?>">HOME</a> / </li><li><li><a class="last">Success</a></li></ol>
        </div>    
  </div>
    
     <div class="w3-seprator"></div> <!-- 20px margin-->
     
     <div class="w3-row fullHeight">
         <div class="main-container w3-row-padding" style="min-height: 200px;">
            <div id="load" style="display:none;"></div>
         <div class="w3-col darkBg" style="min-height: 200px !important;" id="getPaymentInfo" >
                  <h3 align="center">
                      Your Order ID # <br><span style='color:#ddffff' id="SetOrderID"></span>  is 
                      <br>
                      <span style='color:#4CAF50' id="SetOrderMsg"></span> 
                      <br><span style='color:#4CAF50' id="SetAmount"></span>
                  </h3>
                   <div class="w3-col s12" align="center" >
                    Payment Reference no: <span id="SetTransactionID"></span> <br> You may use this number for any future communication.
                       
                   </div>
             <p style="margin-top: 60px;"></p>
             </div>    
            
        </div>
         
     </div>
     
     
     
     
     <div class="w3-seprator"></div>
   <div class="w3-seprator"></div>
    <div class="w3-seprator"></div>
  

<?php require_once 'includes/footer.php';?>

    <style>
        .last{font-size: 15px;  }
        #Search-data .w3-col{padding-top: 10px;padding-right: 5px;}
        </style>


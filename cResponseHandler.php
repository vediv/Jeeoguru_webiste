<?php  require_once 'config/auth.php'; ?>
<?php if(empty($_SESSION['user_id'])){   header("Location:index.php");}?>
<?php require_once 'includes/header.php';?>
<?php include('Crypto.php')?>
<?php 
if($_SESSION['paystatus']=='OK'){   header("Location:$baseUrl/myaccount");}

error_reporting(0);
$workingKey='E430BD5BD654BA6BC74A5DD8521A5520';	//Working Key should be provided here.
$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
$rcvdString=decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
$order_status="";
$decryptValues=explode('&', $rcvdString);
$dataSize=sizeof($decryptValues);
$msg='';
for($i = 0; $i < $dataSize; $i++) 
{
        $information=explode('=',$decryptValues[$i]);
        if($i==3)	$order_status=$information[1];
}

//$ordMsg= "Your Order ID # <BR> <span style='color:#ddffff'>$orid </span>is <br> $ordString .";
//$amtMsg= "<br>Amount : $am "; $refMsg= "Payment Reference no: $rfno <br> You may use this number for any future communication.";
$planidReq=$_REQUEST['planid'];
$planDays=$_REQUEST['days'];
   
?>
<body onload="<?php if($order_status==''){ ?>getMenu()<?php } else{?> initResposeForCcavenue('planid','days','tr_id','order_status','status_msg','payment_mode','currency','amount','order_id','trans_date')<?php } ?>" id="get_token">
<?php

require_once 'includes/navigation.php';?> 
    
    <div class="w3-seprator-top"></div> <!-- 60px top-->
<!--<body onload="initResposeForCcavenue('planid','days','tr_id','order_status','status_msg','payment_mode','currency','amount','order_id','trans_date')" id="get_token">-->   
    <!--<div class="w3-row darkBar">
        <div class="main-container w3-row-padding ">
            <ol class="w3-breadcrumb"><li><a href="<?php echo $baseUrl?>">HOME</a> / </li><li><li><a class="last">Success</a></li></ol>
        </div>    
  </div>-->
    
     <div class="w3-seprator"></div> <!-- 20px margin-->
     
     <div class="w3-row fullHeight">
         <div class="main-container w3-row-padding" style="min-height: 200px;">
             <div class="w3-col darkBg " >
                 <h3 align="center">
                     <?php 
                     $flag=0;
                     if($order_status==="Success")
                        {  
                            $flag=1;
                        }
                        else if($order_status==="Aborted" || $order_status==="Failure")
                        {
                                $flag=1;

                        }
                        else
                        {
                                echo $ordString="Security Error. Illegal access detected";
                          

                        }
                        ?>
                 </h3>
                 <?php if($flag==1){ ?>
                 <div class="w3-col s12 m8 l8  justify" style="display:none">
                   <?php 
                    $oid=explode('=',$decryptValues[0]); $orid= $oid[1];  
                    $tid=explode('=',$decryptValues[1]); $rfno=  $tid[1]; 
                    $amount=explode('=',$decryptValues[10]); $amt= $amount[1]; 
                    $order_msg_get=explode('=',$decryptValues[8]);$order_msg=$order_msg_get[1];
                    $paymod_get=explode('=',$decryptValues[5]);$paymod=$paymod_get[1];
                    $currency_get=explode('=',$decryptValues[9]);$currency=$currency_get[1];
                    $trans_date_get=explode('=',$decryptValues[40]);$trans_date=$trans_date_get[1];
                    ?>
                   <input type="text" id="planid" value="<?php echo $planidReq; ?>" />
                   <input type="text" id="days" value="<?php echo $planDays; ?>" /> 
                   <input type="text" id="tr_id" value="<?php echo $rfno; ?>" />
                   <input type="text" id="order_status" value="<?php echo $order_status; ?>" />
                   <input type="text" id="status_msg" value="<?php echo $order_msg; ?>" />
                   <input type="text" id="payment_mode" value="<?php echo $paymod; ?>" />
                   <input type="text" id="currency" value="<?php echo $currency; ?>" />
                   <input type="text" id="amount" value="<?php echo $amt; ?>" />
                   <input type="text" id="order_id" value="<?php echo $orid; ?>" />
                   <input type="text" id="trans_date" value="<?php echo $trans_date; ?>" />
                   </div>
                 <?php } ?>
                 
                 
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

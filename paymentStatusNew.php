<?php
require_once 'config/auth.php';
$orderId = (isset($_GET['orderid']))? $_GET['orderid']:'';
?>
<!DOCTYPE html>
<html>
<head>
<title>biocine | status</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://apis.google.com/js/platform.js" async defer></script> 
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="http://biocine.planetcast.in/layouts/font-awesome/css/font-awesome.css"/>
<style type="text/css">
        @media (min-width:200px) and (max-width:760px) 
  {  .font8{font-size:8px !important;}  .font10{font-size:10px !important;} 
  }
</style>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
(function (global) {

	if(typeof (global) === "undefined")
	{
		throw new Error("window is undefined");
	}

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

		// making sure we have the fruit available for juice....
		// 50 milliseconds for just once do not cost much (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };
	
	// Earlier we had setInerval here....
    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {
        
		noBackPlease();

		// disables backspace on page except on input fields and textarea..
		document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // stopping event bubbling up the DOM tree..
            e.stopPropagation();
        };
		
    };

})(window);
</script>
</head> 
<body  id="get_token" style=" background: #283949; color: #38cef8;" >
        <div class="w3-top header w3-center w3-padding-8" style="margin-bottom: 20px; position:absolute;">
        <a href="http://www.jeeoguru.com/" class=""><img src="http://cdnbiocine.planetcast.in/biocine/images/logo_header_lg.png" height="85"></a>
        <span id="notification-sm" class="w3-text-shadow"></span></div>  
        <!--<textarea rows="4" cols="50" name="responseDataFromCCavenue" id="responseDataFromCCavenue"><?php echo $rcvdString;  ?></textarea>-->
<div id="responseDataFromCCavenue" style="display:none"><?php echo $rcvdString;  ?></div>
<div class="w3-row ">
    <div class="main-container w3-row-padding  ">
        <div class="w3-col s12 m12 l12 card-holder  w3-center w3-row-padding darkBg card-holder " id="">  
            <div  class="w3-col s12 m3 l3">&nbsp;</div>
            <div  class="w3-col s12 m6 l6">
            <div  class=" w3-center"  style="margin-top: 100px" id="img_success">
             <!--<img src="<?php echo $baseUrl;?>/images/icons/if_sign.png" class="" style="width:15%" >-->
            </div>

          <p class="font10 w3-text-red" id="full_msg"> Your Transaction  has been processed <span id="text_msg"></span></p>
          <table class="w3-bordered w3-table w3-text-white w3-black1 w3-center w3-padding-24 font10"  style="width:100%; background-color: #000000;">
                        <tr>
                          <th  style="padding:14px 10px !important" class="">Order ID #</th>
                          <td style="padding:14px  !important" class="" id="orid"></td> 
                        </tr>
                        <tr >
                          <th style="padding:14px 10px !important" class="font-size14 font-size">Transaction ID #</th>
                          <td style="padding:14px !important" class="font-size14 font-size" id="transid"></td> 
                        </tr>
                         <tr>
                          <th style="padding:14px 10px !important" class="font-size14 font-size">Amount</th>
                          <td style="padding:14px  !important" class="font-size14 font-size" id="amount"></td> 
                        </tr> 
                        <tr>
                          <th style="padding:14px 10px !important" class="font-size14 font-size">Point Used</th>
                          <td style="padding:14px  !important" class="font-size14 font-size" id="point_used" ></td> 
                        </tr>
                        <tr>
                          <th style="padding:14px 10px !important" class="font-size14 font-size">Discount</th>
                          <td style="padding:14px  !important" class="font-size14 font-size" id="discount"></td> 
                        </tr>
                         <tr>
                          <th style="padding:14px 10px !important" class="font-size14 font-size">Plan Details</th>
                          <td style="padding:14px  !important" class="font-size14 font-size" id="planDetail"></td> 
                        </tr>
                         <tr>
                          <th style="padding:14px 10px !important" class="font-size14 font-size">Transaction Date</th>
                          <td style="padding:14px  !important" class="font-size14 font-size" id="transDate"></td> 
                        </tr>
                      </table>
                      <div  class="w3-col s12 m3 l3">&nbsp;</div>
                        <div class="w3-col s12 font10" align="center">
Payment Transaction ID: <span id="transidn">  </span><br> You may use this number for any future communication.
</div>
                      </div>
        </div> 
    </div>
                                                    </div>

<script language='javascript'>
var orderId="<?php echo $orderId;  ?>";
//var baseUrl="<?php echo $baseUrl;?>";
GetPaymentStatus(orderId);
function GetPaymentStatus(resData)
{
   var apiBody = new FormData();
   apiBody.append("orderid",orderId);
   apiBody.append("partnerid",'ott503');
   $.ajax({
                url:'http://ott.planetcast.in:6086/orderstatus',
                method: 'POST',
                //data:'msg='+resData,
                data:apiBody,
                //dataType: 'json',
                processData: false,
                contentType: false,
                success: function(JSONresponse){
                var JSONobject = JSON.parse(JSONresponse);
                var rr=JSONobject.Result;
                if(rr!='')
                {
                   var result=JSONobject.Result[0];
                   var orderid=result.orderid;
                   var coupon_discount=result.coupon_discount;
                   var payment_for=result.payment_for;
                   var amount=result.amount;
                   var order_status=result.order_status;
                   
                   var wallet_point=result.wallet_point;
                   var trans_id=result.trans_id;
                   var plan_name=result.plan_name;
                   var trans_date=result.trans_date;
                     
                   $("#orid").html(orderid); 
                   $("#transid").html(trans_id);
                   $("#transidn").html(trans_id);
                   $("#amount").html(amount);
                   
                   if(wallet_point==''|| wallet_point==null){$("#point_used").html('0');}
                   else {$("#point_used").html(wallet_point);}
                   
                   if(coupon_discount==''|| coupon_discount==null ){$("#discount").html('0');}
                   else {$("#discount").html(coupon_discount);}
                    if(order_status=='Success'){
                    var imgsuccess='<img src="http://cdnbiocine.planetcast.in/biocine/images/icons/if_sign.png" class="" style="width:15%" >';
                    $("#img_success").html(imgsuccess);
                     var text_msg="successfully";
                     $("#text_msg").html(text_msg);
                    }
                   else{
                   	var imgsuccess='<img src="http://cdnbiocine.planetcast.in/biocine/images/icons/cancel.png" class="" style="width:15%" >';
                    $("#img_success").html(imgsuccess);
                    var text_msg="failed";
                     $("#text_msg").html(text_msg);
                    
                   }
                   $("#planDetail").html(plan_name);
                   //$("#transDate").html(trans_date);
                   if(trans_date==''|| trans_date=='null' ){$("#transDate").html('0');}
                   else {$("#transDate").html(trans_date);}
                } 
                else{
                	var full_msg=" your payment transcation is waiting for response";
                     $("#full_msg").html(full_msg);
                     var imgsuccess='<img src="http://cdnbiocine.planetcast.in/biocine/images/icons/cancel.png" class="" style="width:15%" >';
                    $("#img_success").html(imgsuccess);
                }
                
                
                   
                
            }
    });
}
</script>			    
</body>
</html>
<?php 
require_once 'config/auth.php'; 
?>
<html>
<head>
<title><?php getTitle();?></title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body style="background-color:#e0e0e0;  color:#000;">
<style type="text/css">
.mydiv{ text-transform: capitalize;    position: absolute;      top: 33%; padding:1px 10px; left:9%;font-size: 2.5rem;}
 .spinner{margin-top:1px !important; height:95px !important;    } 
 @media (max-width: 601px){.font-size14{
    font-size: 1.5rem;  
}
.mydiv{ text-transform: capitalize;    position: absolute;      top: 33%; padding:1px 10px; left:0%;}
 }
</style>
<center>
<div id="loader"></div>
<?php 
$msg=isset($_POST['msg'])?$_POST['msg']:'';
sleep(1);
//print_r($msg);
//exit;
?>
</center>

<div class="w3-container">
<div class="w3-row">
		  
  <div class="w3-col m1 w3-center">&nbsp;</div>
  <div class="w3-col m10 w3-center mydiv" id="loader">
  <p class="font-size14"> please dont refresh page or leave this page or back button until your process  complete</p> <img src="http://cdnbiocine.planetcast.in/biocine/images/icons/fluid-loader.gif" class="spinner" />

  </div>
  <div class="w3-col m1  w3-center">&nbsp;</div>
 
		
	</div>
</div>



<script language='javascript'>
var msg="<?php echo $msg  ?>";
//alert(msg);
resSendData(msg);
function resSendData(resData)
{
   //$("#loader").show();
   //$("#loader").fadeIn(500).html('<p class="font-size14"> please dont refresh page or leave this page or back button until your process  complete</p> <img src="http://cdnbiocine.planetcast.in/biocine/images/icons/fluid-loader.gif" class="spinner" />');
   var apiBody = new FormData();
   apiBody.append("msg",resData);
   $.ajax({
                url:'http://ott.planetcast.in:6086/responsebsavedata',
                method: 'POST',
                //data:'msg='+resData,
                data:apiBody,
                //dataType: 'json',
                processData: false,
                contentType: false,
                success: function(JSONresponse){
                var JSONobject = JSON.parse(JSONresponse);
                var result= JSONobject.result; 
                var orderid= JSONobject.orderid; 
                setTimeout(function() { window.location="status/"+orderid; }, 2000);
            }
    });
}
</script>

</body>
</html>

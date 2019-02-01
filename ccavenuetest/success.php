<?php 
session_start();
$regis_number= isset($_GET['regNumber']) ? $_GET['regNumber'] : '';
$regID= isset($_GET['order_id']) ? $_GET['order_id'] : '';
$tracking_id= isset($_GET['tracking_id']) ? $_GET['tracking_id'] : '';
$order_status= isset($_GET['order_status']) ? $_GET['order_status'] : '';
//location:success.php?order_id=$order_id&tracking_id=$tracking_id&order_status=$order_status

if($order_status==="Success")
	{
	    $msg= "<br>Thank you Your Payment is successfully Done.";
		
	}
	else if($order_status==="Aborted")
	{
		$msg="<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
		$msg= "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		$msg="<br>Security Error. Illegal access detected";
	
	}
$in="insert into payment(regID,tracking_id,order_status,trans_date)values('$regID','$tracking_id','$order_status',NOW())";
$rr=db_query($in);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
</head>
<body>
    <!-- Navigation -->
    <?php //include_once("header.php"); ?>
	<!-- Page Content -->
    <div class="container">
        <div class="row">
            </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row" style="margin-top: 20px;">
       <div class="col-lg-12">
<form method="post">
<table class="table table-striped" border="0" >
<tbody>
<tr>
<td colspan="4">
<p><strong><h3>
<?php echo $msg; ?>
</h3></strong></p>


</td>   
</tr>
	      	
       
	

    
    
    
    
    
    
 
              
       </form>       
             </div>
        </div>
        <!-- /.row -->

        
    </div>
    <!-- /.container -->

    <!-- jQuery -->

</body>

</html>

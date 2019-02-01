<?php 
session_start();
//$registration_number=isset($_SESSION['registration_number']) ? $_SESSION['registration_number'] : '';
//$regis_number= isset($_GET['regNumber']) ? $_GET['regNumber'] : '';
$regis_number=123456;
$merchant_id="90462";
$pay_order_id=$regis_number;
$pay_total_amt=10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CC Avenue TEST</title>
    
</head>
<body>
    <!-- Navigation -->
    
	<!-- Page Content -->
    <div class="container">
        
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row" style="margin-top: 20px;">
       <div class="col-lg-12">
<form method="post" name="customerData" action="ccavRequestHandler.php">
<table class="table table-striped" border="0" >
<tbody>
<tr>
<td colspan="4">
<p><strong><h3>Your Detail</h3></strong></p>
</td>   
</tr>

<table width="40%" height="100" border='1' align="center" >			
<tr>
        <td colspan="2"> Compulsory information</td>
</tr>
<tr>
    <td>Merchant Id	:</td><td><input type="text" readonly  name="merchant_id" value="<?php echo $merchant_id; ?>"/></td>
</tr>
<tr>
        <td>Order Id	:</td><td><input type="text" readonly name="order_id" value="<?php echo $pay_order_id; ?>"/></td>
</tr>
<tr>
        <td>Amount	:</td><td><input type="text" readonly  name="amount" value="<?php echo $pay_total_amt; ?>"/></td>
</tr>
<tr>
        <td>Currency	:</td><td><input type="text" readonly name="currency" value="INR"/></td>
</tr>
<tr>
        <td>Redirect URL :</td><td><input type="text"  name="redirect_url" size="50" value="https://www.planetcast.in/success.php" /></td>
</tr>
<tr>
        <td>Cancel URL	:</td><td><input type="text" name="cancel_url" size="50" value="https://www.planetcast.in/cancel.php" /></td>
</tr>
<tr>
        <td>Language	:</td><td><input type="text" readonly name="language" value="EN"/></td>
</tr>
</table>
	      	
       
	

    
    
    
    
    
    
<td colspan="" >
     <p align="right">
<button type="submit" class="btn btn-info" >Pay Now</button> </p>
     </td>   
        </tr>
 
</tbody>
</table>	
 
              
       </form>       
             </div>
        </div>
        <!-- /.row -->

        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
</body>

</html>

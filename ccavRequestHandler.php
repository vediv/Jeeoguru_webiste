<?php  require_once 'config/auth.php'; ?>
<html>
<head>
<title><?php getTitle();?></title>
</head>
<body>
<center>

<?php include('Crypto.php')?>
<?php 
        error_reporting(0);
	$merchant_data='';
        $merchant_id=90462;
	$working_key='E430BD5BD654BA6BC74A5DD8521A5520';//Shared by CCAVENUES
	$access_code='AVOG00DE42BQ13GOQB';//Shared by CCAVENUES
	$milliseconds = round(microtime(true));
        $pin = '';
        $a = "0123456789abcdefghijklmnopqrstuvwxyz";
        $b = str_split($a);
        for ($i=1; $i <= 5 ; $i++) { 
        $pin .= $b[rand(0,strlen($a)-1)];
        }
        $order_id="w".$milliseconds.$pin; //w1517555752n54zt
        foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
        $merchant_data.='merchant_id='.$merchant_id.'&';
        $merchant_data.='order_id='.$order_id.'&';
	    $encrypted_data=encrypt($merchant_data,$working_key); //Method for encrypting the data.

?>
<!--<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">-->
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>


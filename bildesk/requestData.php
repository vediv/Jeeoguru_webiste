<?php  //require_once 'config/auth.php'; ?>
<html>
<head>
<title><?php //getTitle();?></title>
</head>
<body>
<center>
<?php 
//MerchantID|CustomerID|NA|TxnAmount|NA|NA|NA|CurrencyType|NA|TypeField1|SecurityID|NA|NA|TypeField2|Additionalinfo1|Additionalinfo2|Additionalinfo3|Additionalinfo4|NA|NA|
//NA|RU

        // error_reporting(0);
	$MerchantID='PLANETC';
        $CustomerID='w1517555752n54zt';
        $TxnAmount='2';
        $CurrencyType='INR';
        $newData = "$MerchantID|$CustomerID|NA|$TxnAmount|NA|NA|NA|$CurrencyType|NA|R|planetc|NA|NA|F|1234567890|NA|123467890|123456789|NA|NA|NA|http://www.jeeoguru.com/bildesk/success.php";
        /*$checkSumKey = '123456789' ; 
        $newDataWithChecksumKey = $newData."|".$checkSumKey;
        $checksum = crc32($newDataWithChecksumKey);
        $dataWithCheckSumValue = $newData."|".$checksum;
        $msg = $dataWithCheckSumValue*/
        $checksum = hash_hmac('sha256',$newData,'c8tXLHQAB8Oh', false);
        $checksum = strtoupper($checksum);
        $dataWithCheckSumValue = $newData."|".$checksum;
        $msg = $dataWithCheckSumValue;
        
        //$checksum;
        /*$merchant_data='';
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
        */
?>
<form method="post" name="redirect" action="https://pgi.billdesk.com/pgidsk/PGIMerchantPayment">
<?php
echo "<input type=hidden name=msg value=$msg>";
//echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>


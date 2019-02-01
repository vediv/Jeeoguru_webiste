<html>
<head>
<title>test by santosh</title>
</head>
<body>
<center>
<?php include('Crypto.php')?>
<?php 

	error_reporting(0);
	
	$merchant_data='';
	$working_key='4727CD02185D628B65987F7641E3803C';//Shared by CCAVENUES
	$access_code='AVAP75FA84CI78PAIC';//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
//https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction //test url
//https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction //main url
?>
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


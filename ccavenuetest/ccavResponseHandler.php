<?php include('Crypto.php')?>
<?php

	error_reporting(0);
	$workingKey='7DEE68A5979405DF46FC968553554EC1';	 //Working Key should be provided here.
	$encResponse=$_POST["encResp"];			//This is the response sent by the CCAvenue Server
	$rcvdString=decrypt($encResponse,$workingKey);	//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);
	echo "<center>";

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==3) $order_status=$information[1];
                if($i==0) $order_id=$information[1];
                if($i==1) $tracking_id=$information[1];
               
                        
	}

	if($order_status==="Success")
	{
	    header("location:success.php?order_id=$order_id&tracking_id=$tracking_id&order_status=$order_status");
            echo "<br>Thank you for shopping with us. Your credit card has been charged and your transaction is successful. We will be shipping your order to you soon.";
		
	}
	else if($order_status==="Aborted")
	{
                header("location:success.php?order_id=$order_id&tracking_id=$tracking_id&order_status=$order_status");
		echo "<br>Thank you for shopping with us.We will keep you posted regarding the status of your order through e-mail";
	
	}
	else if($order_status==="Failure")
	{
	     header("location:success.php?order_id=$order_id&tracking_id=$tracking_id&order_status=$order_status");	
             echo "<br>Thank you for shopping with us.However,the transaction has been declined.";
	}
	else
	{
		echo "<br>Security Error. Illegal access detected";
	
	}

	echo "<br><br>";

	echo "<table cellspacing=4 cellpadding=4>";
	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
	    	echo '<tr><td>'.$information[0].'</td><td>'.urldecode($information[1]).'</td></tr>';
	}

	echo "</table><br>";
	echo "</center>";
?>

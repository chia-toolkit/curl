<?php

$pdata=array('wallet_id' => "1",'amount' => 1,'address' => 0,'fee' => 0);

					
					$pdata['address']="xch1n92we22h9leh9u69ps0uv3frqg2axeah0wcksv4z6qynjlcrgxds59qnag";
					//$pdata['amount']=$forfree;
$postfields="send_transaction";

					$url="https://localhost/".$postfields;



					 $postData = json_encode($pdata);
            
            
        
       
							$ch = curl_init();
						$params[CURLOPT_URL] = $url;   
						$params[CURLOPT_HEADER] = false; 
						$params[CURLOPT_RETURNTRANSFER] = true; 
						$params[CURLOPT_FOLLOWLOCATION] = true; 
						$params[CURLOPT_POST] = true;
						$params[CURLOPT_PORT] = 9256;
						$params[CURLOPT_POSTFIELDS] = $postData;
						$params[CURLOPT_SSL_VERIFYPEER] = false;
						 $params[CURLOPT_SSL_VERIFYHOST] = false;

							$params[CURLOPT_SSLCERTTYPE] = 'PEM';
							$params[CURLOPT_SSLCERT] = 'pcrt.pem';
						$params[CURLOPT_SSLKEYTYPE] = 'PEM';
						$params[CURLOPT_SSLKEY] = 'pkey.pem';


     curl_setopt_array($ch, $params); 
     $content = curl_exec($ch); 
	$output = curl_getinfo($ch);
     curl_close($ch);



//echo $content;

//print_r(json_decode($content, true));

//print_r($output);

$total=json_decode($content, true);

echo $total['transaction_id'];


?>
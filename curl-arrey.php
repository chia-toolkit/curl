<?php

$postfields="get_blockchain_state";

$url="https://localhost/".$postfields;



  $postData = json_encode($postfields);
            
            
            
        
       
						$ch = curl_init();
						$params[CURLOPT_URL] = $url;   
						$params[CURLOPT_HEADER] = false; 
						$params[CURLOPT_RETURNTRANSFER] = true; 
						$params[CURLOPT_FOLLOWLOCATION] = true; 
						$params[CURLOPT_POST] = true;
						$params[CURLOPT_PORT] = 8555;
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

echo $total['blockchain_state']['difficulty'];


?>
<?php

$valueo=array("2"=>-1000,"1"=>1000000000);


//offer

$pdata=array('offer' => $valueo);


$postfields="create_offer_for_ids";



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

//echo $key." ".$total['valid']."<br>";

print_r($total);

echo $total['offer'];

?>

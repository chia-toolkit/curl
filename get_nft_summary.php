<?php

$file_path="a.offer";

$str=file_get_contents($file_path);

$str=preg_replace("/[\W]/", "", $str);

$arr=explode('offer',$str); 


$valueo="offer".$arr[1];



//echo $str;

//offer

$pdata=array('offer' => $valueo);

//$postfields="get_offer_summary";

$postfields="check_offer_validity";



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
     //curl_close($ch);



//echo $content;

//print_r(json_decode($content, true));

//print_r($output);

$total=json_decode($content, true);

//echo $key." ".$total['valid']."<br>";

//print_r($total);



echo $total["valid"];



if($total['valid']=="1"){

		$postfields="get_offer_summary";
		$url="https://localhost/".$postfields;
		$params[CURLOPT_URL] = $url; 
		curl_setopt_array($ch, $params); 
		$content = curl_exec($ch);

		curl_close($ch);
		

		$total=json_decode($content, true);

		echo "<br><br>";

		print_r($total);

		$dkey=array_keys($total["summary"]["offered"]);

		//echo $dkey[0];
		}

		//echo "<br><br>";

		$mkey=array_keys($total["summary"]["infos"]);
			
		//echo $mkey[0];

		$findimg=$total["summary"]["infos"][$mkey[0]]["also"]["metadata"];

		preg_match_all('/\((.*?)\)/', $findimg, $matches);

		//print_r($matches);

		//echo $matches[0][0];



		



 foreach($matches[0] as $qq){
		

	  

	   if(stristr($qq,"117") == true){
		   
		   preg_match_all('/\"(.*?)\"/', $qq, $matcheq);
		   
		   
		    foreach($matcheq[0] as $ww){
			
			if(stristr($ww,"https") == true){ $imgdata=$ww;}
			
			}
		   
		  
		   
		   
		   }



	   if(stristr($qq,"28021") == true){
	   
	   
				   preg_match_all('/\"(.*?)\"/', $qq, $matcheq);
		   
		   
		    foreach($matcheq[0] as $ww){
			
			if(stristr($ww,"https") == true){ $mdata=$ww;}
			
			}
		   
	   
	   
			}




		 }



echo "Metadata:".$mdata;

$mdata=str_replace('"','',$mdata);

$ndata=file_get_contents($mdata);

$total=json_decode($ndata, true);

//print_r($total);

echo "<br><br>Name:";

echo $total["name"];

echo "<br><br>";

echo "<img src=".$imgdata."><br><br>IMG:".$imgdata;

	
?>
<?php


$comm="a";



	
	
	$evfile="event/".$comm.".txt";

	$revdata=file_get_contents($evfile);

			//check offer

			$pdata=array('offer' => $revdata);

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
	
						



						//echo $content;

						//print_r(json_decode($content, true));

						

						$total=json_decode($content, true);

						

						if(!$total['valid']){

				
						$luckrand=rand(1,100);
						$lucknum=-2000;


						if($luckrand<5){$lucknum=-10000;}
						if($luckrand<10){$lucknum=-7000;}
						if($luckrand<30){$lucknum=-5000;}
						if($luckrand<50){$lucknum=-3000;}

						$newoffer=array("2"=>$lucknum,"1"=>1000000000);
						$postfields="create_offer_for_ids";
						$pdata=array('offer' => $newoffer);
						$postData = json_encode($pdata);
						$url="https://localhost/".$postfields;
						$params[CURLOPT_URL] = $url;
						$params[CURLOPT_POSTFIELDS] = $postData;
						curl_setopt_array($ch, $params); 
						$content = curl_exec($ch); 
						curl_close($ch);

						$total=json_decode($content, true);

						
						
									if($total['offer']!="")
							
										{

										file_put_contents($evfile,$total['offer']);

										$evdatab=$total['offer'];}

							}
							else{file_put_contents($evfile,"");}
						    
							

						}else
							
						{$evdatab=$revdata;}

     
	
			
	
	echo $evdatab;
	
	
?>

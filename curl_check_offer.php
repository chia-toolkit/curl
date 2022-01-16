<?php

$pdata=array('offer' => "offer1qqp83w76wzru6cmqvpsxygqqwc7hynr6hum6e0mnf72sn7uvvkpt68eyumkhelprk0adeg42nlelk2mpafrgx923m0l47ypry0suk97ad5kl77a0ax8k80pxd7f0l8egzhllyu03paku0jmxvu2gzjsvc47dv9ema7a34dvz548upthm56ckqna77w7mg9ch7dxxalzmdyuwzlcmcw9jkjc9rrq0dlzaceazmwjqg0630gu4tdtcrjud4pvlwdjujv7n3hlj2rkmnw67hvtk79re4f0hh6y70hv6wgehwm57423lj4kfy9snn6a6uux4pj934sa5c0sz3cj6x5g3vjar45gagfpsmgdpjmvd3jmyv3jmy0cf9yrw45ghpvdh5r5daqdyw60jh96hakvtgczzttruyavwm2xfcvl5cjnj7tzc0w3lhnsa4zede2dhr6rnm432hswhkeutjf92j96njp8kyn8uu8utq84dplhz2nem5xzjsu3p87w8h4tqsvm6ezftlnl88554ezw6w7qhhzaxm8n4dmgcrqzt0aekak5xm2yumw9e2plw50ll0htckcl0fmull65uc7p0437s6gpkc6qr53klylcp59nvalmxcm6gfluy6kqscpg6zath6s53fx40h6xf77e7xmmcnrlxfk6azac8pvmpu50ddezm0vl0jn8umlxwjmqg234q7mp2ensk2lewzth87h6mwkrv4ec0c768f4k7tju89j2l2000me2tjnadvskjullst448lmmmu0r5kpketrumdm3pmwulm0ddhx44zgetv99mdkequjvstmchlqff6lxfmwwp8w9kahzakzf5l3kthmkmtsn24xvztmvh2fllumawfrmlmhayanv0ql6pmkrfw3mc7ml74z2ukljw9h7jt2su7djfg42cddk46wa7e8tjtu4uvq8dyt2de79lspgg8cmlxwctt52qj3guzz0j2au24cnrp70emdmj7863x6c78tl9y24mhgh8aahadhx0xdr2ueqg6qs9c02wqcxxdwfs9q4hndlhm8t4732jvcafdkvvwryd7l0xnac7q6kf792ahvjlvsxcnsamap76ag8p6nd5eln66d4f0m68k4ay2nl7wwh7jjmtmzfm6kv3uf06ve8ppwg5vxfaqlzh0r4hrvl23vf2ws56gk0fe7qc6yrsqn02tevqe5u9mf");

$postfields="check_offer_validity";



$url="https://localhost/".$postfields;



            $postData = json_encode($pdata);
            
            
        
       
						$ch = curl_init();
						$params[CURLOPT_URL] = $url;   
						$params[CURLOPT_HEADER] = false; 
						$params[CURLOPT_RETURNTRANSFER] = true; 
						$params[CURLOPT_FOLLOWLOCATION] = true; 
						$params[CURLOPT_POST] = true;
						$params[CURLOPT_PORT] = 9257;
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

print_r(json_decode($content, true));

//print_r($output);

//$total=json_decode($content, true);

//echo $total['wallet_balance']['spendable_balance'];



?>
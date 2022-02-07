<?php

$offer="offer1qqp83w76wzru6cmqvpsxygqqwc7hynr6hum6e0mnf72sn7uvvkpt68eyumkhelprk0adeg42nlelk2mpafrgx923m0l47v9tc4t5pf7cuxvd9w6deukvcpxk9k6xezle9z09eh45f49r9uxfpcs6pysln4rncf4vwntdma046r0cl6lxdq52dhg4472kkhm6g3m0j2ue75lp4l7mrp09ckf2cqqtdelr325s0x06emnk0fldun8c4v3fdfv8aa0u3849wfe72a9uex99uklvgs7xds9tl6u3du9mgeww9wjmgp5tlkkvcua0354hfl4d8rglll4730szsc475qpchfw36cyx5yscdkxcedjxgedj8gadz9uyjj9h6cyt3kzm2p6w7szjh08etjatwex95vpp4437zwj8d4rvuxt6utf3w94vhhghmecw2nv6y5ahgdjrdj9yrl088aacm4u7xyllzatlxv56w4x0q4nh8amclzd9r3dgsgsh7tpmj4cdxeuv8sjua5k6jz0ad0hvk8kmh6jkcg0h6w306etlvm096aetcwctqawljs0lukah9nnw5hcukwmkmzgmu0fmyrngayqnddqp6gm0n0uq2qe7wlun668llpy4s8xqfxhkscecdalchnyvyyaen7vl80ykljd9578vuzt6v2vjpw95kj37e6azra4ln9ujn292ktlmlgzjvmpud4y70v06vh7ddz9hud9hyp3tndwaujjwhnsm304j009vdd5c2fx0lu9hfjk4860u6a7lv9s85cr85ps2lghqs7xl8237kqu8755mk4u6mnkzjtlskq4htprrxp6alwudwjmm3meg0s8vhtkkvg2n8aysddrl2fkxlc2e8cyk36g9vqsm8gpxuh4k27cw3uu7yhr7zeja8ljenjazxm7e0rjer27ntjnfnv3wquzcp9s3dfh0ch6q4rqsrdvvrz3nssj7haeas0tejxscafw7chr7a8wnrx0lm8l57jnvlyn08fx6kwr0a7zp5pg2su5azyd0nf457kplh9tnt0f2l6n8u8wt3lt900f475a7h7yu9du0y4303vazt08qvmzy9005ufkd0s4e587pm5mtrm026uxecqd2mdvyll2z8e2njh0xejukasxmcll2s4vs8a7hv4fc8yhrzf04l8rt45l5lvnklgfqp8lhttmq8p4989";


$pdata=array('offer' => $offer);


$postData = http_build_query($pdata);

$authorization="Authorization:Bearer yourtoken";
				$curl = curl_init();

				$url="https://hash.green/api/v1/orders";

curl_setopt_array($curl, [
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
   CURLOPT_SSL_VERIFYPEER => false,
       CURLOPT_SSL_VERIFYHOST=> 2,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_POST=>1,
  CURLOPT_HTTPHEADER =>array('Content-Type: application/x-www-form-urlencoded' , $authorization),
CURLOPT_POSTFIELDS=>$postData,]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $total=json_decode($response, true);
  
 print_r($total);


}


?>
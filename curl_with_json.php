<?php

// Pass the customer's authorisation code, email , amount etc then JSON_ENCODE them
$postdata =  array('bizname' => $bizname,'biztype' => $biztype,'bizadd' => $bizadd,'phone' => $phone,'email' => $email,'payoff' => $payoff,'referral' => $referral,'lang' => $lang,'voice' => $voice,'plan' => $plan);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://waycom.biz/biz_tunez/remote/update_requests.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($postdata));  //Post Fields
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$headers = [
   'Content-Type: application/json'
];
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$request = curl_exec ($ch);
curl_close ($ch);


?>
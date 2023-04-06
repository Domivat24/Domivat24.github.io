<?php
$body = trim(file_get_contents("php://input"));

$body_decoded = json_decode($body,true);
$url = 'https://cliq.zoho.com/api/v2/channels/'.$body_decoded["channelID"].'/members'
echo $url;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "email_ids": [
  "'.$body_decoded["email"].'"
  ]
}',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Zoho-oauthtoken '.$body_decoded["token"],
    'contentType: application/json',
    'Content-Type: application/json',
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>

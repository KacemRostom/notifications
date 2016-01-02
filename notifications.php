<?php
echo $_GET["hub_challenge"];

$url = 'http://ooredoo.kacemb.com:9654/notifications.php';

$entry = json_encode( file_get_contents( 'php://input' ) );

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch,CURLOPT_POSTFIELDS, $entry);

$result = curl_exec($ch);

curl_close($ch);

?>

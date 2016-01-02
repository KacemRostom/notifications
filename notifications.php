<?php
echo $_GET["hub_challenge"];
//var_dump($_PSOT);


$url = 'http://ooredoo.kacemb.com:9654/notifications.php';
$fields = array(
	'entry' => file_get_contents( 'php://input' )
);
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value; }

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);



/*
$myFile = "data.txt";

//var_dump($_GET);

// opens the file for appending (file must already exist)
$fh = fopen($myFile, 'a');

// Makes a CSV list of your post data
$comma_delmited_list = implode(",", $_POST) . "\n";
$c3omma_delmited_list = implode(",", $_GET) . "\n";
fwrite($fh, $c3omma_delmited_list);

// Write to the file
fwrite($fh, $comma_delmited_list);

// You're done
fclose($fh);
//echo 'ok'; */
?>

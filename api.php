<?php 
	$url = 'http://192.168.10.1/index.asp';

	$json = file_get_contents($url);
	header('Content-Type: application/json');
	// $data = ["line1" => 1];
	echo $json;
?>

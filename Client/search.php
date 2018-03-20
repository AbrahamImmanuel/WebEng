<?php
	if($search = $_POST['search'])
	{	
		// resource address
		$url = "http://localhost:8025/GitHub/WebEng/Server/all/$search";
		
		// send request to resource
		$client = curl_init($url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
		
		// get response from resource
		$response = curl_exec($client);
		$decoded = json_decode($response);
		echo "<pre>";
		print_r($decoded);
		echo "</pre>";
	}
	else
		echo 'not found';
?>
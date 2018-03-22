<?php
	$path = "http://localhost:8025/GitHub/WebEng/Server/";
	
	if($search = $_POST['search'])
	{	
		$search = urlencode($search);
		$type = $_POST['searchType'];
		// resource address
		if($type == 'Name')
			$url = $path."name/$search";
		else if($type == 'Cust. Num. Acc.')
			$url = $path."cna/$search";
		else
			$url = $path."all/$search";
		
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
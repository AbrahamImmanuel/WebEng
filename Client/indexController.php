<?php
	session_start();
	
	if(isset($_POST['save']))
	{
		$data = $_POST;
		
		// resource address
		$url = "http://localhost:8025/GitHub/WebEng/Server/insert";
		
		// send request to resource
		$client = curl_init($url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $data);
		
		// get response from resource
		$response = curl_exec($client);
		$decoded = json_decode($response);
		$_SESSION = $_POST;
		$_SESSION['customerNumberAccount'] = $decoded->customerNumberAccount;
		$_SESSION['modifiedTime'] = $decoded->modifiedTime;
		$_SESSION['createdTime'] = $decoded->createdTime;
		$_SESSION['message'] = 'success';
		header('Location: index.php');
	}
	else if(isset($_POST['add']))
		header('Location: index.php');
	else if(isset($_POST['edit']))
	{
		$data = $_POST;
		$id = 1;
		// resource address
		$url = "http://localhost:8025/GitHub/WebEng/Server/edit/$id";
		
		// send request to resource
		$client = curl_init($url);
		curl_setopt($client, CURLOPT_POST, true);
		curl_setopt($client, CURLOPT_POSTFIELDS, $data);
		
		// get response from resource
		$response = curl_exec($client);
	}
	else if(isset($_POST['checkDukcapil']))
		echo "check dukcapil";
?>
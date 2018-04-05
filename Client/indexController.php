<?php
	session_start();
	$path = "http://localhost:8025/GitHub/WebEng/Server/";
	
	if(isset($_POST['save']))
	{
		$data = $_POST;
		
		if(!preg_match('/^\w*$/', $data['firstName']) || !preg_match('/^\d*$/', $data['firstName']))
		{
			$_SESSION['warning'] = 'First name cannot contain spaces, numbers, and special characters!';
		}
		else if(!preg_match('/^\w*$/', $data['lastName']) || !preg_match('/^\d*$/', $data['lastName']))
		{
			$_SESSION['warning'] = 'Last name cannot contain spaces, numbers, and special characters!';
		}
		else if(!preg_match('/^\d*$/', $data['customerId']))
		{
			$_SESSION['warning'] = 'Customer ID cannot contain spaces, alphabets, and special characters!';
		}
		else if(!preg_match('/^\d*$/', $data['contactNumber']))
		{
			$_SESSION['warning'] = 'Contact number cannot contain spaces, alphabets, and special characters!';
		}
		else if($data['residenceType'] == 'Domestic' && (substr($data['contactNumber'],0,2) != '08' && substr($data['contactNumber'],0,3) != '628'))
		{
			$_SESSION['warning'] = 'Invalid contact number, please use 08 or 628 for domestic residence type!';
		}
		else if($data['residenceType'] == 'Foreign' && (substr($data['contactNumber'],0,2) == '08' && substr($data['contactNumber'],0,3) == '628'))
		{
			$_SESSION['warning'] = 'Invalid contact number, please use other than 08 or 628 for foreign residence type!';
		}
		else
		{	
			// resource address
			$url = $path."insert";
			
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
		}
		header('Location: index.php');
	}
	else if(isset($_POST['add']))
		header('Location: index.php');
	else if(isset($_POST['edit']))
	{
		$data = $_POST;
		$id = 1;
		// resource address
		$url = $path."edit/$id";
		
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
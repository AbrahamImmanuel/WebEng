<?php
	session_start();
        $dir = dirname($_SERVER["PHP_SELF"],2) . "/Server/";
	$path = "http://localhost$dir";
	
	if(isset($_POST['save']))
	{
		$data = $_POST;
		unset($data['save']);
		unset($data['latitude']);
		unset($data['longitude']);
		unset($data['bssStatus']);
		$empty = false;
		foreach($data as $value)
		{
			if($value == "")
			{
				$empty = true;
				break;
			}
		}
		
		if($empty)
		{
			$_SESSION['warning'] = 'Please fill in all the data!';
			header('Location: index.php');
		}
		else if(!preg_match('/^\w*$/', $data['firstName']) || preg_match('/^\d*$/', $data['firstName']))
		{
			$_SESSION['warning'] = 'First name cannot contain spaces, numbers, and special characters!';
		}
		else if(!preg_match('/^\w*$/', $data['lastName']) || preg_match('/^\d*$/', $data['lastName']))
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
		unset($data['edit']);
		unset($data['latitude']);
		unset($data['longitude']);
		unset($data['bssStatus']);
		
		$empty = false;
		foreach($data as $value)
		{
			if($value == "")
			{
				$empty = true;
				break;
			}
		}
		
		if($empty)
		{
			$_SESSION['warning'] = 'Please fill in all the data!';
			header('Location: index.php');
		}
		else if(!preg_match('/^\w*$/', $data['firstName']) || preg_match('/^\d*$/', $data['firstName']))
		{
			$_SESSION['warning'] = 'First name cannot contain spaces, numbers, and special characters!';
		}
		else if(!preg_match('/^\w*$/', $data['lastName']) || preg_match('/^\d*$/', $data['lastName']))
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
			$url = $path."edit";
			
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
	else if(isset($_POST['checkDukcapil']))
	{
		$data = $_POST;
		$search = $data['customerId'];
		// resource address
		$url = $path."dukcapil/$search";
		
		// send request to resource
		$client = curl_init($url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
		
		// get response from resource
		$response = curl_exec($client);
		$decoded = json_decode($response);
		if($decoded == null)
			$_SESSION['warning'] = 'Customer ID not found in dukcapil database!';
		else
			$_SESSION['warning'] = 'Customer ID found in dukcapil database!';
		header('Location: index.php');
	}
?>
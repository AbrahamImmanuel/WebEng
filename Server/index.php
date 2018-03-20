<?php
	require_once('CustomerDAO.php');
	require_once('PicDAO.php');
	require 'rb.php';
	R::setup('mysql:host=localhost;dbname=data_customer', 'root', '');
	
	if(isset($_GET['method']))
	{
		$method = $_GET['method'];
		switch($method)
		{
			case "all":
				$response = CustomerDAO::getAll();
				$encoded = json_encode($response);
				echo $encoded;
				break;
			case "insert":
				$id = PicDAO::insert($_POST);
				$array = CustomerDAO::insert($_POST, $id);
				$data = $_POST;
				$data['customerNumberAccount'] = $array['customerNumberAccount'];
				$data['modifiedTime'] = $array['modified_time'];
				$data['createdTime'] = $array['created_time'];
				$data['id'] = $id;
				$encoded = json_encode($data);
				echo $encoded;
				break;
			case "edit":
				echo "lol";
				break;
		}
	}
?>
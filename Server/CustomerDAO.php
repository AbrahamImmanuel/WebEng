<?php
	class CustomerDAO
	{
		function getAll()
		{
			$data = R::getAll("select * from customer");
			return $data;
		}
		
		function insert($data, $id)
		{
			R::exec(
			"insert into customer
			(
				customer_segment,
				customer_category,
				residence_type,
				date_of_birth,
				occupation,
				shared_balance_group,
				dukcapil_status,
				npwp_number,
				is_converted_from_lead,
				customer_status,
				primary_mobile,
				corporate_tax_id,
				customer_username,
				pic_id
			)
			values
			(
				'".$data['customerSegment']."',
				'".$data['customerCategory']."',
				'".$data['residenceType']."',
				'".$data['dateOfBirth']."',
				'".$data['occupation']."',
				'".$data['sharedBalanceGroup']."',
				'".$data['dukcapilStatus']."',
				'".$data['npwpNumber']."',
				'".$data['isConvertedFromLead']."',
				'".$data['customerStatus']."',
				'".$data['primaryMobile']."',
				'".$data['corporateTaxId']."',
				'".$data['customerUsername']."',
				$id
			)");
			
			$array = R::getRow("select customer_number_account as customerNumberAccount, modified_time, created_time from customer ORDER by customer_number_account desc limit 1");
			return $array;
		}
		
		function update($data, $id)
		{
			R::exec(
			"update customer
			set customer_segment = '".$data['customerSegment']."',
			set customer_category = '".$data['customerCategory']."',
			set residence_type = '".$data['residenceType']."',
			set date_of_birth = '".$data['dateOfBirth']."',
			set occupation = '".$data['occupation']."',
			set shared_balance_group = '".$data['sharedBalanceGroup']."',
			set dukcapil_status = '".$data['dukcapilStatus']."',
			set npwp_number = '".$data['npwpNumber']."',
			set is_converted_from_lead = '".$data['isConvertedFromLead']."',
			set customer_status = '".$data['customerStatus']."',
			set primary_mobile = '".$data['primaryMobile']."',
			set corporate_tax_id = '".$data['corporateTaxId']."',
			set customer_username = '".$data['customerUsername']."',
			set pic_id = $id
			where customer_number_account = '".$data['customerNumberAccount']."'"
			);
		}
	}
?>
<?php
	class CustomerDAO
	{
		function searchAll($search)
		{
			$data = R::getAll(
			"select * 
			from customer c
			join pic p
			on(c.pic_id = p.id)
			where 
			c.customer_number_account like '%$search%' or
			c.customer_segment like '%$search%' or
			c.residence_type like '%$search%' or
			c.date_of_birth like '%$search%' or
			c.occupation like '%$search%' or
			c.modified_time like '%$search%' or
			c.shared_balance_group like '%$search%' or
			c.dukcapil_status like '%$search%' or
			c.latitude like '%$search%' or
			c.longitude like '%$search%' or
			c.npwp_number like '%$search%' or
			c.is_converted_from_lead like '%$search%' or
			c.customer_status like '%$search%' or
			c.primary_mobile like '%$search%' or
			c.bss_status like '%$search%' or
			c.corporate_tax_id like '%$search%' or
			c.created_time like '%$search%' or
			c.customer_username like '%$search%' or
			p.first_name like '%$search%' or
			p.last_name like '%$search%' or
			p.gender like '%$search%' or
			p.facebook_account_id like '%$search%' or
			p.customer_id like '%$search%' or
			p.customer_id_type like '%$search%' or
			p.contact_number like '%$search%' or
			p.mother_maiden_name like '%$search%' or
			p.primary_email like '%$search%' or
			p.preferred_language like '%$search%' or
			p.kk_number like '%$search%' or
			p.home_phone like '%$search%' or
			p.home_status like '%$search%' or
			p.office_phone like '%$search%' or
			p.marital_status like '%$search%' or
			p.fax like '%$search%'
			");
			return $data;
		}
		
		function searchCNA($search)
		{
			$data = R::getAll(
			"select * 
			from customer c
			join pic p
			on(c.pic_id = p.id)
			where 
			c.customer_number_account like '%$search%'
			");
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
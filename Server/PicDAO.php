<?php
	class PicDAO
	{
		function searchName($search)
		{
			$data = R::getAll(
			"select * 
			from customer c
			join pic p
			on(c.pic_id = p.id)
			where 
			p.first_name like '%$search%' or
			p.last_name like '%$search%'
			");
			return $data;
		}
		
		function insert($data)
		{
			$pic = R::dispense('pic');
			$pic->import($data, 'firstName, lastName, gender, facebookAccountId, customerId, customerIdType, contactNumber, motherMaidenName, primaryEmail, preferredLanguage, kkNumber, homePhone, homeStatus, officePhone, maritalStatus, fax');
			return R::store($pic);
		}
		
		function update($data, $id)
		{
			$pic = R::load( 'pic', $id );
			if($pic->id != 0)
			{
				$pic->import($data, 'firstName, lastName, gender, facebookAccountId, customerId, customerIdType, contactNumber, motherMaidenName, primaryEmail, preferredLanguage, kkNumber, homePhone, homeStatus, officePhone, maritalStatus, fax');
				R::store( $pic );
			}
		}
	}
?>
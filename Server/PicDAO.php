<?php
	class PicDAO
	{
		function getAll()
		{
			$data = R::getAll("select * from pic");
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
			$pic->import($data, 'firstName, lastName, gender, facebookAccountId, customerId, customerIdType, contactNumber, motherMaidenName, primaryEmail, preferredLanguage, kkNumber, homePhone, homeStatus, officePhone, maritalStatus, fax');
			R::store( $pic );
		}
	}
?>
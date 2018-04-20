<?php
	class DukcapilDAO
	{
		function getOne($id)
		{
			$data = R::findOne('dukcapil', ' id = ? ',array($id));
			return $data;
		}
	}
?>
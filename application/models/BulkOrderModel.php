<?php

class BulkOrderModel extends CI_Model
{
	public function save_order($product, $name, $email, $phone, $unisex, $male, $female, $total, $front, $rear, $pocket, $left_sleeve, $right_sleeve, $message)
	{
		echo "$product $name $email $phone $unisex $male $female $total $front $rear $pocket $left_sleeve $right_sleeve $message";
	}
}
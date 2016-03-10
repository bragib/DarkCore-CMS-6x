<?php if(!defined('DarkCoreCMS')) { die('Direct access not permitted');} 
function get_item_store(){
	global $DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_WEBSITE;
	$con = connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD);
	$sql = "SELECT * FROM ".$DB_WEBSITE.".store_item";
	$i=1;
	if ($stmt = $con->prepare($sql)){
		$stmt->execute();
		$stmt->bind_result($_id,$_item_id,$_name,$_vp_price,$_dp_price,$_dispo);
		while ($stmt->fetch()) {
			$store[$i] = array(
				'id'=> $_id,
				'item_id'=> $_item_id,
				'name'=> $_name,
				'vp_price'=> $_vp_price,
				'dp_price'=> $_dp_price,
				'dispo'=> $_dispo);
		$i++;
		}
		$stmt->close();
	}
	return $store;
	$con->close();
}
	
?>
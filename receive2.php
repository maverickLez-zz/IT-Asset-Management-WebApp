<?php

echo fetchJSONArray2();

function  fetchJSONArray2(){
	// Include config file
	include "config.php";
	
	//-------------------------------------------------------------------
	$query2 = "SELECT `main_column` FROM `response_sheet_layout` WHERE `id` = 2";
	
	$result = $link->query($query2);
	$result = mysqli_fetch_array($result);
	$result = $result['main_column'];
	echo htmlspecialchars(stripcslashes(json_encode($result)));
}

?>
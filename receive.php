<?php

echo fetchJSONArray();

function  fetchJSONArray(){
	// Include config file
	include "config.php";

	//----------------------------------------------------------------------------
	$query = "SELECT `main_column` FROM `response_sheet_layout` WHERE `id` = 1";
	$result = $link->query($query);
	$result = mysqli_fetch_array($result);
	$result = $result['main_column'];
	echo htmlspecialchars(json_encode($result));
	
}

?>

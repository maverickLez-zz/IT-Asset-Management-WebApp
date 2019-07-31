<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: login.php");
exit;
}
?>
<?php

echo processJSONArray();

function processJSONArray()
{
	// Include config file
	require_once "config.php";

	//----------------------------------------------------------------------
    if (isset($_POST['myarray']) && isset($_POST['myarray2'])) {
		$tableData = stripcslashes($_POST['myarray']);
		$tableData2 = stripcslashes($_POST['myarray2']);
	}
	else{
		// echo "not set!";
	}

	//-----------------------------------------------------------------------
	$query = "TRUNCATE TABLE `response_sheet_layout`";
	if ($link->query($query) === TRUE)
	{
		// echo "Table 'response_sheet_layout' cleared successfully"."<br/>";
	}
	else
	{
		// echo "Error: " . $query . "<br/>" . $link->error;
	}

	//------------------------------------------------------------------------
  
	$insert_value = "INSERT INTO `response_sheet_layout` (main_column) VALUES ('".$tableData."')";
	$insert_value2 = "INSERT INTO `response_sheet_layout` (main_column) VALUES ('".$tableData2."')";
	
	if (($link->query($insert_value)) && ($link->query($insert_value2)) === TRUE)
	{
		// echo "Record added Successfully"."<br/>";
	}
	else
	{
		// echo "Error: " . $insert_value . "<br/>" . $link->error;
	}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hindalco Industries Limited - Unit: Birla Copper (Dahej-Bharuch)
    </title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel='stylesheet' href="fontawesome-free-5.8.2-web/css/all.css">
	<link rel="stylesheet" href="welcome.css">
	<script src="jquery.json-2.4.min.js"></script>
	<script src="jquery.min.js"></script>
	<script src="idk.js"></script>
  </head>
  <body>
    <div class="page-header">
      <img src="hindalco_newlogo-sm.jpg" alt="hindalco industries new logo" >
      <h1>Kudos ,
        <b>
          <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </b><br/><br/> We saved your response sheet's layout successfully!<br/><br/>Watch that sunset at beach side! 😎⛱☀<br/>
      </h1>
    </div>
    </br>
<center>
  <div class="form-group">
    <input type="button" onclick="window.location.href = 'welcome.php';" class="btn btn-primary" value="Back to Main page"/>
  </div>
</center>
</br>
<footer>
  <p>Developed with
    <i class='fas fa-heart' style='font-size:12px;color:red'>
    </i> by Parth
  </p>
</footer>
</body>
</html>

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

	echo storeData();
	function storeData(){
	// Include config file
	include "config.php";

	// $res_id = 1;
	//for division 1 of the table ----------------------------------------------------------------------------
	$fv1 = $_POST["1"];	$fv2 = $_POST["2"];	$fv3 = $_POST["3"];
	 $dum = 1;
	$query = "INSERT INTO `response_sheet_div1` (`input_field_1`,`input_field_2`,`input_field_3`) VALUES (".$fv1."','".$fv2."','".$fv3."')";
		if (mysqli_query($link, $query)) {
			// echo "New record added successfully";
		} else {
			// echo "Error: " . $query . "<br/>" . mysqli_error($link);
		}


	//for division 2 of the table ----------------------------------------------------------------------------
		$i = 4;
		$fv = $_POST["$i"];
		echo "im here".$fv."boo!";
		// for ($i = 4; ($_POST["".$i.""]!='') ; $i++) {
		// $fv1 = $_POST["".$i.""];	$fv2 = $_POST["".$i+$dum.""];	$fv3 = $_POST["".$i+$dum+$dum.""];
		// $query = "INSERT INTO `response_sheet_div2` (`input_field_1`,`input_field_2`,`input_field_3`) VALUES ('".$fv1."','".$fv2."','".$fv3."')";
		// 	if (mysqli_query($link, $query)) {
		// 		// echo "New record added successfully";
		// 	} else {
		// 		// echo "Error: " . $query . "<br/>" . mysqli_error($link);
		// 	}
		// }

	//for division 3 of the table ----------------------------------------------------------------------------
	$fv1 = $_POST["169"];	$fv2 = $_POST["170"];	$fv3 = $_POST["171"];
	$query = "INSERT INTO `response_sheet_div3` (`input_field_1`,`input_field_2`,`input_field_3`) VALUES ('".$fv1."','".$fv2."','".$fv3."')";
		if (mysqli_query($link, $query)) {
			// echo "New record added successfully";
		} else {
			// echo "Error: " . $query . "<br/>" . mysqli_error($link);
		}
		// mysqli_close($link);
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
			<!-- <script src="idk.js"></script> -->
  </head>
  <body>
    <div class="page-header">
      <img src="hindalco_newlogo-sm.jpg" alt="hindalco industries new logo" >
      <h1>Bingo!
        <b>
          <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </b><br/><br/>We have recorded your response.<br/>
      </h1>
    </div>
    </br>
<center>
  <div class="form-group">
	<p>
		<a href="logout.php" class="btn btn-danger">Log out
		</a>
    <input type="button" onclick="window.location.href = 'welcome.php';" class="btn btn-primary" value="Back to Main page"/>
	</p>
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

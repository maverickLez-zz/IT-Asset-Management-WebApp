<?php
// This function will run within each post array including multi-dimensional arrays 
// function ExtendedAddslash(&$params)
// { 
        // foreach ($params as &$var) {
            // // check if $var is an array. If yes, it will start another ExtendedAddslash() function to loop to each key inside.
            // is_array($var) ? ExtendedAddslash($var) : $var=addslashes($var);
            // unset($var);
        // }
// } 

// // Initialize ExtendedAddslash() function for every $_POST variable
// ExtendedAddslash($_POST);      

// $submission_id = $_POST['submission_id']; 
// $formID =$_POST['formID'];
// $ip =$_POST['ip'];
// $name =$_POST['name'];
// $email =$_POST['email'];
// $phonenumber =$_POST['phonenumber13'][0] ."-". $_POST['phonenumber13'][1];
// $subject =$_POST['subject7'];
// $message =$_POST['message6'];

// $db_host = 'db hostname here';
// $db_username = 'db username here';
// $db_password = 'db password here';
// $db_name = 'name of your database';

// mysqli_connect( $db_host, $db_username, $db_password) or die(mysqli_error());
// mysqli_select_db($db_name); 

// // search submission ID

// $query = "SELECT * FROM `table_name` WHERE `submission_id` = '$submission_id'";
// $sqlsearch = mysqli_query($query);
// $resultcount = mysqli_affected_rows($sqlsearch);

// if ($resultcount > 0) {
 
    // mysqli_query("UPDATE `table_name` SET 
                                // `name` = '$name',
                                // `email` = '$email',
                                // `phone` = '$phonenumber',
                                // `subject` = '$subject',
                                // `message` = '$message'        
                             // WHERE `submission_id` = '$submission_id'") 
     // or die(mysqli_error());
    
// } else {

    // mysqli_query("INSERT INTO `table_name` (submission_id, formID, IP, 
                                                                          // name, email, phone, subject, message) 
                               // VALUES ('$submission_id', '$formID', '$ip', 
                                                 // '$name', '$email', '$phonenumber', '$subject', '$message') ") 
    // or die(mysqli_error());  

// }
?>



<!DOCTYPE html>
<html>
<head><script src="jquery.min.js"></script></head>
<body>
<table id="myTable">
  <tr>
  <th>SNO</th>
  <th>Software to be loaded</th>
  <th>Version</th>
  <th>Loaded by</th>
  <th>Remarks</th>
  </tr>
  <tr>
  <td>1</td>
  <td>gjhgrfdhd</td>
  <td><input type="text"/></td>
  <td><input type="text"/></td>
  <td><input type="text"/></td>
  </tr>
  <tr>
  <td>2</td>
  <td>kjrethguiw</td>
  <td><input type="text"/></td>
  <td><input type="text"/></td>
  <td><input type="text"/></td>
  </tr>
  <tr>
  <td>3</td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  </tr>
  <tr>
  <td>4</td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  </tr>
  <tr>
  <td>5</td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  <td><textarea></textarea></td>
  </tr>
</table>
<form  name = "form" method="post" action = "sent.php"><input name="myarray" type="hidden" value=""/></form>
<br/><br/><br/>
<button onclick="test()">Test-me-not</button>
</body>
</html>
<script>
function test(){
	
	values = ['Backup of Old HDD data to New HDD', 'formatting of Computer with Two partition', 'Windows Operating Systems to be loaded with Service Pack - - for 32bit / 64 bit', 'Administrator Password to be set', 'PC / laptop Host name should be HILBCUDHJDT / HILBCUDHJLT ( Description Name )', 'Disable the windows fire wall', 'Rights to be given to HDD ( C &amp; D Driver- Every one users) ', 'Remote Desktop Enable', 'Software to be loaded from path:\\ 10.130.1.127\ utility\ All_Software', 'Adobe Acrobat ', 'Developer 6i (Report Builders &amp; Report Form)', 'J Iniator &amp; copy Symcjit.sys and paste on C:\programfiles\ oracle\ jiniator\ bin' ];
	var TableData;	
    TableData = JSON.stringify(values);
	console.log(TableData);
	// alert(TableData);
	// var value = $("#email).val ();

			// $.ajax ({

			// method: "POST",
			// url: "somephpfile.php",
			// data: {content: value}

				// });

		// var values = [];
		$('#myarray').val( JSON.stringify(TableData)) 
		$('#form').submit();	

			// $.ajax({
                // type: "POST",
                // url: "sent.php",
                // // data: { pTableData : TableData}, 
				// // success: function() { 
					// // alert("Success"); 
				
				// data: "pTableData=" + TableData,    // post TableData to server script
                // success:
					
					// function (msg) {
                    // // return value stored in msg variable 
                    // // $('#tbServerResponse').html('Server Response:<br><br><pre>' + msg + '</pre>');
                // }
            // });
			}
</script>
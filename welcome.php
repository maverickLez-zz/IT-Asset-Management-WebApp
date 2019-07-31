<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: login.php");

exit;
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
  <body onload="newTable()">
<div id="dom-target" style="display: none;">
    <?php
        include 'receive.php';//Again, do some operation, get the output.
		/* You have to escape because the result
											// will not be valid HTML otherwise. */
    ?>
</div>
<div id="dom-target2" style="display: none;">
    <?php
        include 'receive2.php';//Again, do some operation, get the output.
		/* You have to escape because the result
											// will not be valid HTML otherwise. */
    ?>
</div>
	<div class="page-header">
      <img src="hindalco_newlogo-sm.jpg" alt="hindalco industries new logo" >
      <h1>Hi,
        <b>
          <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </b>! Welcome to IT Asset Management WebApp
      </h1>
    </div>
    </br>
  <div class="form-group">
    <input style="margin:0 1% 0 90%;" type="button" class="btn btn-primary" onclick="printDiv('printableArea')" value="Print response sheet" />
    <?php   // Include config file
			include "config.php";
			$query = "SELECT user_type FROM users WHERE username = '".$_SESSION["username"]."'";
			$user_type = mysqli_fetch_array($link->query($query));
			// echo $user_type[0];
	if ($user_type[0] == 'admin'){ ?>
		<input style="margin:0 90% 0 1%;" type="button" class="btn btn-primary" onclick="location.href='welcome2.php'"  value="Edit response sheet" />
	<?php }else{ ?>
	<?php } ?>
  </div>
  </br>
<div id="printableArea">
  <center>
  <form action="send.php" method="post">
    <table cellspacing=0 border=1 cellpadding="8" style=min-width:1260px>
	  <thead>
        <th style=min-width:1030px>
          <center>
            <h3>Information Systems Deptt
            </h3>
          </center>
        </th>
		</thead>
	  <thead>
        <th style=min-width:1030px>
          <center>
            <h3>Software Installation procedure on Desktop/Laptop
            </h3>
          </center>
        </th>
	  </thead>
    </table>
    </br>
  <table cellspacing=0 border=1 cellpadding="10" style=min-width:1260px>
  <thead>
    <tr>
      <th style=min-width:50px>
        <b>Desktop/Laptop received on from
        </b>
      </th>
      <td style=min-width:50px>
        <input type="text" value="-" name="1">
      </td>
      <th style=min-width:50px>
        <b>Users Name :
        </b>
      </th>
      <td style=min-width:50px>
        <input type="text"  value="-" name="2">
      </td>
      <th style=min-width:50px>
        <b>Phone No. :
        </b>
      </th>
      <td style=min-width:50px>
        <input type="text" value="-" name="3">
      </td>
    </tr>
	</thead>
  </table>
  </center>

</br>

<center>
  <table cellspacing=0 border=2 style=min-width:1260px id="myTable">
    <tr>
      <th style=min-width:50px>
        <b>SNO
        </b>
      </th>
      <th style=min-width:50px>
        <b>Software to be loaded
        </b>
      </th>
      <th style=min-width:50px>
        <b>Version
        </b>
      </th>
      <th style=min-width:50px>
        <b>Loaded by
        </b>
      </th>
      <th style=min-width:50px>
        <b>Remarks
        </b>
      </th>
    </tr>
    <tr>
      <td style=min-width:50px>1
      </td>
      <td style=min-width:50px>Backup of Old HDD data to New HDD
      </td>
      <td style=min-width:50px>
        <input type="text" name="4">
      </td>
      <td style=min-width:50px>
        <input type="text" name="5">
      </td>
      <td style=min-width:50px>
        <input type="text" name="6">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>2
      </td>
      <td style=min-width:50px>formatting of Computer with Two partition
      </td>
      <td style=min-width:50px>
        <input type="text" name="7">
      </td>
      <td style=min-width:50px>
        <input type="text" name="8">
      </td>
      <td style=min-width:50px>
        <input type="text" name="9">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>3
      </td>
      <td style=min-width:50px>Windows Operating Systems to be loaded with Service Pack - - for 32bit / 64 bit
      </td>
      <td style=min-width:50px>
        <input type="text" name="10">
      </td>
      <td style=min-width:50px>
        <input type="text" name="11">
      </td>
      <td style=min-width:50px>
        <input type="text" name="12">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>4
      </td>
      <td style=min-width:50px>Administrator Password to be set
      </td>
      <td style=min-width:50px>
        <input type="text" name="13">
      </td>
      <td style=min-width:50px>
        <input type="text" name="14">
      </td>
      <td style=min-width:50px>
        <input type="text" name="15">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>5
      </td>
      <td style=min-width:50px>PC / laptop Hostname should be HILBCUDHJDT / HILBCUDHJLT ( Description Name )
      </td>
      <td style=min-width:50px>
        <input type="text" name="16">
      </td>
      <td style=min-width:50px>
        <input type="text" name="17">
      </td>
      <td style=min-width:50px>
        <input type="text" name="18">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>6
      </td>
      <td style=min-width:50px>Disable the windows fire wall
      </td>
      <td style=min-width:50px>
        <input type="text" name="19">
      </td>
      <td style=min-width:50px>
        <input type="text" name="20">
      </td>
      <td style=min-width:50px>
        <input type="text" name="21">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>7
      </td>
      <td style=min-width:50px>Rights to be given to HDD ( C & D Driver- Every one users)
      </td>
      <td style=min-width:50px>
        <input type="text" name="22">
      </td>
      <td style=min-width:50px>
        <input type="text" name="23">
      </td>
      <td style=min-width:50px>
        <input type="text" name="24">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>8
      </td>
      <td style=min-width:50px>Remote Desktop Enable
      </td>
      <td style=min-width:50px>
        <input type="text" name="25">
      </td>
      <td style=min-width:50px>
        <input type="text" name="26">
      </td>
      <td style=min-width:50px>
        <input type="text" name="27">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>9
      </td>
      <td style=min-width:50px>Software to be loaded from path:\\ 10.130.1.127\ utility\ All_Software
      </td>
      <td style=min-width:50px>
        <input type="text" name="28">
      </td>
      <td style=min-width:50px>
        <input type="text" name="29">
      </td>
      <td style=min-width:50px>
        <input type="text" name="30">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>10
      </td>
      <td style=min-width:50px>Adobe Acrobat
      </td>
      <td style=min-width:50px>
        <input type="text" name="31">
      </td>
      <td style=min-width:50px>
        <input type="text" name="32">
      </td>
      <td style=min-width:50px>
        <input type="text" name="33">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>11
      </td>
      <td style=min-width:50px>Developer 6i (Report Builders & Report Form)
      </td>
      <td style=min-width:50px>
        <input type="text" name="34">
      </td>
      <td style=min-width:50px>
        <input type="text" name="35">
      </td>
      <td style=min-width:50px>
        <input type="text" name="36">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>12
      </td>
      <td style=min-width:50px>J Iniator & copy Symcjit.sys and paste on C:\programfiles\ oracle\ jiniator\ bin
      </td>
      <td style=min-width:50px>
        <input type="text" name="37">
      </td>
      <td style=min-width:50px>
        <input type="text" name="38">
      </td>
      <td style=min-width:50px>
        <input type="text" name="39">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>13
      </td>
      <td style=min-width:50px>Lotus Notes path: D:\IBM
      </td>
      <td style=min-width:50px>
        <input type="text" name="40">
      </td>
      <td style=min-width:50px>
        <input type="text" name="41">
      </td>
      <td style=min-width:50px>
        <input type="text" name="42">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>14
      </td>
      <td style=min-width:50px>MS Office
      </td>
      <td style=min-width:50px>
        <input type="text" name="43">
      </td>
      <td style=min-width:50px>
        <input type="text" name="44">
      </td>
      <td style=min-width:50px>
        <input type="text" name="45">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>15
      </td>
      <td style=min-width:50px>2007 Compatible pack (in XP System)
      </td>
      <td style=min-width:50px>
        <input type="text" name="46">
      </td>
      <td style=min-width:50px>
        <input type="text" name="47">
      </td>
      <td style=min-width:50px>
        <input type="text" name="48">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>16
      </td>
      <td style=min-width:50px>dopdf
      </td>
      <td style=min-width:50px>
        <input type="text" name="49">
      </td>
      <td style=min-width:50px>
        <input type="text" name="50">
      </td>
      <td style=min-width:50px>
        <input type="text" name="51">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>17
      </td>
      <td style=min-width:50px>jre-6u23-windows-i586-p (Java)
      </td>
      <td style=min-width:50px>
        <input type="text" name="52">
      </td>
      <td style=min-width:50px>
        <input type="text" name="53">
      </td>
      <td style=min-width:50px>
        <input type="text" name="54">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>18
      </td>
      <td style=min-width:50px>WinZip & Win RAR
      </td>
      <td style=min-width:50px>
        <input type="text" name="55">
      </td>
      <td style=min-width:50px>
        <input type="text" name="56">
      </td>
      <td style=min-width:50px>
        <input type="text" name="57">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>19
      </td>
      <td style=min-width:50px>Windows OS Service Pack
      </td>
      <td style=min-width:50px>
        <input type="text" name="58">
      </td>
      <td style=min-width:50px>
        <input type="text" name="59">
      </td>
      <td style=min-width:50px>
        <input type="text" name="60">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>20
      </td>
      <td style=min-width:50px>Antivirus with latest defination file
      </td>
      <td style=min-width:50px>
        <input type="text" name="61">
      </td>
      <td style=min-width:50px>
        <input type="text" name="62">
      </td>
      <td style=min-width:50px>
        <input type="text" name="63">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>21
      </td>
      <td style=min-width:50px>Copy & paste DWRCSInstall , Ipmsg , MSOffic Start menu
      </td>
      <td style=min-width:50px>
        <input type="text" name="64">
      </td>
      <td style=min-width:50px>
        <input type="text" name="65">
      </td>
      <td style=min-width:50px>
        <input type="text" name="66">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>22
      </td>
      <td style=min-width:50px>Printer to be set as per users requirement
      </td>
      <td style=min-width:50px>
        <input type="text" name="67">
      </td>
      <td style=min-width:50px>
        <input type="text" name="68">
      </td>
      <td style=min-width:50px>
        <input type="text" name="69">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>23
      </td>
      <td style=min-width:50px>Adobe flash player
      </td>
      <td style=min-width:50px>
        <input type="text" name="70">
      </td>
      <td style=min-width:50px>
        <input type="text" name="71">
      </td>
      <td style=min-width:50px>
        <input type="text" name="72">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>24
      </td>
      <td style=min-width:50px>Copy Shortcut to master_form.fmx & paste all user--> desktop
      </td>
      <td style=min-width:50px>
        <input type="text" name="73">
      </td>
      <td style=min-width:50px>
        <input type="text" name="74">
      </td>
      <td style=min-width:50px>
        <input type="text" name="75">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>25
      </td>
      <td style=min-width:50px>System should be on Domain: ABGPLANET.abg.com
      </td>
      <td style=min-width:50px>
        <input type="text" name="76">
      </td>
      <td style=min-width:50px>
        <input type="text" name="77">
      </td>
      <td style=min-width:50px>
        <input type="text" name="78">
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>26
      </td>
      <td style=min-width:50px>DHCP or Static IP Address
      </td>
      <td style=min-width:50px>
        <input type="text" name="79">
      </td>
      <td style=min-width:50px>
        <input type="text" name="80">
      </td>
      <td style=min-width:50px>
        <input type="text" name="81">
      </td>
    </tr>
  </table>

  <br/>

  <table>
    <tr>
      <th style=min-width:1260px>
        <b>Before given the PC to users pl check following items
        </b>
      </th>
    </tr>
  </table>
  </br>
<table cellspacing=0 border=2 cellpadding="10" style=min-width:1260px id="myTable2">
  <tr>
    <td style=min-width:50px>1
    </td>
    <td style=min-width:50px>All the Above installed Items
    </td>
    <td style=min-width:50px>
      <input type="text" name="82">
    </td>
    <td style=min-width:50px>
      <input type="text" name="83">
    </td>
    <td style=min-width:50px>
      <input type="text" name="84">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>2
    </td>
    <td style=min-width:50px>Check ERP & APPS with New bcudhj.bc login
    </td>
    <td style=min-width:50px>
      <input type="text" name="85">
    </td>
    <td style=min-width:50px>
      <input type="text" name="86">
    </td>
    <td style=min-width:50px>
      <input type="text" name="87">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>3
    </td>
    <td style=min-width:50px>Antivirus to be updated with latest updates.
    </td>
    <td style=min-width:50px>
      <input type="text" name="88">
    </td>
    <td style=min-width:50px>
      <input type="text" name="89">
    </td>
    <td style=min-width:50px>
      <input type="text" name="90">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>4
    </td>
    <td style=min-width:50px>Firewall & Firewall service to be disable
    </td>
    <td style=min-width:50px>
      <input type="text" name="91">
    </td>
    <td style=min-width:50px>
      <input type="text" name="92">
    </td>
    <td style=min-width:50px>
      <input type="text" name="93">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>5
    </td>
    <td style=min-width:50px>Remote desktop to be check to take the PC on remote.
    </td>
    <td style=min-width:50px>
      <input type="text" name="94">
    </td>
    <td style=min-width:50px>
      <input type="text" name="95">
    </td>
    <td style=min-width:50px>
      <input type="text" name="96">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>6
    </td>
    <td style=min-width:50px>dame ware to be check to take the PC on remote.
    </td>
    <td style=min-width:50px>
      <input type="text" name="97">
    </td>
    <td style=min-width:50px>
      <input type="text" name="98">
    </td>
    <td style=min-width:50px>
      <input type="text" name="99">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>7
    </td>
    <td style=min-width:50px>msoffice to be check to take the PC on remote.
    </td>
    <td style=min-width:50px>
      <input type="text" name="100">
    </td>
    <td style=min-width:50px>
      <input type="text" name="101">
    </td>
    <td style=min-width:50px>
      <input type="text" name="102">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>8
    </td>
    <td style=min-width:50px>adops-bcudhjadmin user add in administrator group
    </td>
    <td style=min-width:50px>
      <input type="text" name="103">
    </td>
    <td style=min-width:50px>
      <input type="text" name="104">
    </td>
    <td style=min-width:50px>
      <input type="text" name="105">
    </td>
  </tr>
  <tr>
    <td style=min-width:50px>9
    </td>
    <td style=min-width:50px>check in Lansweeper also
    </td>
    <td style=min-width:50px>
      <input type="text" name="106">
    </td>
    <td style=min-width:50px>
      <input type="text" name="107">
    </td>
    <td style=min-width:50px>
      <input type="text" name="108">
    </td>
  </tr>
</table>

</br>

<table cellspacing=0 border=2 cellpadding="10" style=min-width:1260px>
  <tr>
    <td style=min-width:50px>PC Given back to users on Date
    </td>
    <td style=min-width:50px>
      <input type="text" value="-" name="169">
    </td>
  </tr>
</table>
</br>
<table cellspacing=0 border=2 cellpadding="10" style=min-width:1260px>
  <tr>
    <td style=min-width:50px>Engineer name / Sign
    </td>
    <td style=min-width:50px>
      <input type="text" value="-" name="170">
    </td>
    <td style=min-width:50px>Receiver Name / Sign
    </td>
    <td style=min-width:50px>
      <input type="text" value="-" name="171">
    </td>
  </tr>
</table>
</br>
</center>
</div>
<hr>
<p>
  <a href="reset-password.php" class="btn btn-warning">Reset Your Password
  </a>
  <a href="logout.php" class="btn btn-danger">Log out
  </a>
</p>
<center>
  <div class="form-group">
	   <input type="submit"  class="btn btn-primary" value="Send"/>
    <input type="reset" onclick="location.reload();" class="btn btn-primary" value="Reset"/>
  </div>
</center>
</form>
</br>
<footer>
  <p>Developed with
    <i class='fas fa-heart' style='font-size:12px;color:red'>
    </i> by Parth
  </p>
</footer>
</body>
</html>

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
    <title>Edit response sheet
    </title>
    <link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="welcome2.css">
    <link rel='stylesheet' href="fontawesome-free-5.8.2-web/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="jquery.json-2.4.min.js"></script>
	<script src="jquery.min.js"></script>
  </head>
  <body>
  <center>
    <div class="page-header">
      <img src="hindalco_newlogo-sm.jpg" alt="hindalco industries new logo" >
      <h3> 
        <b>
          <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </b><br/><br/> Make sure to save your work!
      </h3>
    </div>
	</center>
    </br>
  </br>
<center>
      <div id="cont">
        <table cellspacing=0 border=1 cellpadding="8" style=min-width:1260px>
          <tr>
            <td style=min-width:1030px>
              <center>
                <h3>Information Systems Deptt
                </h3>
              </center>
            </td>
          </tr>
          <tr>
            <td style=min-width:1030px>
              <center>
                <h3>Software Installation procedure on Desktop/Laptop
                </h3>
              </center>
            </td>
          </tr>
        </table>
        </br>
      <table cellspacing=0 border=1 cellpadding="10" style=min-width:1260px>
        <tr>
          <td style=min-width:50px>
            <b>Desktop/Laptop received on from
            </b>
          </td>
          <td style=min-width:50px>
            <input type="text" name="1">
          </td>
          <td style=min-width:50px>
            <b>Users Name :
            </b>
          </td>
          <td style=min-width:50px>
            <input type="text" name="2">
          </td>
          <td style=min-width:50px>
            <b>Phone No. : 
            </b>
          </td>
          <td style=min-width:50px>
            <input type="text" name="3">
          </td>
        </tr>	
      </table>
      </br>
    <table cellspacing=0 border=2 style=min-width:1260px id="myTable">
      <tr>
        <th style=min-width:174px>
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
        <th style=min-width:50px>
          <b>Action
          </b>
        </th>
      </tr>
      <tr>
        <td style=min-width:50px>1
        </td>
        <td style=min-width:50px>Backup of Old HDD data to New HDD</td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>2
        </td>
        <td style=min-width:50px>formatting of Computer with Two partition
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>3
        </td>
        <td style=min-width:50px>Windows Operating Systems to be loaded with Service Pack - - for 32bit / 64 bit
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>4
        </td>
        <td style=min-width:50px>Administrator Password to be set
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>5
        </td>
        <td style=min-width:50px>PC / laptop Hostname should be HILBCUDHJDT / HILBCUDHJLT ( Description Name )
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>6
        </td>
        <td style=min-width:50px>Disable the windows fire wall
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>7
        </td>
        <td style=min-width:50px>Rights to be given to HDD ( C & D Driver- Every one users) 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>8
        </td>
        <td style=min-width:50px>Remote Desktop Enable
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>9
        </td>
        <td style=min-width:50px>Software to be loaded from path:\\ 10.130.1.127\ utility\ All_Software
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>10
        </td>
        <td style=min-width:50px>Adobe Acrobat 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>11
        </td>
        <td style=min-width:50px>Developer 6i (Report Builders & Report Form)
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>12
        </td>
        <td style=min-width:50px>J Iniator & copy Symcjit.sys and paste on C:\programfiles\ oracle\ jiniator\ bin
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>13
        </td>
        <td style=min-width:50px>Lotus Notes path: D:\IBM 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>14
        </td>
        <td style=min-width:50px>MS Office 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>15
        </td>
        <td style=min-width:50px>2007 Compatible pack (in XP System)
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>16
        </td>
        <td style=min-width:50px>dopdf
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>17
        </td>
        <td style=min-width:50px>jre-6u23-windows-i586-p (Java) 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>18
        </td>
        <td style=min-width:50px>WinZip & Win RAR
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>19
        </td>
        <td style=min-width:50px>Windows OS Service Pack 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>20
        </td>
        <td style=min-width:50px>Antivirus with latest defination file
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>21
        </td>
        <td style=min-width:50px>Copy & paste DWRCSInstall , Ipmsg , MSOffic Start menu 
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>22
        </td>
        <td style=min-width:50px>Printer to be set as per users requirement
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>23
        </td>
        <td style=min-width:50px>Adobe flash player
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>24
        </td>
        <td style=min-width:50px>Copy Shortcut to master_form.fmx & paste all user--> desktop
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>25
        </td>
        <td style=min-width:50px>System should be on Domain: ABGPLANET.abg.com
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
      <tr>
        <td style=min-width:50px>26
        </td>
        <td style=min-width:50px>DHCP or Static IP Address
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
          <input type="text" name="">
        </td>
        <td style=min-width:50px>
		<input type="button" value="X" class="button" onclick="removeRow(this)" />
        </td>
      </tr>
    </table>
    <p>
      <button id="addRow" value="Add new row" class="button" onclick="addRow()">Add new row
      </button>
    </p>
    </div>
  <div id="cont">
    <table>
      <tr>
        <td style=min-width:1260px>
          <b>Before given the PC to users pl check following items
          </b>
        </td>
      </tr>
    </table>
    </br>
  <table cellspacing=0 border=2 cellpadding="10" style=min-width:1260px id="myTable2">
    <tr>
      <td style=min-width:174px>1
      </td>
      <td style=min-width:50px>All the Above installed Items 
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>2
      </td>
      <td style=min-width:50px>Check ERP & APPS with New bcudhj.bc login
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>3
      </td>
      <td style=min-width:50px>Antivirus to be updated with latest updates.
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>4
      </td>
      <td style=min-width:50px>Firewall & Firewall service to be disable
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>5
      </td>
      <td style=min-width:50px>Remote desktop to be check to take the PC on remote.
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>6
      </td>
      <td style=min-width:50px>dame ware to be check to take the PC on remote.
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>7
      </td>
      <td style=min-width:50px>msoffice to be check to take the PC on remote.
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>8
      </td>
      <td style=min-width:50px>adops-bcudhjadmin user add in administrator group
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
    <tr>
      <td style=min-width:50px>9
      </td>
      <td style=min-width:50px>check in Lansweeper also
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
        <input type="text" name="">
      </td>
      <td style=min-width:50px>
	  <input type="button" value="X" class="button" onclick="removeRow2(this)" />
      </td>
    </tr>
  </table>
  <p>
    <button id="addRow" value="Add new row" class="button" onclick="addRow2()">Add new row
    </button>
  </p>
  </br>
<table cellspacing=0 border=2 cellpadding="10" style=min-width:1260px>
  <tr>
    <td style=min-width:50px>PC Given back to users on Date
    </td>
    <td style=min-width:50px>
      <input type="text" name="">
    </td>
  </tr>
</table>
</br>
<table cellspacing=0 border=2 cellpadding="10" style=min-width:1260px>
  <tr>
    <td style=min-width:50px>Engineer name / Sign
    </td>
    <td style=min-width:50px>
      <input type="text" name="">
    </td>
    <td style=min-width:50px>Receiver Name / Sign
    </td>
    <td style=min-width:50px>
      <input type="text" name="">
    </td>
  </tr>
</table>
</br></br>	
</div>
</center>
<form  name = "form" id = "form" method="post" action = "sent.php"><input id = "myarray" name="myarray" type="hidden" value=""/><input id = "myarray2" name="myarray2" type="hidden" value=""/></form>
  <div class="form-group">
    <input class="btn btn-primary" type="button" onclick="submit()" value="Save">
    </input>
    <input type="reset" onclick="location.reload();" class="btn btn-primary" value="Reset"/>
  </div>
</center>
</br>
<script src="idk.js"></script>
<section class="ArticleCopy"><blockquote><p>“You can always edit a bad page.<br/><br/> You can’t edit a blank page.” </p></blockquote></section>
<footer>
  <p>Developed with 
    <i class='fas fa-heart' style='font-size:12px;color:red'>
    </i> by Parth
  </p>
</footer>
</body>
</html>

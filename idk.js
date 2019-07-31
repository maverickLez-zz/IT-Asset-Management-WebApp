'use strict';
var i = 0;
var j = 0;
var k = 4;
var l = 1;
var m = 1;

// ARRAY FOR HEADER.

var values = new Array();
values = ['Backup of Old HDD data to New HDD', 'formatting of Computer with Two partition', 'Windows Operating Systems to be loaded with Service Pack - - for 32bit / 64 bit', 'Administrator Password to be set', 'PC / laptop Host name should be HILBCUDHJDT / HILBCUDHJLT ( Description Name )', 'Disable the windows fire wall', 'Rights to be given to HDD ( C &amp; D Driver- Every one users) ', 'Remote Desktop Enable', 'Software to be loaded from path:\\ 10.130.1.127\ utility\ All_Software', 'Adobe Acrobat ', 'Developer 6i (Report Builders &amp; Report Form)', 'J Iniator &amp; copy Symcjit.sys and paste on C:\programfiles\ oracle\ jiniator\ bin', 'Lotus Notes path: D:\IBM ', 'MS Office ', '2007 Compatible pack (in XP System)', 'dopdf', 'jre-6u23-windows-i586-p (Java) ', 'WinZip &amp; Win RAR', 'Windows OS Service Pack ', 'Antivirus with latest defination file', 'Copy &amp; paste DWRCSInstall , Ipmsg , MSOffic Start menu ', 'Printer to be set as per users requirement', 'Adobe flash player', 'Copy Shortcut to master_form.fmx &amp; paste all user--&gt; desktop', 'System should be on Domain: ABGPLANET.abg.com', 'DHCP or Static IP Address'];
var values2 = new Array();
values2 = ['All the Above installed Items ', 'Check ERP &amp; APPS with New bcudhj.bc login', 'Anti virus to be updated with latest updates.', 'Firewall &amp; Firewall service to be disable', 'Remote desktop to be check to take the PC on remote.', 'dame ware to be check to take the PC on remote.', 'msoffice to be check to take the PC on remote.', 'adops-bcudhjadmin user add in administrator group', 'check in Lansweeper also'];
var myTab = document.getElementById('myTable');
var myTab2 = document.getElementById('myTable2');

function printDiv(divName) {
	var printContents = document.getElementById(divName).innerHTML;
	var originalContents = document.body.innerHTML;
	document.body.innerHTML = printContents;
	window.print();
	document.body.innerHTML = originalContents;
}

// ADD A NEW ROW TO THE TABLE.s 1 -----------------------------------------------------------------------------------------------
function addRow() {
    var arrHead = new Array();	arrHead = ['SNO', 'Software to be loaded', 'Version', 'Loaded by', 'Remarks', 'Action'];
    var rowCnt = myTab.rows.length;
    // GET TABLE ROW COUNT.
    var tr = myTab.insertRow(rowCnt);
    // TABLE ROW.
    // tr = myTab.insertRow(rowCnt);
    for (var c = 0; c < arrHead.length; c++) {
        var td = document.createElement('td');
        // TABLE DEFINITION.
        td = tr.insertCell(c);
        if (c == arrHead.length - 1) {
            // FIRST COLUMN.
            // ADD A BUTTON.
            var button = document.createElement('input');

            // SET INPUT ATTRIBUTE.
            button.setAttribute('type', 'button');
            // button.innerHTML="P";
            button.setAttribute('value', 'X');
            button.setAttribute('class', 'button');
            // ADD THE BUTTON's 'on-click' EVENT.
            button.setAttribute('onclick', 'removeRow(this)');
            td.appendChild(button);
        } else if(c == 1){
            // CREATE AND ADD TEXTBOX IN EACH CELL
            var ele = document.createElement('textarea');
            td.appendChild(ele);
        }
		else{
			var ele2 = document.createElement('input');
            ele2.setAttribute('type', 'text');
            td.appendChild(ele2);
		}
    }
}
// DELETE TABLE ROW.
function removeRow(oButton) {
    myTab.deleteRow(oButton.parentNode.parentNode.rowIndex);
    // BUTTON -> TD -> TR.
}
// ADD A NEW ROW TO THE TABLE.s 2 -----------------------------------------------------------------------------------------------
function addRow2() {
   var arrHead = new Array();	arrHead = ['SNO', 'Software to be loaded', 'Version', 'Loaded by', 'Remarks', 'Action'];
    var rowCnt = myTab2.rows.length;
    // GET TABLE ROW COUNT.
    var tr = myTab2.insertRow(rowCnt);
    // TABLE ROW.

    for (var c = 0; c < arrHead.length; c++) {
        var td = document.createElement('td');
        // TABLE DEFINITION.
        td = tr.insertCell(c);
        if (c == arrHead.length - 1) {
            // FIRST COLUMN.
            // ADD A BUTTON.
            var button = document.createElement('input');

            // SET INPUT ATTRIBUTE.
            button.setAttribute('type', 'button');
            button.setAttribute('value', 'X');
            button.setAttribute('class', 'button');
            // ADD THE BUTTON's 'on-click' EVENT.
            button.setAttribute('onclick', 'removeRow2(this)');
            td.appendChild(button);
        } else if(c == 1){
            // CREATE AND ADD TEXTBOX IN EACH CELL
            var ele = document.createElement('textarea');
            td.appendChild(ele);
        }
		else{
			var ele2 = document.createElement('input');
            ele2.setAttribute('type', 'text');
            td.appendChild(ele2);
		}
    }
}
// DELETE TABLE ROW.
function removeRow2(oButton) {

    myTab2.deleteRow(oButton.parentNode.parentNode.rowIndex);
    // BUTTON -> TD -> TR.
}
// EXTRACT AND SUBMIT TABLE DATA.
function submit() {
	values = [];	values2 = [];
    // for table 1
    for (i = 1; i < myTab.rows.length; i++) {
    if (myTab.rows[i].cells[1].childNodes[0].value === undefined) {
            values.push(myTab.rows[i].cells[1].innerHTML);
        } else {
            values.push(myTab.rows.item(i).cells[1].childNodes[0].value);
        }
	}

    // for table 2
    for (i = 0; i < myTab2.rows.length; i++) {
        if (myTab2.rows[i].cells[1].childNodes[0].value === undefined) {
            values2.push(myTab2.rows[i].cells[1].innerHTML);
        } else {
            values2.push(myTab2.rows.item(i).cells[1].childNodes[0].value);
        }
    }

	// for table 1
	var TableData;
    TableData = JSON.stringify(values);
	$('#myarray').val(TableData)
	// $('#form').submit();

	// for table 2
    TableData = JSON.stringify(values2);
	$('#myarray2').val(TableData)
	$('#form').submit();
}

function newTable() {
	var arrHead = new Array();
	arrHead = ['SNO', 'Software to be loaded', 'Version', 'Loaded by', 'Remarks'];
	var myTab = document.getElementById('myTable');
	var myTab2 = document.getElementById('myTable2');

	// for table 1 --------------------------------------------
	values = [];
	var div = document.getElementById("dom-target");
    values = JSON.parse(div.textContent);
	values = values.slice(1,values.length-1);
	values = values.split(",");
	for (var i = 0; i < values.length; i++) {
		values[i] = values[i].slice(1,values[i].length-1);
	}

	// for table 2 --------------------------------------------
	values2 = [];
	var div2 = document.getElementById("dom-target2");
    values2 = div2.textContent;
	values2 = values2.slice(7,values2.length-2);
	values2 = values2.split(",");
	for (i = 0; i < values2.length; i++) {
		values2[i] = values2[i].slice(1,values2[i].length-1);
	}

	// console.log(values);
	// for table 1 -----------------------------------------------------------------------------------
	// <form action="send.php" method="post">
	// var ele = document.createElement('form');
	for (var i = myTab.rows.length-1; i > 0; i--) {
		myTab.deleteRow(i);
	}
	var rowCnt = values.length;
	i = 1;	l = 1;
	for (m = 0; m < rowCnt; m++) {
		var tr = myTab.insertRow(l);
		l++;
		for (var c = 0; c < arrHead.length; c++) {
			var td = document.createElement('TD');
			td = tr.insertCell(c);
			if (c === 0) {
				td.innerHTML = i;
				i++; // for "SNO" column
			} else if (c === 1) {
				td.innerHTML = values[j];
				j++; // for "Software to be loaded" column
			} else {
				var ele = document.createElement('input'); // for "Version" , "Loaded by" & "Remarks" columns
				ele.setAttribute('type', 'text');
				ele.setAttribute('value', '-');
				ele.setAttribute('name', k);
				td.appendChild(ele);
				k++;
			}
		}
	}

	// console.log(values2);
	// for table 2 -----------------------------------------------------------------------------------
	for (i =  myTab2.rows.length-1; i >= 0 ; i--) {
		myTab2.deleteRow(i);
	}
	rowCnt = values2.length;
	i = 1;	j=0;	l = 0;
	for (m = 0; m < rowCnt; m++) {
		tr = myTab2.insertRow(l);
		l++;
		for (c = 0; c < arrHead.length; c++) {
			td = document.createElement('TD');
			td = tr.insertCell(c);
			if (c === 0) {
				td.innerHTML = i;
				i++; // similar as above
			} else if (c === 1) {
				td.innerHTML = values2[j];
				j++;
			} else {
				ele = document.createElement('input');
				ele.setAttribute('type', 'text');
				ele.setAttribute('value', '-');
				ele.setAttribute('name', k);
				td.appendChild(ele);
				k++;
			}
		}
	}
}

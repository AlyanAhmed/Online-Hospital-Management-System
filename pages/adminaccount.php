
<!-- saved from url=(0074)http://localhost/Online-Hospital-Management-System-master/adminaccount.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></head><body id="top"><br>
<br>



<title>Online Hospital Management System</title>

<link rel="stylesheet" href="./adminaccount_files/layout.css" type="text/css">
<style>
/* Style The Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
	background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
<script type="application/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
<style>
input[type=submit]{
background-color: #4CAF50; /* Green */ border: none;
cursor:pointer;
color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;
}
input[type=reset]{
background-color: #4CAF50; /* Green */ border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px;
}
input[type=text]{
	display: block;
    width: 75%;
    height: 24px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
input[type=password]{
	display: block;
    width: 75%;
    height: 24px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}

input[type=number]{
	display: block;
    width: 75%;
    height: 24px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
</style>


<div class="wrapper col1">
<center><a href="http://localhost/Online-Hospital-Management-System-master/index.php"><img src="./adminaccount_files/Online Hospital Management System.png"></a></center>
  <div id="head">

    <div id="topnav">
      <ul>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/index.php">Home</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/aboutus.php">About US</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/patientappointment.php">Online Appointment</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/patientlogin.php">Login</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/patient.php">Registration</a></li>
        <li class="last"><a href="http://localhost/Online-Hospital-Management-System-master/contactus.php">Contact US</a></li></ul>
    </div>

  </div>
</div>
<div style="text-align:center">
<style>
#mmenu, #mmenu ul {
margin: 0;
padding: 0;
list-style: none;
}
#mmenu {
width: 100%;
/*margin: 60px auto;*/
border: 1px solid #222;
background-color: #111;
background-image: -moz-linear-gradient(#444, #111);
background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));
background-image: -webkit-linear-gradient(#444, #111);
background-image: -o-linear-gradient(#444, #111);
background-image: -ms-linear-gradient(#444, #111);
background-image: linear-gradient(#444, #111);
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
border-radius: 6px;
-moz-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
-webkit-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
}
#mmenu:before,
#mmenu:after {
content: "";
display: table;
}
#mmenu:after {
clear: both;
}
#mmenu {
zoom:1;
}
#mmenu li {
float: left;
border-right: 1px solid #222;
-moz-box-shadow: 1px 0 0 #444;
-webkit-box-shadow: 1px 0 0 #444;
box-shadow: 1px 0 0 #444;
position: relative;
}
#mmenu a {
float: left;
padding: 12px 30px;
color: #999;
text-transform: uppercase;
font: bold 12px Arial, Helvetica;
text-decoration: none;
text-shadow: 0 1px 0 #000;
}
#mmenu li:hover > a {
color: #fafafa;
}
*html #mmenu li a:hover { /* IE6 only */
color: #fafafa;
}
#mmenu ul {
margin: 20px 0 0 0;
_margin: 0; /*IE6 only*/
opacity: 0;
visibility: hidden;
position: absolute;
top: 38px;
left: 0;
z-index: 9999;
background: #444;
background: -moz-linear-gradient(#444, #111);
background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));
background: -webkit-linear-gradient(#444, #111);
background: -o-linear-gradient(#444, #111);
background: -ms-linear-gradient(#444, #111);
background: linear-gradient(#444, #111);
-moz-box-shadow: 0 -1px rgba(255,255,255,.3);
-webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.3);
box-shadow: 0 -1px 0 rgba(255,255,255,.3);
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
border-radius: 3px;
-webkit-transition: all .2s ease-in-out;
-moz-transition: all .2s ease-in-out;
-ms-transition: all .2s ease-in-out;
-o-transition: all .2s ease-in-out;
transition: all .2s ease-in-out;
}
#mmenu li:hover > ul {
opacity: 1;
visibility: visible;
margin: 0;
}
#mmenu ul ul {
top: 0;
left: 150px;
margin: 0 0 0 20px;
_margin: 0; /*IE6 only*/
-moz-box-shadow: -1px 0 0 rgba(255,255,255,.3);
-webkit-box-shadow: -1px 0 0 rgba(255,255,255,.3);
box-shadow: -1px 0 0 rgba(255,255,255,.3);
}
#mmenu ul li {
float: none;
display: block;
border: 0;
_line-height: 0; /*IE6 only*/
-moz-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
-webkit-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
box-shadow: 0 1px 0 #111, 0 2px 0 #666;
}
#mmenu ul li:last-child {
-moz-box-shadow: none;
-webkit-box-shadow: none;
box-shadow: none;
}
#mmenu ul a {
padding: 10px;
width: 130px;
_height: 10px; /*IE6 only*/
display: block;
white-space: nowrap;
float: none;
text-transform: none;
}
#mmenu ul a:hover {
background-color: #0186ba;
background-image: -moz-linear-gradient(#04acec, #0186ba);
background-image: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
background-image: -webkit-linear-gradient(#04acec, #0186ba);
background-image: -o-linear-gradient(#04acec, #0186ba);
background-image: -ms-linear-gradient(#04acec, #0186ba);
background-image: linear-gradient(#04acec, #0186ba);
}
#mmenu ul li:first-child > a {
-moz-border-radius: 3px 3px 0 0;
-webkit-border-radius: 3px 3px 0 0;
border-radius: 3px 3px 0 0;
}
#mmenu ul li:first-child > a:after {
content: '';
position: absolute;
left: 40px;
top: -6px;
border-left: 6px solid transparent;
border-right: 6px solid transparent;
border-bottom: 6px solid #444;
}
#mmenu ul ul li:first-child a:after {
left: -6px;
top: 50%;
margin-top: -6px;
border-left: 0;
border-bottom: 6px solid transparent;
border-top: 6px solid transparent;
border-right: 6px solid #3b3b3b;
}
#mmenu ul li:first-child a:hover:after {
border-bottom-color: #04acec;
}
#mmenu ul ul li:first-child a:hover:after {
border-right-color: #0299d3;
border-bottom-color: transparent;
}
#mmenu ul li:last-child > a {
-moz-border-radius: 0 0 3px 3px;
-webkit-border-radius: 0 0 3px 3px;
border-radius: 0 0 3px 3px;
}
</style>
<div id="mmenu">
<li><a href="http://localhost/Online-Hospital-Management-System-master/adminaccount.php">Account</a></li>
<li>
<a href="http://localhost/Online-Hospital-Management-System-master/adminaccount.php#########">Profile</a>
    <ul>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/adminprofile.php">Admin Profile</a></li>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/adminchangepassword.php">Change Password</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/admin.php" style="width:150px;">Add Admin</a></li>
    	<li><a href="http://localhost/Online-Hospital-Management-System-master/viewadmin.php" style="width:150px;">View Admin</a></li>
    </ul>
</li>
<li><a href="http://localhost/Online-Hospital-Management-System-master/adminaccount.php#########">Patient</a>
    <ul>
   <li><a href="http://localhost/Online-Hospital-Management-System-master/patient.php">Add Patient</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/viewpatient.php">View Patient Records</a></li>
    </ul>
</li>
<li>
<a href="http://localhost/Online-Hospital-Management-System-master/adminaccount.php#########">Appointment</a>
    <ul>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/appointment.php" style="width:200px;">New Appointment</a></li>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/viewappointmentpending.php" style="width:200px;">View Pending Appointments</a></li>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/viewappointmentapproved.php" style="width:200px;">View Approved Appointments</a></li>
    </ul>
</li>
<li><a href="http://localhost/Online-Hospital-Management-System-master/viewtreatmentrecord.php">Treatment</a></li>
<li>
<a href="http://localhost/Online-Hospital-Management-System-master/adminaccount.php#########">Doctor</a>
    <ul>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/doctor.php">Add Doctor</a></li>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/Viewdoctor.php">View Doctor</a></li>
     <li><a href="http://localhost/Online-Hospital-Management-System-master/doctortimings.php">Add Doctor Timings</a></li>
    <li><a href="http://localhost/Online-Hospital-Management-System-master/viewdoctortimings.php">View Doctor Timings</a></li>
 </ul>
</li>

<li>
<a href="http://localhost/Online-Hospital-Management-System-master/adminaccount.php#########">Settings</a>
    <ul>


       	<li><a href="http://localhost/Online-Hospital-Management-System-master/department.php" style="width:150px;">Add Department</a></li>
    	<li><a href="http://localhost/Online-Hospital-Management-System-master/Viewdepartment.php" style="width:150px;">View Department</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/treatment.php" style="width:150px;">Add Treatment type</a></li>
        <li><a href="http://localhost/Online-Hospital-Management-System-master/viewtreatment.php" style="width:150px;">View Treatment types</a></li>
       	<li><a href="http://localhost/Online-Hospital-Management-System-master/medicine.php" style="width:150px;">Add Medicine</a></li>
    	<li><a href="http://localhost/Online-Hospital-Management-System-master/Viewmedicine.php" style="width:150px;">View Medicine</a></li>
      </ul>
</li>
<li><a href="http://localhost/Online-Hospital-Management-System-master/logout.php">Log Out</a></li>
</div>
</div>
<div class="wrapper col2">
  <div id="breadcrumb">

<div class="dropdown">
<strong>Admin Dashboard</strong>
</div>


  </div>
</div>
<div class="wrapper col4">
  <div id="container">
  <p></p><form method="get" action="http://localhost/Online-Hospital-Management-System-master/adminaccount.php"><strong>Date -</strong> <input type="date" name="date" value=""><input type="submit" name="submit" value="Submit"></form><p></p>
    <h1>Number of Appointment Records :
    0    </h1>
    <h1>Number of Billing Reports :
    7    </h1>

    <h1>Number of Patient Records :
    8    </h1>
    <h1>Number of Treatment Records :
    1    </h1>

    <h1>Number of Prescription  :
    2    </h1>
    <br>
<hr>

    <h1 style="color:rgba(0,4,70,1.00)"> &nbsp; Database Records</h1>


    <h1>Number of Prescription Records :
    0    </h1>
    <h1>Number of Treatment Types :
    2    </h1>


    <h1>Number of Admin records :
    3    </h1>
    <h1>Number of Department Records :
    9    </h1>
     <h1>Number of Doctor Records :
    9    </h1>
 <h1>Number of Doctor Timings Records :
    2    </h1>
    <h1>Number of Billing Records :
    6    </h1>
  </div>
</div>

    <div class="clear"></div>
  

<div class="wrapper col5">
  <div id="footer">

    <div id="copyright">
      <p class="fl_left">Copyright © 2019 - All Rights Reserved | <a href="http://localhost/Online-Hospital-Management-System-master/adminlogin.php">Admin Login Panel</a> | <a href="http://localhost/Online-Hospital-Management-System-master/doctorlogin.php">Doctor Login Panel</a></p>
      <p class="fl_right">Developed by MSP Team</p>
      <br class="clear">
    </div>
    <div class="clear"></div>
  </div>
</div>


</body></html>
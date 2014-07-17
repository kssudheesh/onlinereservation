<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link type="text/css" media="screen" href="style.css" rel="stylesheet" />
<link href="images/animated_favicon.gif" rel="shortcut icon" type="image/x-icon"/>
 <script src="calendar1.js"></script>
<link href="calendar1.css" rel="stylesheet">
<script language="javascript">
history.forward();
</script>
<script language="javascript">
window.oncontextmenu = noRightClick;
window.onkeypress = noRightClick;
function noRightClick (e) {
if(e.which==3) return false;
}
</script>

</head>

<body>

<table width="90%" border="0"  cellspacing="0" cellpadding="0" align="center" style="background:url(images/bodybg.jpg) repeat-x;">
  <tr>
    <td><table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="44"><h1 align="center" style="color:#FF0000;">ONLINE TRAVELLING SYSTEM</h1></td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td><table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38" class="menu">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="about1.php">About us</a></li>
	<li><a href="newagent.php">NewAgent</a></li>
	<li><a href="index.php">Logout</a></li>
	</ul>
	</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td>
	<table width="100%" height="341" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" id="left" valign="top">
	<h3 align="center" class="h3" id="title">TOP ROUTES</h3>
	<ul>
	<li><a href="">Chennai - Bangalore</a></li>
	<li><a href="">Chennai - Coimbatore</a></li>
	<li><a href="">Chennai - Madurai</a></li>
	<li><a href="">Chennai - Trichy</a></li>
	<li><a href="">Chennai - Nellai</a></li>
	<li><a href="">Coimbatore - Chennai</a></li>
	<li><a href="">Coimbatore - Trivandrum</a></li>
	<li><a href="">Chennai-Kodaikanal</a></li>
	<li><a href="">Bangalore - Mangalore</a></li>
	<li><a href="">Bangalore - Chennai</a></li>
	</ul>
	</td>
    <td width="40%" id="center" valign="top">
	<h3 align="center" class="h3" id="ctitle">Admin Home Page</h3>
	
	
	<?php
	
	echo "<form method='post' action='adminenter.php'><table align='center' border='0' align='center'><tr align='center'><td colspan='3' class='label'>Enter Bus Detail</td></tr>
	
	<tr><td class='label'>Select Date<td><input type='text' style='border:1px solid #ABABAB;' name='to'  class='calendarSelectDate' id='date' size='15' value='dd-mm-yyyy' onfocus='this.value='''/>
  <div id='calendarDiv'></div></td><td><input type='submit' name='sub' value='Enter' class='greenButton' /></td></tr>
  
	<tr><td></td></tr>
	</table></form>";
	echo "<form method='POST' action='adminview.php'>
	<table align='center'><tr align='center'><td colspan='3' class='label'>View Passenger Detail</td></tr><tr>
	<td class='label'>Select Date<td><input type='text' style='border:1px solid #ABABAB;' name='to'  class='calendarSelectDate' id='date' size='15' value='dd-mm-yyyy' onfocus='this.value='''/>
  <div id='calendarDiv'></div></td><td><input type='submit' name='sub' value='Enter' class='greenButton' /></td></tr>
  
	<tr><td></td></tr></table>";
 ?>
 
 
	</td>
    
  </tr>
</table>

  </td>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="footer">Copyright © 2011.Privacy Policy|Terms of Use | XHTML |CSS</td>
  </tr>
</table>
</td>
  </tr>
</table>


</body>
</html>

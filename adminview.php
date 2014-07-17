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
	<h3 align="center" class="h3" id="ctitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Passenger Detail &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='adminhome.php' class="size">Click Back to Home</a></h3>
	
	
	<?php
	if(isset($_POST["sub2"]))
	{
	$pas=$_POST['pas'];
	$da=$_POST['dat'];
	include("db.php");
		$q1="select *from book where dates='$da' and sno='$pas'";
        $res1=mysql_query($q1);
		echo "<table border='0' cellpadding='5' cellspacing='1' align='center'><tr id='ctitle'><td>Name</td><td>Phone No</td><td>Seats</td><td>Fare</td></tr>";
 		while($row1=mysql_fetch_array($res1))
		{
		echo "<tr><td class='label'>".$row1['name']."</td>";
		echo "<td class='label'>".$row1['phone']."</td>";
		echo "<td class='label'>".$row1['seat']."</td>";
		echo " <td class='label'>".$row1['fare']."</td></tr>";
		}
		echo "</table>";
		echo "";
		
	}
	else
	{	
	 $da=$_POST["to"];	
		
		echo"<form action='' method='post'><table border='0' align='center'><tr><td class='label'>Date</td><td><input type='text' name='dat' value='$da' readonly='true' class='text'></td></tr>";
		
		include("db.php");
		$q1="select distinct(sno) from seatname where dates='$da' order by sno asc";
        $res1=mysql_query($q1);
        echo "<tr><td class='label'>Select Bus Number<td><select name='pas'>";
        		
		while($row1=mysql_fetch_array($res1))
		{
		$a=$row1['sno'];
		echo "<option value='$a'>".$row1['sno']."</option>";
		}
		
		echo "</td></tr><tr align='center'><td colspan='2'><input type='submit' class='greenButton' name='sub2' value='Submit'></td></tr></table></form>";  
	}
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

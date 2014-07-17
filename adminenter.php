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
	<h3 align="center" class="h3" id="ctitle">Enter Bus Details</h3>
	
	
<?php
if(isset($_POST["sub1"]))
{
//echo "welcome";


$fromm=$_POST["from"];
$too=$_POST["too"];
$bustypee=$_POST["bustype"];
$deptimee=$_POST["deptime"];
$faree=$_POST["fare"];
$totseatt=$_POST["totseat"];
$datess=$_POST["dates"];
include("db.php");

//echo $q="insert into bu(sno,src,to,bustype,deptime,fare,totseat,dates)values('$sno','$from','$to','$bustype','$deptime','$fare','$totseat','$dates')";

$test="insert into dailytrips(src,des,bustype,deptime,fare,totseat,dates)values('$fromm','$too','$bustypee','$deptimee','$faree','$totseatt','$datess')";


$res=mysql_query($test);

if(!res)
{
echo "Not inserted";
}
else
{
echo "<meta http-equiv='refresh' content='0;url=adminhome.php'>";
}


}
else
{
$dates=$_POST["to"];
echo "<form action='' method='post'><table align='center' border='0'>
<tr><td class='label'>Date</td><td><input type='text' name='dates' value='$dates' readonly='true' class='text'></td></tr>
<tr><td class='label'>Enter Source</td><td><input type='text' name='from' class='text' ></td></tr>
<tr><td class='label'>Enter Destination</td><td><input type='text' name='too' class='text' ></td></tr>
<tr><td class='label'>Bus Type</td><td><input type='text' name='bustype' class='text' ></td></tr>
<tr><td class='label'>Departure</td><td><input type='text' name='deptime' class='text' ></td></tr>
<tr><td class='label'>Fare</td><td><input type='text' name='fare'  class='text'></td></tr>
<tr><td class='label'>Total Seats</td><td><input type='text' name='totseat' class='text' value='32'></td></tr>

<tr><td></td><td ><input type='submit' name='sub1' value='Enter' class='greenButton' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='reset' name='su' class='greenButton' value='clear' ></td></tr>
</table></form>";
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

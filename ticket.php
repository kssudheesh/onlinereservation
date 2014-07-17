<?php  session_start(); ?>
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
	<li><a href="about2.php">About us</a></li>
	<li><a href="trips.php">Back</a></li>
	<!--<li><a href="">Home</a></li>
	<li><a href="">Home</a></li>-->
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
	<h3 align="center" class="h3" id="ctitle">TICKET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='trips.php' class="size"></a></h3>
	<?php 
	$mi=$_SESSION['mid'];
	$md=$_SESSION['mdate'];
    $sas=$_SESSION['seatss'];
		
	include("db.php");
$q1="select *from book where email='$mi' and dates='$md'";
$tic=mysql_query($q1);
$roow=mysql_fetch_array($tic);


echo "<table border='1' align='center'><tr><td colspan='2' align='center'> Ticket</td></tr><tr><td>SNO</td><td>".$roow['sno']."</td></tr><tr><td>Name</td><td>".$roow['name']."</td></tr><tr><td>Phone no</td><td>".$roow['phone']."</td></tr><tr><td>Date</td><td>".$roow['dates']."</td></tr><tr><td>Seat</td><td>".$roow['seat']."</td></tr><tr><td>Fare</td><td>".$roow['fare']."</td></tr><tr><td>Seats</td><td>";
?>
<?php
echo $sas;
?>
<?php
echo "</td></tr></table>";
/*$q3="select * from seats where email='$mi' and dates='$md'";
$res3=mysql_query($q3);
$row2=mysql_fetch_array($res3);


if($row2['A1']=='1')
{
echo $t1='A1'.",";
}
if($row2['A2']=='1')
{
echo $t2='A2'.",";
}
if($row2['A3']=='1')
{
echo $t3='A3'.",";
}
if($row2['A4']=='1')
{
echo $t4='A4'.",";
}
if($row2['B1']=='1')
{
echo $t5='B1'.",";
}
if($row2['B2']=='1')
{
echo $t6='B2'.",";
}
if($row2['B3']=='1')
{
echo $t7='B3'.",";
}
if($row2['B4']=='1')
{
echo $t8='B4'.",";
}
if($row2['C1']=='1')
{
echo $t9='C1'.",";
}
if($row2['C2']=='1')
{
echo $t10='C2'.",";
}
if($row2['C3']=='1')
{
echo $t11='C3'.",";
}
if($row2['C4']=='1')
{
echo $t12='C4'.",";
}
if($row2['D1']=='1')
{
echo $t13='D1'.",";
}
if($row2['D2']=='1')
{
echo $t14='D2'.",";
}
if($row2['D3']=='1')
{
echo $t15='D3'.",";
}
if($row2['D4']=='1')
{
echo $t16='D4'.",";
}
if($row2['E1']=='1')
{
echo $t17='E1'.",";
}
if($row2['E2']=='1')
{
echo $t18='E2'.",";
}
if($row2['E3']=='1')
{
echo $t19='E3'.",";
}
if($row2['E4']=='1')
{
echo $t20='E4'.",";
}
if($row2['F1']=='1')
{
echo $t21='F1'.",";
}
if($row2['F2']=='1')
{
echo $t22='F2'.",";
}
if($row2['F3']=='1')
{
echo $t23='F3'.",";
}
if($row2['F4']=='1')
{
echo $t24='F4'.",";
}
if($row2['G1']=='1')
{
echo $t25='G1'.",";
}
if($row2['G2']=='1')
{
echo $t26='G2'.",";
}
if($row2['G3']=='1')
{
echo $t27='G3'.",";
}
if($row2['G4']=='1')
{
echo $t28='G4'.",";
}
if($row2['H1']=='1')
{
echo $t29='H1'.",";
}
if($row2['H2']=='1')
{
echo $t30='H2'.",";
}
if($row2['H3']=='1')
{
echo $t31='H3'.",";
}
if($row2['H4']=='1')
{
echo $t32='H4'.",";
}*/





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

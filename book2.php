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
<script language="javascript">
function validate(r4) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.getElementById('r4').value;
   if(reg.test(address) == false) {
      alert('Invalid Email Address');
	   document.getElementById('r4').value="";
	    document.getElementById('r4').focus();
      return false;
	 
   }
}
function num(e)
{
 var a=e.charCode?e.charCode:e.keyCode;
 if(a!=8)
 {
  if(a<48 || a>57)
  {
   return false;
  }
 }
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
    <td ><table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38" class="menu">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="about2.php">About us</a></li>
	<li><a href="reg.php">Registration</a></li>
	<li><a href="book1.php">back</a></li>
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
	<h3 align="center" class="h3" id="ctitle">Booking Details</h3>
	

<?php

if(isset($_POST["sub"]))
{

$cname=$_POST["cname"];
$email=$_POST["email"];

$_SESSION['mid']=$email;


$phone=$_POST["phone"];
$date=$_POST["date"];



$_SESSION['mdate']=$date;

$seat=$_POST["seat"];
$fear=$_POST["fear"];
$pid=$_POST["pid"];
$s=$_SESSION["no"];
$pay=$_POST["pay"];
$card=$_POST["card"];

include("db.php");
echo $q="insert into book(pid,sno,name,email,phone,dates,seat,fare,payment,cardno)values('$pid','$s','$cname','$email','$phone','$date','$seat','$fear','$pay',md5('$card'))";
$res=mysql_query($q);

$ex="update seats set email='$email' where sno='$s' and dates='$date'"; 
  $rese=mysql_query($ex);

$exx="update seatname set email='$email' where sno='$s' and dates='$date'"; 
  $resed=mysql_query($exx);
 
 if($res!=0)
 {
  ?>
  <script language="javascript">
  
  </script>
  <?php
 echo "<meta http-equiv='refresh' content='0;url=ticket.php'>";
 }
 else
 {
 ?>
 <script language="javascript">
 alert("Your Ticket Registration Successful");
 </script>
 <?php
echo "<meta http-equiv='refresh' content='0;url=ticket.php'>";

}

}
else
{


$amount=0;
$g=$_SESSION["se"];
//echo "wel come".$h14=$_POST["h14"];
include("db.php");
 //echo $_POST["2"];
$s=$_SESSION["no"];
$d=$_SESSION["cdate"];
$q1="select *from dailytrips where sno='$s'";
$res1=mysql_query($q1);

$row1=mysql_fetch_array($res1);
//echo $row1["fare"];
$amount=$g*$row1["fare"];
$from=$row1["src"];
$to=$row1["des"];

$q5="select max(id) from seats where sno='$s' and dates='$d'";
$res5=mysql_query($q5);

$row5=mysql_fetch_array($res5);
$pid=$row5["max(id)"];


echo "<form action='' method='post'><table border='0' align='center' cellpadding='3' cellspacing='1'>

<tr  ><td colspan='1' class='label'>From:</td><td> <label id='$from'><font color='#FF6600' fontfamily='verdana'
fontweight='bold'  size='4px'> $from</font></label></td></tr>

<tr><td class='label'>To</td><td ><label id='$to'> <font color='#FF6600' fontfamily='verdana'
fontweight='bold'  size='4px'> $to</font></label></td></tr>

<tr><td class='label'>PN ID<font color='red' size='-1'>*</font><font color='red' size='-1'></font></td><td><input type='text' name='pid' value='$pid' readonly='true' class='text'></td></tr>


<tr><td class='label'>Bus No</td><td><input type='text' name='cname' value='$s' readonly='true' class='text'></td></tr>

<tr><td class='label'>Name<font color='red' size='-1'>*</font></td><td><input type='text' name='cname' class='text'></td></tr>

<tr><td class='label'>E-Mail<font color='red' size='-1'>*</font></td><td>";?><input type='text' name='email' class='text' id='r4' value="<?php echo $_SESSION['email'];?>"> <?php echo "</td></tr>

<tr><td class='label'>Phone<font color='red' size='-1'>*</font></td><td>"; ?> <input type='text' name='phone' class='text' id="r3" onFocus="focu(this.id)" onKeyPress="return num(event)" maxlength="10"> <?php echo "</td></tr>

<tr><td class='label'>Date</td><td><input type='text' name='date' value='$d' enable='true' readonly='true' class='text'></td></tr>

<tr><td class='label'>Total no of Seats</td><td><input type='text' name='seat' value='$g' readonly='true' class='text'></td></tr>
<tr><td class='label'>Select Payment Mode</td><td><select name='pay' class='text'><option value=''>-Select Mode-</option><option value='American Express'>American Express</option><option value='net Banking'>Net Banking</option><option value='Masterocard'>Maestro Card</option></select></td></tr>
<tr><td class='label'>Card No</td><td><input type='password' name='card' class='text' maxlength='10'></td></tr>

<tr><td class='label'>Total Fare</td><td><input type='text' name='fear' value='$amount' readonly='true' class='text'></td></tr>
<tr><td class='label'>Seat Number</td><td><font color='#FF6600' fontfamily='verdana'
fontweight='bold'  size='4px'>";
?>
<?php


include("db.php");

$q3="select *from seats where sno='$s' and id='$pid'";
$res3=mysql_query($q3);
$row2=mysql_fetch_array($res3);
$tot="";

if($row2['A1']=='1')
{
echo $t1='A1';
$tot=$tot."".$t1;
}
if($row2['A2']=='1')
{
echo $t2='A2';
$tot=$tot."".$t2;
}
if($row2['A3']=='1')
{
echo $t3='A3';
$tot=$tot."".$t3;
}
if($row2['A4']=='1')
{
echo $t4='A4';
$tot=$tot."".$t4;
}
if($row2['B1']=='1')
{
echo $t5='B1';
$tot=$tot."".$t5;
}
if($row2['B2']=='1')
{
echo $t6='B2';
$tot=$tot."".$t6;
}
if($row2['B3']=='1')
{
echo $t7='B3';
$tot=$tot."".$t7;
}
if($row2['B4']=='1')
{
echo $t8='B4';
$tot=$tot."".$t8;
}
if($row2['C1']=='1')
{
echo $t9='C1';
$tot=$tot."".$t9;
}
if($row2['C2']=='1')
{
echo $t10='C2';
$tot=$tot."".$t10;
}
if($row2['C3']=='1')
{
echo $t11='C3';
$tot=$tot."".$t11;
}
if($row2['C4']=='1')
{
echo $t12='C4';
$tot=$tot."".$t12;
}
if($row2['D1']=='1')
{
echo $t13='D1';
$tot=$tot."".$t13;
}
if($row2['D2']=='1')
{
echo $t14='D2';
$tot=$tot."".$t14;
}
if($row2['D3']=='1')
{
echo $t15='D3';
$tot=$tot."".$t15;
}
if($row2['D4']=='1')
{
echo $t16='D4';
$tot=$tot."".$t16;
}
if($row2['E1']=='1')
{
echo $t17='E1';
$tot=$tot."".$t17;
}
if($row2['E2']=='1')
{
echo $t18='E2';
$tot=$tot."".$t18;
}
if($row2['E3']=='1')
{
echo $t19='E3';
$tot=$tot."".$t19;
}
if($row2['E4']=='1')
{
echo $t20='E4';
$tot=$tot."".$t20;
}
if($row2['F1']=='1')
{
echo $t21='F1';
$tot=$tot."".$t21;
}
if($row2['F2']=='1')
{
echo $t22='F2';
$tot=$tot."".$t22;
}
if($row2['F3']=='1')
{
echo $t23='F3';
$tot=$tot."".$t23;
}
if($row2['F4']=='1')
{
echo $t24='F4';
$tot=$tot."".$t24;
}
if($row2['G1']=='1')
{
echo $t25='G1';
$tot=$tot."".$t25;
}
if($row2['G2']=='1')
{
echo $t26='G2';
$tot=$tot."".$t26;
}
if($row2['G3']=='1')
{
echo $t27='G3';
$tot=$tot."".$t27;
}
if($row2['G4']=='1')
{
echo $t28='G4';
$tot=$tot."".$t28;
}
if($row2['H1']=='1')
{
echo $t29='H1';
$tot=$tot."".$t29;
}
if($row2['H2']=='1')
{
echo $t30='H2';
$tot=$tot."".$t30;
}
if($row2['H3']=='1')
{
echo $t31='H3';
$tot=$tot."".$t31;
}
if($row2['H4']=='1')
{
echo $t32='H4';
$tot=$tot."".$t32;
}
$_SESSION["seatss"]=$tot;
?>
<?php
echo "</font></td></tr>
<tr><td></td><td><input type='submit' name='sub' class='greenButton' value='Submit'   ></td></tr>
</table></form>";
}
?>


<!--<a href="trips.php">Click here to book seats</a>-->
<?php 
//echo "wel come to all";
if(isset($_SESSION['cart']))
{
unset($_SESSION['no']);
unset($_SESSION["se"]);
unset($_SESSION["cdate"]);
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

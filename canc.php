<?php session_start();?>
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
function check()
{
var a=document.getElementById('fa').value;
var b=(a*(10/100));
document.getElementById('con').value=a-b;
}
function upperCase()
{
var x=document.getElementById("conn").value;
document.getElementById("conn").value=x.toLowerCase();
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
	<li><a href="about.php">About us</a></li>
	<li><a href="reg.php">Registration</a></li>
	<li><a href="cancel1.php">Cancellation</a></li>
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
	<h3 align="center" class="h3" id="ctitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cancellation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
	
	
	<?php

 $e=$_POST["email"];

$date1=$_SESSION["dat"];
//echo $de=$_SESSION["ghgh"];

$bussno=$_POST['bbno'];
 include("db.php");
$select="select *from seatname where sno='$bussno' and email='$e' and dates='$date1'";
error_reporting(0);
 $result=mysql_query($select);
 $seatname=$_POST["sd"];
 $foo = lcfirst($seatname);
 $row=mysql_fetch_array($result);
 $seat=$row['fare'];
 
$f=$_POST["amt"];//echo $f;echo $e;

 //echo $r=$_POST["red"];
 
 //$q1="update book set fare='$r' where email='$e' and dates='$date1'";
 //$q2="delete from book where email='$e'";
 $de=$_SESSION['dat'];
 $sell="select *from book where sno='$bussno' and email='$e' and dates='$date1'";
 $vie=mysql_query($sell); 
 $show=mysql_fetch_array($vie);
 $seeat=$show[seat];
 $feaar=$show[fare];
 if($seeat>1)
 {
 $se=$seeat-1;
 $fare=$feaar-$f;
$upd="update book set seat='$se',fare='$fare' where sno='$bussno' and email='$e' and dates='$date1'";  
mysql_query($upd);
$seup="update seatname set $foo='' where sno='$bussno' and email='$e' and dates='$date1'";
 mysql_query($seup);
 $seup="update seats set $seatname='' where sno='$bussno' and email='$e' and dates='$date1'";
 mysql_query($seup);
 
}
 else if($seeat==1)
 {
 $se=$seeat-1;
 $fare=$feaar-$f;
$upd="delete from book where sno='$bussno' and email='$e' and dates='$date1'";  
mysql_query($upd);
$seup="delete from seatname where sno='$bussno' and email='$e' and dates='$date1'";
 mysql_query($seup);
$seup="delete from seats where sno='$bussno' and email='$e' and dates='$date1'";
 mysql_query($seup);
 
}
 echo "<table align='center'><tr><td>Successfully Canceled Your Ticket</td></tr>
 <tr><td> <a href='cancel1.php'>One more Cancel</a></table>";

 //$q3="delete from seats where email='$e' and dates='$de'";
 //$q4="delete from seatname where email='$e' and dates='$de'";
 
 /*$res1=mysql_query($q1);
 if(!$res1)
 {
 echo "sorry Ur seat identification is not there";
 }
 else
 {
  //echo "Seat cancellation successful";
  $res2=mysql_query($q2);
  $res3=mysql_query($q3);
  $res4=mysql_query($q4);
  
  echo "<font size='+1' color='red'>Your Refund Amount is Rs.$r</font>";
  		
 
    
  //echo "<meta http-equiv='refresh' content='0;url=index.php'>";
  
  
  
 }*/
 //unset($_SESSION["email"]);

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

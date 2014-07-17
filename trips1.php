<?php session_start(); ?>
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
function abc()
{

var currentTime = new Date()
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
var a=document.getElementById('d').value=(day+ "-" + month + "-" + year);
//alert(a);
var b=document.getElementById('date').value;


if(b>a)
{

}
else
{
alert("Invalid date");

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
    <td><table width="100%" height="40" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="38" class="menu">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="About.php">About us</a></li>
	
	<li><a href="index.php">Back</a></li>
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
    <td width="34%" id="left" valign="top">
	<h3 align="center" class="h3" id="title">TOP ROUTES</h3>
	<ul>
	<li>Chennai - Bangalore</li>
	<li>Chennai - Coimbatore</li>
	<li>Chennai - Madurai</li>
	<li>Chennai - Trichy</li>
	<li>Chennai - Nellai</li>
	<li>Coimbatore - Chennai</li>
	<li>Coimbatore - Trivandrum</li>
	<li>Chennai-Kodaikanal</li>
	<li>Bangalore - Mangalore</li>
	<li>Bangalore - Chennai</li>
	</ul>
	</td>
    <td width="66%" id="center" valign="top"  background="images/newback1.jpg">
	<h3 align="center" class="h3" id="ctitle">Select  Bus</h3>
	<form action="" method="post">
	<table border="0" align="center">
	<tr>
 <td colspan="3"></td>
<td  colspan="0"> <font  face="Verdana" size="2px"  >
Select Date of Journey</font></td>

<td><input type="text" style="border:1px solid #ABABAB;" name="to"  class="calendarSelectDate" id="date" size="15" value="dd-mm-yyyy" onfocus="this.value=''" />
  <div id="calendarDiv"></div><input name="d" type="hidden" value="" id="d" /></td><td><input type="submit" name="sub" value="check"  onclick="abc()" class="greenButton"/></td>
</tr></table>




</form>
	<?php
	if(isset($_POST["sub"]))
	{
include("db.php");
$t=$_POST['to'];
$_SESSION['cdate']=$t;
$q="select *from dailytrips ";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 ?>
 <table height="80" border="0" align="left" cellpadding="1" cellspacing="0" width="100% ">
 
 <tr class="thead">
 <th>Id</th>
 <th>From</th>
 <th>To</th>
 <th>Bustype</th>
 <th>Departure</th>
 <th>Fare</th>
  <th>Seats</th>
  <th></th>
  
 </tr>
 
 <?php
 while($row=mysql_fetch_array($res))
 {
 ?>
 <tr><td><?php echo $sn=$row["sno"];?></td>
 <?php
 //setcookie("sno","sn",time()+3600);
 //echo $_COOKIE["sno"];
 ?>
 
 <td id="t"><?php echo $row["src"];?></td>
  <td><?php echo $row["des"];?></td>
   <td><?php echo $row["bustype"];?></td>
    <td><?php echo $row["deptime"];?></td>
	 <td><?php echo $row["fare"];?></td>
	  <td><?php echo $row["totseat"];?></td>
	  <td><a href="book.php?sno=<?php echo $row["sno"];?>" ></a></td>
	 
     
	 <?php
	
	 $_SESSION["no"]=$row["sno"];
    //setcookie("id",$row["sno"],time()+3600);
 }
 
 ?>
 </tr>
 </table>


 <?php
}
else
 {
 echo "<table height='50%' align='center'><tr><td><center><font size=+1 color=red>Today There is no Bus Available</font></center></td></tr></table>"; 
 }
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

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
	<li><a href="">Home</a></li>
	<li><a href="">Home</a></li>
	<li><a href="">Home</a></li>
	<li><a href="">Home</a></li>
	<li><a href="">Home</a></li>
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
	<h3 align="center" class="h3" id="ctitle">FEATURES</h3>
	<table width="100%" border="0" cellspacing="0"  cellpadding="0">
  <tr>
    <td height="167" id="center">
	<?php
include("db.php");
$q="select *from dailytrips";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 ?>
 <table align="center" border="0" cellspacing="3" cellpadding="1">
 <tr id="ctitle">
 <td>Id</td>
 <td>Src</td>
 <td>To</td>
 <td>Bustype</td>
 <td>Depttime</td>
 <td>Fare</td>
  <td>Seats</td>
  
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
  <td><?php echo $row["to"];?></td>
   <td><?php echo $row["bustype"];?></td>
    <td><?php echo $row["deptime"];?></td>
	 <td><?php echo $row["fare"];?></td>
	  <td><?php echo $row["totseat"];?></td>
	  <td><a href="book.php?sno=<?php echo $row["sno"];?>" ><img src="images/Book.png" style="border:none;" /></a></td>
	 
     
	 <?php
	
	 $_SESSION["no"]=$row["sno"];
    //setcookie("id",$row["sno"],time()+3600);
 }
 ?>
 </tr>
 </table>
 <?php
}
?>
	
	
	</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td height="171" id="center" valign="top">
	<table>
	<tr>
	<td>
	
	</td>
	<td>
	
     </td>
	 </tr>
	 </table>
	</td>
  </tr>
</table>

	</td>
    
  </tr>
</table>

  </td>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="footer">Copyright � 2011.Privacy Policy|Terms of Use | XHTML |CSS</td>
  </tr>
</table>
</td>
  </tr>
</table>


</body>
</html>

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
  $id=$_SESSION["id"];
  $e=$_SESSION["email"];
   
   $busno=$_POST["bno"];
   //echo $_SESSION["ghgh"]=$busno;
  //echo $fg=$busno;
  
 
 //$_SESSION["buno"]=$busno;
 
// echo "<input name='buu' type='hidden' value='$busno' />";
	include("db.php");
	/*"SELECT Persons.LastName, Persons.FirstName, Orders.OrderNo
FROM Persons
INNER JOIN Orders
ON Persons.P_Id=Orders.P_Id"*/
	$q="select b.name,b.email,b.fare,b.dates,b.seat from register as r inner join book as b on b.email='$e' ";
	$res=mysql_query($q);
	if(mysql_num_rows($res)>0)
	{
	 $r=mysql_fetch_array($res);
	
	?>
	
	<form action="canc.php" method="post">
	<table align="center">
<tr>
<td class="label">Name</td>
<td><input name="name" type="text" size="20" class="text" value="<?php echo $r["name"]; ?>" readonly="true"/></td>
</tr>
<tr>
<td class="label">Email</td>
<td><input name="email" type="text" size="20" class="text" id="email" value="<?php echo $em=$r["email"]; ?>" readonly="true" /></td>
</tr>
<tr>
<!--<td class="label">Enter Seat No</td>-->
<td>
<?php
$datte=$_SESSION['dat'];

include("db.php");
		$q1="select a1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
select a2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
select a3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
select a4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
select b1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select b2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
select b3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select b4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select c1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select c2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select c3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select c4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
 select d1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select d2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
 select d3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select d4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select e1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
 select e2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select e3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select e4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select f1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select f2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
 select f3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select f4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select g1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union  
select g2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
select g3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union 
 select g4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select h1 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select h2 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select h3 as s from seatname where email='$em' and dates='$datte' and sno='$busno' union
 select h4 as s from seatname where email='$em' and dates='$datte' and sno='$busno' order by s asc";
        $res1=mysql_query($q1);
		if (mysql_num_rows($res1)>0)
		{
		echo "<tr><td class='label' >Enter Seat No<td><select name='sd'>";
        		
		while($row1=mysql_fetch_array($res1))
		{
		$a=$row1['s'];
		echo "<option value='$a'>".$row1['s']."</option>";
		
		}
		}
		else
		{
		echo "There is no Data";
		}
			
?>

</td>
</tr>
<tr>
<td class="label">Total Amount</td>
<td><input name="amt" type="text" size="20" class="text" id="fa" value="<?php $see="select *from dailytrips where sno='$busno'";
$reess=mysql_query($see); 
$amf=mysql_fetch_array($reess);
echo $amf["fare"];?>" readonly="true"/></td>

</tr>
<tr><td class="label">Bus No.</td><td><input type="text" name="bbno" value="<?php echo $busno; ?>" class="text"/></td></tr>
<tr>
<td class="label">Reduction(10%)</td>
<td><input name="red" type="text" size="20" class="text" onfocus="check()" id="con"/></td>
</tr>
<tr>
<td><input  type="submit" name="reg" value="submit" class="greenButton" /></td>
<td><input type="reset" name="clear" value="clear" class="greenButton" /></td>
<!--<td><input name="redd" type="text" size="20" value="<?php echo $_GET['s']; ?>" class="text"  id="conn"/></td>-->
</tr>

</table>
</form>


	<?php
	}
	else
	{
	 echo "Sorry Ur ticket cannot Registered";
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

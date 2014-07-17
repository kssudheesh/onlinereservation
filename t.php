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
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","s.php?q="+str,true);
xmlhttp.send();
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
    <td width="30%" id="left" valign="top">
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
	<ul>
	<li>Booking online bus tickets with over 250 bus travel operators.</li>
	<li>Home delivery of online bus tickets in Chennai & Bangalore.</li>
	<li>Return bus tickets booking</li>
	<li>Reservation & cancellation online bus tickets.</li>
	</ul>
	</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td height="171" id="center" valign="top">
	<h3 align="center" class="h3" id="ctitle">BUS TICKETS HOME DELIVERY</h3>
	<table>
	<tr>
	<td>
	<table>
	<th><font color="#009933">Coimbatore</font></th>
	<tr>
	<td><img src="images/phn.gif" height="21" width="25" /></td>
	<td>+91 422 42818338</td></tr>
	<tr>
	<td></td>
	<td> +91 422 43324337</td>
	</tr>
	<tr>
	</tr>
	</table>
	</td>
	<td>
	<table>
	<th><font color="#009933">Chennai</font></th>
	<tr>
	<td><img src="images/phn.gif" height="21" width="25" /></td>
	<td> 	+91 80 32477991</td>
	</tr>
	<tr>
	<td></td>
	<td> +91 80 42112753</td>
	</tr>
	</table>
     </td>
	 </tr>
	 </table>
	</td>
  </tr>
</table>

	</td>
    <td width="30%" id="right" valign="top">
	<h3 align="center" class="h3" id="title">USER LOGIN </h3>
	<form action="" method="post">
	<table align="center">
	<tr>
	<td class="label">Username</td>
	<td><input type="text" name="uname" size="15" class="text" /></td>
	</tr>
	<tr>
	<td height="35" class="label">Password</td>
	<td><input type="password" name="pwd" size="15" class="text" /></td>
	</tr>
	<tr>
	<td><input type="submit" name="login" value="Login" class="greenButton" /></td>
	<td><a href="reg.php" class="a">Sign up</a></td>
	</tr>
	</table>
	</form>
	<?php
	if(isset($_POST["login"]))
	{
	 include("db.php");
	 $un=stripslashes($_POST["uname"]);
	 $pwd=stripslashes($_POST["pwd"]);
	 $un=mysql_real_escape_string($un);
	 $pwd=mysql_real_escape_string($pwd);
	 $q="select *from register where email='$un' and pwd='$pwd'";
	 $res=mysql_query($q);
	 $no=mysql_num_rows($res);
  if($no>0)
  {
  ?>
  
  <?php
   
   while($row=mysql_fetch_array($res))
   {
    $_SESSION["id"]=$row['cid']; //echo $_SESSION["cusid"];
	$_SESSION["cname"]=$row['cname']; 
	$_SESSION["add"]=$row['Address']; 
	$_SESSION["mob"]=$row['Mobile']; 
    $_SESSION["password"]=$row['Pwd']; 
   }
    echo "<meta http-equiv='refresh' content='0;url=cushome.php'>";
  }
   else if($un=="Admin" && $pwd=="Admin")
 {
 
 echo "<meta http-equiv='refresh' content='0;url=adminhome.php'>";
 }
 else
 {
  //echo "Invalid Login";
 }
 	
	
	}
	?>
	<br />
	<br />
	<form id="formname" name="formname" method="post" action="" >
	<h3 align="center" class="h3" id="title">SEARCH</h3>
	
<table width="50%" border="0" cellspacing="0" cellpadding="5">
<tr>
<td width="41%" align="right" valign="middle" class="label">From</td>
<td width="59%" align="left" valign="middle">


<?php
				include("db.php");
				$qu="select distinct(src) from dailytrips";
				$result=mysql_query($qu);
				//while($ro=mysql_fetch_array($result))
				?>
			 <select name="users" onChange="showUser(this.value)" class="log">
                  <option value="">-Select One-</option>
                  <?php
				while($r=mysql_fetch_array($result))
				{
				?>
                  <option value="<?php echo $r['src'];?>"> <?php echo $r['src'];?> </option>
                  <?php
				}
				?>
                </select>
				
				</td>
</tr>
<tr>

<td align="right" valign="middle" class="label"></td>
<td align="left" valign="middle">
</td>

</tr>

<tr>
<td class="label">
Date</td>
<td><input type="text" style="border:1px solid #ABABAB;" name="to"  class="calendarSelectDate" id="date" size="15" value="dd-mm-yyyy" onfocus="this.value=''"/>
  <div id="calendarDiv"></div></td>
</tr>
<tr>
<td><!--<input type="submit" name="search" value="search" class="greenButton" />--></td>
<td><!--<input type="reset" name="clear" value="clear" class="greenButton" />--></td>
</tr>
</table>
<div id="txtHint"></div>

</form> 
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

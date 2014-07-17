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
<link href="images/animated_favicon.gif" rel="shortcut icon" type="image/x-icon"/>
<script language="javascript" type="text/javascript">
function check()
{
if(document.getElementById('pwd').value==document.getElementById('con').value)
{

}
else
{
alert("Password Cannot match");
document.getElementById('con').value="";
document.getElementById('pwd').value="";
document.getElementById('con').focus();
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
function validate(email) {
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.getElementById('email').value;
   if(reg.test(address) == false) {
      alert('Invalid Email Address');
	   document.getElementById('email').value="";
	    document.getElementById('email').focus();
      return false;
	 
   }
}
function checkForm(TheForm) 
{
if (TheForm.name.value.length == 0) {
   alert("Enter The name");
   return false;
  }
  if (TheForm.email.value.length == 0) {
   alert("enter emailid ");
   return false;
  }
  if (TheForm.pwd.value.length == 0) {
   alert("enter password");
   return false;
  }
  if (TheForm.rpwd.value.length == 0) {
   alert("enter Confirm password");
   return false;
  }
   if (TheForm.mob.value.length<10) {
   alert("enter Mobileno");
   return false;
  }
  if (TheForm.add.value.length == 0) {
   alert("enter Address");
   return false;
  }
  return true;
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
	<li><a href="index.php">Log out</a></li>
	<!--<li><a href="">Registration</a></li>
	<li><a href="">Home</a></li>
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
    <td width="30%" id="left" valign="top">
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
    <td width="40%" id="center" valign="top">
	<h3 align="center" class="h3" id="ctitle">User Registration </h3>
	<form action="" method="post" onSubmit="return checkForm(this)">
<table align="center">
<tr>
<td class="label">Name</td>
<td><input name="name" type="text" size="20" class="text"/></td>
</tr>
<tr>
<td class="label">Email</td>
<td><input name="email" type="text" size="20" class="text" id="email" onblur="javascript:return validate('email')"/></td>
</tr>
<tr>
<td class="label">Password</td>
<td><input name="pwd" type="password" size="20" class="text" id="pwd"/></td>
</tr>
<tr>
<td class="label">Retype Password</td>
<td><input name="rpwd" type="password" size="20" class="text" onblur="check()" id="con"/></td>
</tr>
<tr>
<td class="label">Mobile No</td>
<td><input name="mob" type="text" size="20" class="text" onkeypress="return num(event)" maxlength="10"/></td>
</tr>
<tr>
<td class="label">Address</td>
<td><textarea name="add" rows="2" cols="17" class="text"></textarea></td>
</tr>
<tr>
<td><input  type="submit" name="reg" value="submit" class="greenButton" /></td>
<td><input type="reset" name="clear" value="clear" class="greenButton" /></td>
</tr>

</table>
<table>
<tr>
	<td>
	<a href="index.php" class="a"></a></td>
	</tr></table>

</form>
<?php
if(isset($_POST["reg"]))
{
include("db.php");
//echo $_POST["reg"];
$n=$_POST["name"];
$e=$_POST["email"];
$p=$_POST["pwd"];
$rp=$_POST["rpwd"];
$m=$_POST["mob"];
$ad=$_POST["add"];
$q="insert into register(name,email,pwd,rpwd,mobileno,address)values('$n','$e','$p','$rp','$m','$ad')";
$res=mysql_query($q);
			if(!$res)
			 {
			 echo "<center><b><font color=red size=2>CAN'T REGISTRED</b></center>";
			 }
			 else
			 {
			echo "<center><b><font color=red size=2>REGISTERED</b></center>";
			 //header("Location:index.php");
			 echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			 }
}
?>

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

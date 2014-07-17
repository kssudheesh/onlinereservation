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
	<h3 align="center" class="h3" id="ctitle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php"><font color="#FFFFFF" size="-1">Logout</font></a></h3>
	
	<form action="" method="post" onSubmit="return checkForm(this)">
	<table width="92%" height="249" border="0"  align="center">
	<tr><td height="243">Profile Options</td>
		<td><a href="edit.php">Edit Profile</a></td>
		<td><a href="pass.php">Change Password</a></td>
	</tr></table>
	</form>


     
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

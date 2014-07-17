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
	<li><a href="about.php">About us</a></li>
	<li><a href="reg.php">Registration</a></li>
	<li><a href="cancel.php">Cancellation</a></li>
	<li><a href="cushome.php">back</a></li>
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
	<h3 align="center" class="h3" id="ctitle">Edit Profile</h3>
	<?php $id=$_GET["id"];
	include("db.php");
	$q="select *from register where id='$id'";
	$res=mysql_query($q);
	if(mysql_num_rows($res)>0)
	{
	 $r=mysql_fetch_array($res);
	
	?>
<form action="" method="post" onSubmit="return checkForm(this)">
<table align="center">
<tr>
<td class="label">Name</td>
<td><input name="name" type="text" size="20" class="text" value="<?php echo $r['name'];?>"/></td>
</tr>
<tr>
<td class="label">Email</td>
<td><input name="email" type="text" size="20" class="text" id="email" value="<?php echo $r['email'];?>" readonly="true"onblur="javascript:return validate('email')"/></td>
</tr>
<tr>
<td class="label">Mobile No</td>
<td><input name="mob" type="text" size="20" class="text" onkeypress="return num(event)" maxlength="10" value="<?php echo $r['mobileno'];?>"/></td>
</tr>
<tr>
<td class="label">Address</td>
<td>
<input type="text" value="<?php echo $r['address'];?>" class="text" name="ad" />
<!--<textarea name="add" rows="2" cols="17" class="text" value="<?php //echo $r['address'];?>"></textarea>--></td>
</tr>
<tr>
<td><input  type="submit" name="reg" value="submit" class="greenButton" /></td>
<td><input type="reset" name="clear" value="clear" class="greenButton" /></td>
</tr>

</table>
</form>

<?php
}
?>
<?php
if(isset($_POST["reg"]))
{
include("db.php");
$n=$_POST["name"];
$e=$_POST["email"];
$m=$_POST["mob"];
$ad=$_POST["ad"];
$q1="update register set name='$n',mobileno='$m',address='$ad' where id='$id'";
$res1=mysql_query($q1);
			 if(!$res1)
			 {
			 echo "cannot Update Profile";
			 }
			 else
			 {
			 //echo "registered";
			 //header("Location:index.php");
			 echo "<meta http-equiv='refresh' content='0;url=cushome.php'>";
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

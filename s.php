<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("bus", $con);

$sql="SELECT * FROM dailytrips WHERE src = '".$q."'";

$result = mysql_query($sql);

?>
<form action="" method="get">
<table align="center">
<tr>
<td class="label">
TO
</td>
<td>
<select name="to">

  <?php
while($row = mysql_fetch_array($result))
{
echo "<option value=$row[to]>$row[to]</option>";
//echo $row["src"];
 }
 
 ?> 
 </select>
</td>
 </tr>
  <tr>
    <td>
	<a href="trips.php"><img src="images/btn_search.gif"  style="border:none;"/></a>
	</td>
    <td></td>
  </tr>
</table>
</form>
<?php 

mysql_close($con);
?>
</body>
</html>

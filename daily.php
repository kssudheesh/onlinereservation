<?php  session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("db.php");
$q="select *from dailytrips";
$res=mysql_query($q);
if(mysql_num_rows($res)>0)
{
 ?>
 <table align="center" border="1">
 <tr  class="we">
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
 <td><?php echo $row["src"];?></td>
  <td><?php echo $row["to"];?></td>
   <td><?php echo $row["bustype"];?></td>
    <td><?php echo $row["deptime"];?></td>
	 <td><?php echo $row["fare"];?></td>
	  <td><?php echo $row["totseat"];?></td>
	  <td><a href="a1.php?sno=<?php echo $row["sno"];?>">BOOK</a></td>
	 </tr>
     
	 <?php
	
	 $_SESSION["no"]=$row["sno"];
   
 }
 ?>
 </tr>
 </table>
 <?php
}
?>
</body>
</html>

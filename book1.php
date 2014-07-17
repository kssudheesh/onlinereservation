<?php  session_start(); ?>
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
	<li><a href="about2.php">About us</a></li>
	<li><a href="trips1.php">back</a></li>
	<!--<li><a href="">Home</a></li>
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
	<?php 


if(isset($_POST["new"]))
{
 include("db.php");
 //echo $_POST["2"];
$s=$_SESSION["no"];
$da=$_SESSION["cdate"];
$q1="select *from dailytrips where sno='$s' and dates='$da'";
$res1=mysql_query($q1);

$row1=mysql_fetch_array($res1);


$src=$row1["src"];//echo $src;
$to=$row1["to"]; echo $to;
$bty=$row1["bustype"];//echo $bty;
$dep=$row1["deptime"];//echo $dep;
$fa=$row1["fare"];//echo $fa;
//echo $d=date('d/m/Y');

$d=$_SESSION["cdate"];

$q2="SELECT min(ava) from seats where sno='$s' and dates='$d'";
$res2=mysql_query($q2);
$r=mysql_fetch_array($res2);
 $r['min(ava)'];

 $j=0;
for($i=1;$i<=32;$i++)
 {
 $j=$j+$_POST["$i"];
}

 $_SESSION["se"]=$j;
 $total=$r['min(ava)']-$j;
 $am=$j*$fa;
 
 $A1=$_POST["1"];$A2=$_POST["2"];$A3=$_POST["3"];$A4=$_POST["4"];
 $B1=$_POST["5"];$B2=$_POST["6"];$B3=$_POST["7"];$B4=$_POST["8"];
 $C1=$_POST["9"];$C2=$_POST["10"];$C3=$_POST["11"];$C4=$_POST["12"];
 $D1=$_POST["13"];$D2=$_POST["14"];$D3=$_POST["15"];$D4=$_POST["16"];
 $E1=$_POST["17"];$E2=$_POST["18"];$E3=$_POST["19"];$E4=$_POST["20"];
 $F1=$_POST["21"];$F2=$_POST["22"];$F3=$_POST["23"];$F4=$_POST["24"];
 $G1=$_POST["25"];$G2=$_POST["26"];$G3=$_POST["27"];$G4=$_POST["28"];
 $H1=$_POST["29"];$H2=$_POST["30"];$H3=$_POST["31"];$H4=$_POST["32"];
$q="insert into seats(sno,src,dest,bustype,dept,fare,total,A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,dates,ava)values('$s','$src','$to','$bty','$dep','$fa','$total','$A1','$A2','$A3','$A4','$B1','$B2','$B3','$B4','$C1','$C2','$C3','$C4','$D1','$D2','$D3','$D4','$E1','$E2','$E3','$E4','$F1','$F2','$F3','$F4','$G1','$G2','$G3','$G4','$H1','$H2','$H3','$H4','$d','$total')";
 
 $res=mysql_query($q);
 if(!$res)
 {
  echo "error:".mysql_error();
 }
 else
 {
echo "<meta http-equiv='refresh' content='0;url=book2.php'>";

}
}

else
{


//$d=date('d/m/Y');
$d=$_SESSION["cdate"];

 $s=$_SESSION["no"];
//echo $sn=$_GET['sno'];
//echo $s=$_COOKIE["id"];

include("db.php");
$q2="select *from seats where sno='$s' and dates='$d'";
//echo $q2;
 //mysql_query('sp('.$postdata.')');
//$res2=mysql_query("call bus('$s')",$con)or die("error".mysql_error());

$res2=mysql_query($q2);

if(mysql_num_rows($res2)>0)
{
 $i=1;
 echo "<form method='POST'><table align='center' bgcolor='#AACCFF' cellpadding='6' cellspacing='3' border='0'>";
 echo "<tr align='center' ><td colspan='5' class='label'><font size='4px'>Seats</font></td></tr><tr>";

while($row2=mysql_fetch_array($res2))
{
//echo $row2["B1"].$row2["C2"];

if($row2["A1"]=="1")
{

$t1=1;

}
/*else
{
$t2=$t2+1;
}*/

if($row2["A2"]=="1")
{
$t2=1;
}
if($row2["A3"]=="1")
{
$t3=1;
}
if($row2["A4"]=="1")
{
$t4=1;
}
if($row2["B1"]=="1")
{
$t5=1;
}
if($row2["B2"]=="1")
{
$t6=1;
}
if($row2["B3"]=="1")
{
$t7=1;
}
if($row2["B4"]=="1")
{
$t8=1;
}
if($row2["C1"]=="1")
{
$t9=1;
}
if($row2["C2"]=="1")
{
$t10=1;
}
if($row2["C3"]=="1")
{
$t11=1;
}
if($row2["C4"]=="1")
{
$t12=1;
}
if($row2["D1"]=="1")
{
$t13=1;
}
if($row2["D2"]=="1")
{
$t14=1;
}
if($row2["D3"]=="1")
{
$t15=1;
}
if($row2["D4"]=="1")
{
$t16=1;
}
if($row2["E1"]=="1")
{
$t17=1;
}
if($row2["E2"]=="1")
{
$t18=1;
}
if($row2["E3"]=="1")
{
$t19=1;
}
if($row2["E4"]=="1")
{
$t20=1;
}
if($row2["F1"]=="1")
{
$t21=1;
}
if($row2["F2"]=="1")
{
$t22=1;
}
if($row2["F3"]=="1")
{
$t23=1;
}
if($row2["F4"]=="1")
{
$t24=1;
}
if($row2["G1"]=="1")
{
$t25=1;
}
if($row2["G2"]=="1")
{
$t26=1;
}
if($row2["G3"]=="1")
{
$t27=1;
}
if($row2["G4"]=="1")
{
$t28=1;
}
if($row2["H1"]=="1")
{
$t29=1;
}
if($row2["H2"]=="1")
{
$t30=1;
}
if($row2["H3"]=="1")
{
$t31=1;
}
if($row2["H4"]=="1")
{
$t32=1;
}


}
?>

<?php
error_reporting(0);
if($t1==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' /><sub>A1</sub></td>";
}
else
{
echo "<td><input type='checkbox' name='1' value='1' id='1' /><sub>A1</sub></td>";
}

/*while($row2=mysql_fetch_array($res2))
{
//echo $row2["B1"].$row2["C2"];


}*/
if($t2==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' /><sub>A2</sub></td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='2' value='1' id='1' />A2</td><td></td>";
}
if($t3==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />A3</td>";
}
else
{
echo "<td><input type='checkbox' name='3' value='1' id='1' />A3</td>";
}

if($t4==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />A4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='4' value='1' id='1' />A4</td></tr>";
}
if($t5==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />B1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='5' value='1' id='1' />B1</td>";
}

if($t6==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />B2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='6' value='1' id='1' />B2</td><td></td>";
}

if($t7==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />B3</td>";
}
else
{
echo "<td><input type='checkbox' name='7' value='1' id='1' />B3</td>";
}

if($t8==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />B4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='8' value='1' id='1' />B4</td></tr>";
}
if($t9==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />C1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='9' value='1' id='1' />C1</td>";
}
if($t10==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />C2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='10' value='1' id='1' />C2</td><td></td>";
}
if($t11==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />C3</td>";
}
else
{
echo "<td><input type='checkbox' name='11' value='1' id='1' />C3</td>";
}
if($t12==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />C4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='12' value='1' id='1' />C4</td></tr>";
}
if($t13==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />D1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='13' value='1' id='1' />D1</td>";
}
if($t14==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />D2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='14' value='1' id='1' />D2</td><td></td>";
}
if($t15==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />D3</td>";
}
else
{
echo "<td><input type='checkbox' name='15' value='1' id='1' />D3</td>";
}
if($t16==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />D4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='16' value='1' id='1' />D4</td></tr>";
}
if($t17==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />E1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='17' value='1' id='1' />E1</td>";
}
if($t18==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />E2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='18' value='1' id='1' />E2</td><td></td>";
}
if($t19==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />E3</td>";
}
else
{
echo "<td><input type='checkbox' name='19' value='1' id='1' />E3</td>";
}
if($t20==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />E4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='20' value='1' id='1' />E4</td></tr>";
}
if($t21==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />F1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='21' value='1' id='1' />F1</td>";
}
if($t22==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />F2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='22' value='1' id='1' />F2</td><td></td>";
}
if($t23==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />F3</td>";
}
else
{
echo "<td><input type='checkbox' name='23' value='1' id='1' />F3</td>";
}
if($t24==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />F4</td>";
}
else
{
echo "<td><input type='checkbox' name='24' value='1' id='1' />F4</td></tr>";
}

if($t25==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />G1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='25' value='1' id='1' />G1</td>";
}
if($t26==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />G2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='26' value='1' id='1' />G2</td><td></td>";
}
if($t27==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />G3</td>";
}
else
{
echo "<td><input type='checkbox' name='27' value='1' id='1' />G3</td>";
}
if($t28==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />G4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='28' value='1' id='1' />G4</td></tr>";
}
if($t29==1)
{
echo "<tr><td><img src='images/img_selectedseat.gif' height='24' width='24' />H1</td>";
}
else
{
echo "<tr><td><input type='checkbox' name='29' value='1' id='1' />H1</td>";
}
if($t30==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />H2</td><td></td>";
}
else
{
echo "<td><input type='checkbox' name='30' value='1' id='1' />H2</td><td></td>";
}
if($t31==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />H3</td>";
}
else
{
echo "<td><input type='checkbox' name='31' value='1' id='1' />H3</td>";
}
if($t32==1)
{
echo "<td><img src='images/img_selectedseat.gif' height='24' width='24' />H4</td></tr>";
}
else
{
echo "<td><input type='checkbox' name='32' value='1' id='1' /><sub>H4</su
b></td></tr>";
}

echo "<tr align='center'><td></td><td></td><td><input type='submit' name='new' value='SUBMIT' class='greenButton'/></td></tr>";

}

echo "</tr></table></form>";

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

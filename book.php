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
	<li><a href="trips.php">back</a></li>
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
    <td width="40%" id="center" valign="top" >
	<h3 align="center" class="h3" id="ctitle">Seats Booking</h3>
	<?php $id=$_GET["sno"];
include("db.php");
$q1="select *from dailytrips where sno=$id";
$res1=mysql_query($q1);

$row1=mysql_fetch_array($res1);

$sn=$row1["sno"];//echo $sn;
$src=$row1["src"];//echo $src;
$t=$row1["des"];//echo $t;
$bty=$row1["bustype"];//echo $bty;
$dep=$row1["deptime"];//echo $dep;
$fa=$row1["fare"];//echo $fa;
$total=$row1["totseat"];//echo $tot;
$d=date('d/m/Y');
if($total==0)
{
?>
<script language="javascript">
document.getElementById("sub").style.display="none";
</script>
<?php
}


?>
<?php 

//$d=$_POST['to'];
$d=$_SESSION['cdate'];
include("db.php");
 $id=$_GET['sno'];
$_SESSION["no"]=$id;
$q2="select *from seats where sno='$id' and dates='$d'";
 $res2=mysql_query($q2);
if(mysql_num_rows($res2)>0)
{
echo "<meta http-equiv='refresh' content='0;url=book1.php'>";


}
else {
if(isset($_POST["sub"]))
{

$j=0;
for($i=1;$i<=32;$i++)
 {
//$j=$j+$_POST["$i"];
if($_POST["$i"]==1)
{
/*var_dump($re=array($j=>$i));
print_r($j);*/
$j=$j+1;
}

}
echo $j;
/*for($j=1;$j<=32;$j++)
{
foreach($re as $j=>$value)
{
$j=2;
echo "val=($j.$value)</br>";
}
}*/


$_SESSION["se"]=$j;

$total=$total-$j;

//echo $am=$j*$fa;

include("db.php");
$d=$_SESSION['cdate'];

$A1=$_POST["1"];$A2=$_POST["2"];$A3=$_POST["3"];$A4=$_POST["4"];
 $B1=$_POST["5"];$B2=$_POST["6"];$B3=$_POST["7"];$B4=$_POST["8"];
 $C1=$_POST["9"];$C2=$_POST["10"];$C3=$_POST["11"];$C4=$_POST["12"];
 $D1=$_POST["13"];$D2=$_POST["14"];$D3=$_POST["15"];$D4=$_POST["16"];
 $E1=$_POST["17"];$E2=$_POST["18"];$E3=$_POST["19"];$E4=$_POST["20"];
 $F1=$_POST["21"];$F2=$_POST["22"];$F3=$_POST["23"];$F4=$_POST["24"];
 $G1=$_POST["25"];$G2=$_POST["26"];$G3=$_POST["27"];$G4=$_POST["28"];
 $H1=$_POST["29"];$H2=$_POST["30"];$H3=$_POST["31"];$H4=$_POST["32"];
 
 if($A1==1)
 {
 echo $a1='A1';
 }
  if($A2==1)
 {
 echo $a2='A2';
 } 
 if($A3==1)
 {
 echo $a3='A3';
 } 
 if($A4==1)
 {
  echo $a4='A4';
 }
 if($B1==1)
 {
 echo $b1='B1';
 }
  if($B2==1)
 {
 echo $b2='B2';
 } 
 if($B3==1)
 {
 echo $b3='B3';
 } 
 if($B4==1)
 {
  echo $b4='B4';
 }
 if($C1==1)
 {
 echo $c1='C1';
 }
  if($C2==1)
 {
 echo $c2='C2';
 } 
 if($C3==1)
 {
 echo $c3='C3';
 } 
 if($C4==1)
 {
  echo $c4='C4';
 }
 if($D1==1)
 {
 echo $d1='D1';
 }
  if($D2==1)
 {
 echo $d2='D2';
 } 
 if($D3==1)
 {
 echo $d3='D3';
 } 
 if($D4==1)
 {
  echo $d4='D4';
 }
 if($E1==1)
 {
 echo $e1='E1';
 }
  if($E2==1)
 {
 echo $e2='E2';
 } 
 if($E3==1)
 {
 echo $e3='E3';
 } 
 if($E4==1)
 {
  echo $e4='E4';
 }
 if($F1==1)
 {
 echo $f1='F1';
 }
  if($F2==1)
 {
 echo $f2='F2';
 } 
 if($F3==1)
 {
 echo $f3='F3';
 } 
 if($F4==1)
 {
  echo $f4='F4';
 }
 if($G1==1)
 {
 echo $g1='G1';
 }
  if($G2==1)
 {
 echo $g2='G2';
 } 
 if($G3==1)
 {
 echo $g3='G3';
 } 
 if($G4==1)
 {
  echo $g4='G4';
 }
 if($H1==1)
 {
 echo $h1='H1';
 }
  if($H2==1)
 {
 echo $h2='H2';
 } 
 if($H3==1)
 {
 echo $h3='H3';
 } 
 if($H4==1)
 {
  $h4='H4';
 
 }
 
 
/*else
{

echo "<meta http-equiv='refresh' content='0;url=book2.php'>";
}
*/

 $q1="insert into seats(sno,src,dest,bustype,dept,fare,total,A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,dates,ava)values('$id','$src','$t','$bty','$dep','$fa','$total','$A1','$A2','$A3','$A4','$B1','$B2','$B3','$B4','$C1','$C2','$C3','$C4','$D1','$D2','$D3','$D4','$E1','$E2','$E3','$E4','$F1','$F2','$F3','$F4','$G1','$G2','$G3','$G4','$H1','$H2','$H3','$H4','$d','$total')";
 $res1=mysql_query($q1);

if(!$res1)
{
echo "not inserted";
}

else
{
$d=$_SESSION['cdate'];
$sno=$_SESSION["no"];
include("db.php");
$sel="select *from seats where sno='$sno' and dates='$d'";

$re1=mysql_query($sel);

while($ro=mysql_fetch_array($re1))
{
$id=$ro["id"];
}
include("db.php");
$ins="insert into seatname(id,sno,a1,a2,a3,a4,b1,b2,b3,b4,c1,c2,c3,c4,d1,d2,d3,d4,e1,e2,e3,e4,f1,f2,f3,f4,g1,g2,g3,g4,h1,h2,h3,h4,dates) values('$id','$sno','$a1','$a2','$a3','$a4','$b1','$b2','$b3','$b4','$c1','$c2','$c3','$c4','$d1','$d2','$d3','$d4','$e1','$e2','$e3','$e4','$f1','$f2','$f3','$f4','$g1','$g2','$g3','$g4','$h1','$h2','$h3','$h4','$d')"; 
$re1=mysql_query($ins);

if(!$re1)
{
echo "not inserted";
}


echo "<meta http-equiv='refresh' content='0;url=book2.php'>";
}

}
else
{
echo "<form method='post' action='' >
<table border='0' cellpadding='6'  cellspacing='3' align='center' bgcolor='#AACCFF'>
<tr align='center' ><td colspan='5'class='label'><font size='4px'>Seats</font></td></tr>

<tr>
<td><input type='checkbox' name='1' value='1' id='1' />A1</td>
<td><input type='checkbox' name='2' value='1' id='2'/>A2</td>
<td></td>
<td><input type='checkbox' name='3' value='1' id='3'/>A3</td>
<td><input type='checkbox' name='4' value='1' id='4'/>A4</td>
</tr>
<tr>
<td><input type='checkbox' name='5' value='1' id='5'/>B1</td>
<td><input type='checkbox' name='6' value='1' id='6'/>B2</td>
<td></td>
<td><input type='checkbox' name='7' value='1' id='7'/>B3</td>
<td><input type='checkbox' name='8' value='1' id='8'/>B4</td>
</tr>
<tr>
<td><input type='checkbox' name='9' value='1'  id='9'/>C1</td>
<td><input type='checkbox' name='10' value='1' id='10'/>C2</td>
<td></td>
<td><input type='checkbox' name='11' value='1' id='11'/>C3</td>
<td><input type='checkbox' name='12' value='1' id='12'/>C4</td>
</tr>
<tr>
<td><input type='checkbox' name='13' value='1' id='13' />D1</td>
<td><input type='checkbox' name='14' value='1' id='14'/>D2</td>
<td></td>
<td><input type='checkbox' name='15' value='1' id='15'/>D3</td>
<td><input type='checkbox' name='16' value='1' id='16'/>D4</td>
</tr>
<tr>
<td><input type='checkbox' name='17' value='1' id='17'/>E1</td>
<td><input type='checkbox' name='18' value='1' id='18'/>E2</td>
<td></td>
<td><input type='checkbox' name='19' value='1' id='19'/>E3</td>
<td><input type='checkbox' name='20' value='1' id='20'/>E4</td>
</tr>
<tr>
<td><input type='checkbox' name='21' value='1' id='21'/>F1</td>
<td><input type='checkbox' name='22' value='1' id='22'/>F2</td>
<td></td>
<td><input type='checkbox' name='23' value='1' id='23'/>F3</td>
<td><input type='checkbox' name='24' value='1' id='24'/>F4</td>
</tr>
<tr>
<td><input type='checkbox' name='25' value='1' id='25'/>G1</td>
<td><input type='checkbox' name='26' value='1' id='26'/>G2</td>
<td></td>
<td><input type='checkbox' name='27' value='1' id='27'/>G3</td>
<td><input type='checkbox' name='28' value='1' id='28'/>G4</td>
</tr>
<tr>
<td><input type='checkbox' name='29' value='1' id='29'/>H1</td>
<td><input type='checkbox' name='30' value='1' id='30'/>H2</td>
<td></td>
<td><input type='checkbox' name='31' value='1' id='31'/>H3</td>
<td><input type='checkbox' name='32' value='1' id='32'/>H4 </td>
</tr>
<TR>
<td></td>
<TD><input type='submit' name='sub' value='SUBMIT' id='sub' class='greenButton'/></TD>

<TD colspan='2'><input type='reset' name='CLEAR' value='CLEAR' class='greenButton'/></TD>
</TR>
</table>
</form>";
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

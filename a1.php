<?php session_start();?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>Untitled Document</title>
<script language="javascript">
function a()
{
 document.getElementByTagName('input')

}
</script>
</head>

<body>
<?php $id=$_GET["sno"];
include("db.php");
$q1="select *from dailytrips where sno=$id";
$res1=mysql_query($q1);

$row1=mysql_fetch_array($res1);

$sn=$row1["sno"];//echo $sn;
$src=$row1["src"];//echo $src;
$to=$row1["to"];//echo $to;
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

 $d=date('d/m/Y');
include("db.php");
 $id=$_GET['sno'];
$_SESSION["no"]=$id;
$q2="select *from seats where sno='$id' and dates='$d'";
 $res2=mysql_query($q2);
if(mysql_num_rows($res2)>0)
{
echo "<meta http-equiv='refresh' content='0;url=b.php'>";


}
else {
if(isset($_POST["sub"]))
{

$j=0;
for($i=1;$i<=32;$i++)
 {
$j=$j+$_POST["$i"];
}
echo $total=$total-$j;

//echo $am=$j*$fa;

include("db.php");

$A1=$_POST["1"];$A2=$_POST["2"];$A3=$_POST["3"];$A4=$_POST["4"];
 $B1=$_POST["5"];$B2=$_POST["6"];$B3=$_POST["7"];$B4=$_POST["8"];
 $C1=$_POST["9"];$C2=$_POST["10"];$C3=$_POST["11"];$C4=$_POST["12"];
 $D1=$_POST["13"];$D2=$_POST["14"];$D3=$_POST["15"];$D4=$_POST["16"];
 $E1=$_POST["17"];$E2=$_POST["18"];$E3=$_POST["19"];$E4=$_POST["20"];
 $F1=$_POST["21"];$F2=$_POST["22"];$F3=$_POST["23"];$F4=$_POST["24"];
 $G1=$_POST["25"];$G2=$_POST["26"];$G3=$_POST["27"];$G4=$_POST["28"];
 $H1=$_POST["29"];$H2=$_POST["30"];$H3=$_POST["31"];$H4=$_POST["32"];
 
 $q1="insert into seats(sno,src,dest,bustype,dept,fare,total,A1,A2,A3,A4,B1,B2,B3,B4,C1,C2,C3,C4,D1,D2,D3,D4,E1,E2,E3,E4,F1,F2,F3,F4,G1,G2,G3,G4,H1,H2,H3,H4,dates,ava)values('$id','$src','$to','$bty','$dep','$fa','$total','$A1','$A2','$A3','$A4','$B1','$B2','$B3','$B4','$C1','$C2','$C3','$C4','$D1','$D2','$D3','$D4','$E1','$E2','$E3','$E4','$F1','$F2','$F3','$F4','$G1','$G2','$G3','$G4','$H1','$H2','$H3','$H4','$d','$total')";
 $res1=mysql_query($q1);

if(!$res1)
{
echo "not inserted";
}
else
{

echo "<meta http-equiv='refresh' content='0;url=c.php'>";
}

}
else
{
echo "<form method='post' action='' >
<table border='1' cellpadding='10'  cellspacing='4' align='center' bgcolor='#AACCFF'>
<tr>
<td><input type='checkbox' name='1' value='1' id='1' />A1</td>
<td><input type='checkbox' name='2' value='1' id='2'/>A2</td>
<td><input type='checkbox' name='3' value='1' id='3' />A3</td>
<td><input type='checkbox' name='4' value='1' id='4'/>A4</td>
</tr>
<tr>
<td><input type='checkbox' name='5' value='1' id='5'/>B1</td>
<td><input type='checkbox' name='6' value='1' id='6'/>B2</td>
<td><input type='checkbox' name='7' value='1' id='7'/>B3</td>
<td><input type='checkbox' name='8' value='1' id='8'/>B4</td>
</tr>
<tr>
<td><input type='checkbox' name='9' value='1'  id='9'/>C1</td>
<td><input type='checkbox' name='10' value='1' id='10'/>C2</td>
<td><input type='checkbox' name='11' value='1' id='11'/>C3</td>
<td><input type='checkbox' name='12' value='1' id='12'/>C4</td>
</tr>
<tr>
<td><input type='checkbox' name='13' value='1' id='13' />D1</td>
<td><input type='checkbox' name='14' value='1' id='14'/>D2</td>
<td><input type='checkbox' name='15' value='1' id='15'/>D3</td>
<td><input type='checkbox' name='16' value='1' id='16'/>D4</td>
</tr>
<tr>
<td><input type='checkbox' name='17' value='1' id='17'/>E1</td>
<td><input type='checkbox' name='18' value='1' id='18'/>E2</td>
<td><input type='checkbox' name='19' value='1' id='19'/>E3</td>
<td><input type='checkbox' name='20' value='1' id='20'/>E4</td>
</tr>
<tr>
<td><input type='checkbox' name='21' value='1' id='21'/>F1</td>
<td><input type='checkbox' name='22' value='1' id='22'/>F2</td>
<td><input type='checkbox' name='23' value='1' id='23'/>F3</td>
<td><input type='checkbox' name='24' value='1' id='24'/>F4</td>
</tr>
<tr>
<td><input type='checkbox' name='25' value='1' id='25'/>G1</td>
<td><input type='checkbox' name='26' value='1' id='26'/>G2</td>
<td><input type='checkbox' name='27' value='1' id='27'/>G3</td>
<td><input type='checkbox' name='28' value='1' id='28'/>G4</td>
</tr>
<tr>
<td><input type='checkbox' name='29' value='1' id='29'/>H1</td>
<td><input type='checkbox' name='30' value='1' id='30'/>H2</td>
<td><input type='checkbox' name='31' value='1' id='31'/>H3</td>
<td><input type='checkbox' name='32' value='1' id='32'/>H4</td>
</tr>
<TR>
<TD colspan='2'><input type='submit' name='sub' value='SUBMIT' id='sub'/></TD>
<TD><input type='reset' name='CLEAR' value='CLEAR' /></TD>
</TR>
</table>
</form>";
}
}
?>



</body>
</html>

<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result1 = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER by exctime ASC");   
echo '<title>ICPS2009 izleti</title>';
echo '<div align="center"><font size="+3"><strong>ICPS2009 izleti</strong></font> </div><br><br>';
echo '<table width="960" border="1">';
echo "<tr>";
echo '<th width="30">R.b.</td>';
echo '<th width="30">Broj</td>';
echo '<th width="200">Ime</td>';
echo '<th width="200">Prezime</td>';
echo '<th width="200">Prvi izbor</td>';
echo '<th width="200">Drugi izbor</td>';
echo '<th width="100">Vrijeme</td>';
echo "</tr>";
$brojac=0;
while($row1 = mysql_fetch_array($result1)){
if ($row1['exctime']!='') {
    $brojac++;
    echo "<tr>";
	echo '<td width="30" align="center">'.$brojac.'</td>';
    echo '<td width="30" align="center">'.$row1['broj'].'</td>';
	echo '<td width="200">'.$row1['firstname'].'</td>';
	echo '<td width="200">'.$row1['lastname'].'</td>';
	echo '<td width="200" align="center">'.$row1['excfirst'].'</td>';
	echo '<td width="200" align="center">'.$row1['excsecond'].'</td>';
	echo '<td width="100" align="center">'.$row1['exctime'].'</td>';
	echo "</tr>";
 }
}
echo "</table>";
mysql_close($con);
?>
<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result1 = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER by lastname");   
echo "<strong> Sudionici: </strong><br>";
echo '<table width="800" border="0">';
while($row1 = mysql_fetch_array($result1)){
  if ($row1['comment']!='Organizator' && $row1['comment']!='Volonter (Zagreb)' && $row1['comment']!='Volonter (Split)') {
    echo "<tr>";
	echo '<td width="410">'.$row1['firstname'].' '.$row1['lastname'].'</td>';
	echo '<td width="269">'.$row1['country'].'</td>';
	echo '<td width="107">'.$row1['paid'].'</td>';
	echo "</tr>";
  }
}
echo "</table>";
echo "<br><br><br>";
$result2 = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER by lastname");   
echo "<strong> Volonteri: </strong><br>";
echo '<table width="693" border="0">';
while($row2 = mysql_fetch_array($result2)){
  if ($row2['comment']=='Volonter (Zagreb)' || $row2['comment']=='Volonter (Split)') {
    echo "<tr>";
	echo '<td width="410">'.$row2['firstname'].' '.$row2['lastname'].'</td>';
	echo '<td width="269">'.$row2['email'].'</td>';
	echo "</tr>";
  }
}
echo "</table>";
echo "<br><br><br>";
$result3 = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER by lastname");   
echo "<strong> Organizatori: </strong><br>";
echo '<table width="693" border="0">';
while($row3 = mysql_fetch_array($result3)){
  if ($row3['comment']=='Organizator') {
    echo "<tr>";
	echo '<td width="410">'.$row3['firstname'].' '.$row3['lastname'].'</td>';
	echo '<td width="269">'.$row3['country'].'</td>';
	echo "</tr>";
  }
}
echo "</table>";
echo "<br><br><br>";
$result4 = mysql_query("SELECT * FROM participants WHERE approvedreg='Yes' AND paid='No' and participant='No' ORDER by lastname");   
echo "<strong> Svi ostali kojima je odobrena registracija: </strong><br>";
echo '<table width="693" border="0">';
while($row4 = mysql_fetch_array($result4)){
  echo "<tr>";
  echo '<td width="410">'.$row4['firstname'].' '.$row4['lastname'].'</td>';
  echo '<td width="269">'.$row4['country'].'</td>';
  echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER by exctime ASC");   
echo '<title>ICPS2009 izleti raspored</title>';
echo '<div align="center"><font size="+3"><strong>ICPS2009 izleti - raspored</strong></font> </div><br><br>';
$izletimax=array(0,100,100,200,55,55,10,50,0,0);
$izleti=array(0,0,0,0,0,0,0,0,0,0);
$specijal=0;
while($row = mysql_fetch_array($result)){
if ($row['exctime']!='' && $row['comment']!='Organizator' && $row['comment']!='Volonter (Zagreb)' && $row['comment']!='Volonter (Split)') {
    if ($row['excfirst']=='Zadar') {$first=1;}
	if ($row['excfirst']=='Sibenik') {$first=2;}
	if ($row['excfirst']=='Rafting on Cetina') {$first=3;}
	if ($row['excfirst']=='Makarska') {$first=4;}
	if ($row['excfirst']=='Solin-Kastela-Trogir') {$first=5;}
	if ($row['excfirst']=='Sinj') {$first=6;}
	if ($row['excfirst']=='Duce beach') {$first=7;}
    if ($row['excsecond']=='Zadar') {$second=1;}
	if ($row['excsecond']=='Sibenik') {$second=2;}
	if ($row['excsecond']=='Rafting on Cetina') {$second=3;}
	if ($row['excsecond']=='Makarska') {$second=4;}
	if ($row['excsecond']=='Solin-Kastela-Trogir') {$second=5;}
	if ($row['excsecond']=='Sinj') {$second=6;}
	if ($row['excsecond']=='Duce beach') {$second=7;}
	$kod=0;
	if ($izleti[$first]<$izletimax[$first]) {$izleti[$first]++; $kod=1; $imena[$first][$izleti[$first]]=$row['firstname'].' '.$row['lastname'];}
	if ($izleti[$second]<$izletimax[$second] && $kod==0) {$izleti[$second]++; $kod=1; $imena[$second][$izleti[$second]]=$row['firstname'].' '.$row['lastname'];}
	if ($kod==0) {$specijal++; $imenasp[$specijal]=$row['firstname'].' '.$row['lastname'];}
 }
}
echo '<br><strong>Zadar</strong> (max '.$izletimax[1].'):<br>';
for ($i=1; $i<=$izleti[1]; $i++) {echo $i.'. '.$imena[1][$i]."<br>";}
echo '<br><strong>Šibenik</strong> (max '.$izletimax[2].'):<br>';
for ($i=1; $i<=$izleti[2]; $i++) {echo $i.'. '.$imena[2][$i]."<br>";}
echo '<br><strong>Rafting on river Cetina</strong> (max '.$izletimax[3].'):<br>';
for ($i=1; $i<=$izleti[3]; $i++) {echo $i.'. '.$imena[3][$i]."<br>";}
echo '<br><strong>Makarska</strong> (max '.$izletimax[4].'):<br>';
for ($i=1; $i<=$izleti[4]; $i++) {echo $i.'. '.$imena[4][$i]."<br>";}
echo '<br><strong>Solin-Kaštela-Trogir</strong> (max '.$izletimax[5].'):<br>';
for ($i=1; $i<=$izleti[5]; $i++) {echo $i.'. '.$imena[5][$i]."<br>";}
echo '<br><strong>Sinj</strong> (max '.$izletimax[6].'):<br>';
for ($i=1; $i<=$izleti[6]; $i++) {echo $i.'. '.$imena[6][$i]."<br>";}
echo '<br><strong>Du&#263e beach</strong> (max '.$izletimax[7].'):<br>';
for ($i=1; $i<=$izleti[7]; $i++) {echo $i.'. '.$imena[7][$i]."<br>";}
echo '<br><strong>Special</strong>:<br>';
for ($i=1; $i<=$specijal; $i++) {echo $i.'. '.$imenasp[$i]."<br>";}
mysql_close($con);
?>
<?php
session_start();
if ($_SESSION['check']!='ok') {header("location:admin.php");}
?>

<html>
<head>
<title>ICPS2009 database statistics</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
    <td><img src="images/database_statistics.gif" width="400" height="30"></td>
  </tr>
</table>
<p><br>
  <?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants");   
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='200'>Country</th>";
echo "<th width='150'>Registered</th>";
echo "<th width='150'>Approved</th>";
echo "<th width='150'>Paid</th>";
echo "<th width='150'>Participants</th>";
echo "</tr>";

$iter=0;
$arrival = array(0,0,0,0,0);
$departure = array(0,0,0,0,0);
$aug16 = array(0,0,0,0,0);
$aug17 = array(0,0,0,0,0);
$aug18 = array(0,0,0,0,0);
$aug19 = array(0,0,0,0,0);
$aug20 = array(0,0,0,0,0);
$sudionici=0;
$sudionicisvi=0;
$platili=0;
$primljeni=0;
$volonteri=0;
$organizatori=0;
$decki=0;
$cure=0;
$vegetarijanci=0;
$svejedi=0;
while($row = mysql_fetch_array($result))
{
$ikona=0;
if ($row['paid']=='Yes') {$platili++;}
if ($row['approvedreg']=='Yes') {$primljeni++;}
if ($row['participant']=='Yes') {
  $sudionicisvi++;
  if ($row['veg']=='Yes') {$vegetarijanci++;}
  if ($row['veg']=='No') {$svejedi++;}  
  if ($row['sex']=='M') {$decki++;}  
  if ($row['sex']=='F') {$cure++;}  
}
if ($row['comment']=='Volonter (Zagreb)' || $row['comment']=='Volonter (Split)') {$volonteri++;}
if ($row['comment']=='Organizator') {$organizatori++;}

if ($row['participant']=='Yes' && $row['comment']!='Organizator' && $row['comment']!='Volonter (Zagreb)' && $row['comment']!='Volonter (Split)') {
  $sudionici++;
  if ($row['arrival']=='Aug 8') {$arrival[1]++; $ikona=1;}
  if ($row['arrival']=='Aug 9') {$arrival[2]++; $ikona=2;}
  if ($row['arrival']=='Aug 10') {$arrival[3]++; $ikona=3;}
  if ($row['arrival']=='Aug 11') {$arrival[4]++; $ikona=4;}
  if ($row['arrival']=='Aug 12') {$arrival[5]++; $ikona=5;}
  if ($row['departure']=='Aug 16') {$departure[1]++; $aug16[$ikona]++;}
  if ($row['departure']=='Aug 17') {$departure[2]++; $aug17[$ikona]++;}
  if ($row['departure']=='Aug 18') {$departure[3]++; $aug18[$ikona]++;}
  if ($row['departure']=='Aug 19') {$departure[4]++; $aug19[$ikona]++;}
  if ($row['departure']=='Aug 20') {$departure[5]++; $aug20[$ikona]++;}
}
$check=0;
for ($i=1; $i<=$iter; $i++)
  {
  if ($imena[$i]==$row['country']) {
    $brojac[$row['country']]=$brojac[$row['country']]+1;
	if ($row['approvedreg']=='Yes') {$brojac_reg[$row['country']]=$brojac_reg[$row['country']]+1;}
	if ($row['paid']=='Yes') {$brojac_paid[$row['country']]=$brojac_paid[$row['country']]+1;}
	if ($row['participant']=='Yes') {$brojac_part[$row['country']]=$brojac_part[$row['country']]+1;}
    $check=1;
    }
  }
if ($check==0) 
  {
  $iter=$iter+1;
  $imena[$iter]=$row['country'];
  $brojac[$row['country']]=1;
  if ($row['approvedreg']=='Yes') {$brojac_reg[$row['country']]=1;} else {$brojac_reg[$row['country']]=0;}
  if ($row['paid']=='Yes') {$brojac_paid[$row['country']]=1;} else {$brojac_paid[$row['country']]=0;}
  if ($row['participant']=='Yes') {$brojac_part[$row['country']]=1;} else {$brojac_part[$row['country']]=0;}
  }

// Kod za majice
if ($row['approvedreg']=='Yes' && $row['comment']!='Organizator' && $row['comment']!='Volonter (Zagreb)' && $row['comment']!='Volonter (Split)') {$reg[$row['shirt']]++;}
if ($row['participant']=='Yes' && $row['comment']!='Organizator' && $row['comment']!='Volonter (Zagreb)' && $row['comment']!='Volonter (Split)') {$paid[$row['shirt']]++;}
if ($row['comment']=='Volonter (Zagreb)' || $row['comment']=='Volonter (Split)') {$vol[$row['shirt']]++;}
if ($row['comment']=='Organizator') {$org[$row['shirt']]++;}
}

sort($imena);
$solana=1;    
$total=0;
$total_reg=0;  
$total_paid=0;  
$total_part=0;  
for ($i=0; $i<=($iter-1); $i++)
{
$solana=$solana+1;
if (($solana%2)==0) {echo "<tr bgcolor='#DFDFEE'>";} else {echo "<tr>";}
echo "<td width='200' align='center'>" . $imena[$i] . "</td>";
echo "<td width='150' align='center'>" . $brojac[$imena[$i]] . "</td>";
echo "<td width='150' align='center'>" . $brojac_reg[$imena[$i]] . "</td>";
echo "<td width='150' align='center'>" . $brojac_paid[$imena[$i]] . "</td>";
echo "<td width='150' align='center'>" . $brojac_part[$imena[$i]] . "</td>";
echo "</tr>";
$total=$total+$brojac[$imena[$i]];
$total_reg=$total_reg+$brojac_reg[$imena[$i]];
$total_paid=$total_paid+$brojac_paid[$imena[$i]];
$total_part=$total_part+$brojac_part[$imena[$i]];
}
echo "<tr>";
echo "<td width='200' align='center'><strong>Total</strong></td>";
echo "<td width='150' align='center'><strong>" . $total . "</strong></td>";
echo "<td width='150' align='center'><strong>" . $total_reg . "</strong></td>";
echo "<td width='150' align='center'><strong>" . $total_paid . "</strong></td>";
echo "<td width='150' align='center'><strong>" . $total_part . "</strong></td>";
echo "</tr>";

echo "</table> </span>";
                         
mysql_close($con);
?>
  <br>
  
</p>
<?php 
echo 'Ukupno sudionika (bez volontera i organizatora): '.$sudionici.'<br>'; 
echo 'Ukupno volontera: '.$volonteri.'<br>'; 
echo 'Ukupno organizatora: '.$organizatori; 
?>
<br>
<br>
<br>
<br>
<span class="link"><font size="+2">Arrivals &amp; Departures</font></span> 
<ul>
  <li>U tablicama su uvrsteni samo oni koji se vode kao sudionici i izbaceni su 
    organizatori i volonteri (paznja na specijalne slucajeve koji dolaze prije 
    8.8. ili poslije 20.8.) - to je sve puno tocnije uredjeno u tablice_smjestaj.xls</li>
</ul>
<table width="200" border="0">
  <tr> 
    <td colspan="2"><div align="center"><strong>Arrival</strong></div></td>
  </tr>
  <tr> 
    <td width="140">August 8</td>
    <td width="260"><?php echo $arrival[1]; ?></td>
  </tr>
  <tr> 
    <td>August 9</td>
    <td><?php echo $arrival[2]; ?></td>
  </tr>
  <tr> 
    <td>August 10</td>
    <td><?php echo $arrival[3]; ?></td>
  </tr>
  <tr> 
    <td>August 11</td>
    <td><?php echo $arrival[4]; ?></td>
  </tr>
  <tr> 
    <td>August 12</td>
    <td><?php echo $arrival[5]; ?></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="2"><div align="center"><strong>Departure</strong></div></td>
  </tr>
  <tr>
    <td>August 16</td>
    <td><?php echo $departure[1]; ?></td>
  </tr>
  <tr>
    <td>August 17</td>
    <td><?php echo $departure[2]; ?></td>
  </tr>
  <tr>
    <td>August 18</td>
    <td><?php echo $departure[3]; ?></td>
  </tr>
  <tr>
    <td>August 19</td>
    <td><?php echo $departure[4]; ?></td>
  </tr>
  <tr>
    <td>August 20</td>
    <td><?php echo $departure[5]; ?></td>
  </tr>
</table>
<br><br>
<p><strong>Combinations: </strong></p>
<table width="480" border="1">
  <tr align="center"> 
    <td width="80">&nbsp;</td>
    <td width="80"><div align="center"><strong>Aug 8</strong></div></td>
    <td width="80"><div align="center"><strong>Aug 9</strong></div></td>
    <td width="80"><div align="center"><strong>Aug 10</strong></div></td>
    <td width="80"><div align="center"><strong>Aug 11</strong></div></td>
    <td width="80"><div align="center"><strong>Aug 12</strong></div></td>
  </tr>
  <tr align="center"> 
    <td width="80"><div align="center"><strong>Aug 16</strong></div></td>
    <td width="80"><?php echo $aug16[1]; ?></td>
    <td width="80"><?php echo $aug16[2]; ?></td>
    <td width="80"><?php echo $aug16[3]; ?></td>
    <td width="80"><?php echo $aug16[4]; ?></td>
    <td width="80"><?php echo $aug16[5]; ?></td>
  </tr>
  <tr align="center"> 
    <td width="80"><div align="center"><strong>Aug 17</strong></div></td>
    <td width="80"><?php echo $aug17[1]; ?></td>
    <td width="80"><?php echo $aug17[2]; ?></td>
    <td width="80"><?php echo $aug17[3]; ?></td>
    <td width="80"><?php echo $aug17[4]; ?></td>
    <td width="80"><?php echo $aug17[5]; ?></td>
  </tr>
  <tr align="center"> 
    <td width="80"><div align="center"><strong>Aug 18</strong></div></td>
    <td width="80"><?php echo $aug18[1]; ?></td>
    <td width="80"><?php echo $aug18[2]; ?></td>
    <td width="80"><?php echo $aug18[3]; ?></td>
    <td width="80"><?php echo $aug18[4]; ?></td>
    <td width="80"><?php echo $aug18[5]; ?></td>
  </tr>
  <tr align="center"> 
    <td width="80"><div align="center"><strong>Aug 19</strong></div></td>
    <td width="80"><?php echo $aug19[1]; ?></td>
    <td width="80"><?php echo $aug19[2]; ?></td>
    <td width="80"><?php echo $aug19[3]; ?></td>
    <td width="80"><?php echo $aug19[4]; ?></td>
    <td width="80"><?php echo $aug19[5]; ?></td>
  </tr>
  <tr align="center"> 
    <td width="80"><div align="center"><strong>Aug 20</strong></div></td>
    <td width="80"><?php echo $aug20[1]; ?></td>
    <td width="80"><?php echo $aug20[2]; ?></td>
    <td width="80"><?php echo $aug20[3]; ?></td>
    <td width="80"><?php echo $aug20[4]; ?></td>
    <td width="80"><?php echo $aug20[5]; ?></td>
  </tr>
</table>
<p><br>
  <br>
  <br>
  <span class="link"><font size="+2">T-shirt sizes</font></span><font size="+2">: 
  </font></p>
<table width="900" border="1">
  <tr align="center"> 
    <td width="180">&nbsp;</td>
    <td width="80"><div align="center"><strong>XS - f</strong></div></td>
    <td width="80"><div align="center"><strong>S - f</strong></div></td>
    <td width="80"><div align="center"><strong>S - m</strong></div></td>
    <td width="80"><div align="center"><strong>M - f</strong></div></td>
    <td width="80"><div align="center"><strong>M - m</strong></div></td>
    <td width="80"><div align="center"><strong>L - f</strong></div></td>
    <td width="80"><div align="center"><strong>L - m</strong></div></td>
    <td width="80"><div align="center"><strong>XL - m</strong></div></td>
    <td width="80"><div align="center"><strong>XXL - m</strong></div></td>
  </tr>
  <tr align="center"> 
    <td width="180"><strong>Approved registration</strong></td>
    <td width="80"><?php echo $reg['XS-f']; ?></td>
    <td width="80"><?php echo $reg['S-f']; ?></td>
    <td width="80"><?php echo $reg['S-m']; ?></td>
    <td width="80"><?php echo $reg['M-f']; ?></td>
    <td width="80"><?php echo $reg['M-m']; ?></td>
    <td width="80"><?php echo $reg['L-f']; ?></td>
    <td width="80"><?php echo $reg['L-m']; ?></td>
    <td width="80"><?php echo $reg['XL-m']; ?></td>
    <td width="80"><?php echo $reg['XXL-m']; ?></td>
  </tr>
  <tr align="center"> 
    <td width="180"><strong>Participants</strong></td>
    <td width="80"><?php echo $paid['XS-f']; ?></td>
    <td width="80"><?php echo $paid['S-f']; ?></td>
    <td width="80"><?php echo $paid['S-m']; ?></td>
    <td width="80"><?php echo $paid['M-f']; ?></td>
    <td width="80"><?php echo $paid['M-m']; ?></td>
    <td width="80"><?php echo $paid['L-f']; ?></td>
    <td width="80"><?php echo $paid['L-m']; ?></td>
    <td width="80"><?php echo $paid['XL-m']; ?></td>
    <td width="80"><?php echo $paid['XXL-m']; ?></td>
  </tr>
  <tr align="center"> 
    <td><strong>Volunteers</strong></td>
    <td width="80"><?php echo $vol['XS-f']; ?></td>
    <td width="80"><?php echo $vol['S-f']; ?></td>
    <td width="80"><?php echo $vol['S-m']; ?></td>
    <td width="80"><?php echo $vol['M-f']; ?></td>
    <td width="80"><?php echo $vol['M-m']; ?></td>
    <td width="80"><?php echo $vol['L-f']; ?></td>
    <td width="80"><?php echo $vol['L-m']; ?></td>
    <td width="80"><?php echo $vol['XL-m']; ?></td>
    <td width="80"><?php echo $vol['XXL-m']; ?></td>
  </tr>
  <tr align="center"> 
    <td><strong>Organizers</strong></td>
    <td width="80"><?php echo $org['XS-f']; ?></td>
    <td width="80"><?php echo $org['S-f']; ?></td>
    <td width="80"><?php echo $org['S-m']; ?></td>
    <td width="80"><?php echo $org['M-f']; ?></td>
    <td width="80"><?php echo $org['M-m']; ?></td>
    <td width="80"><?php echo $org['L-f']; ?></td>
    <td width="80"><?php echo $org['L-m']; ?></td>
    <td width="80"><?php echo $org['XL-m']; ?></td>
    <td width="80"><?php echo $org['XXL-m']; ?></td>
  </tr>
</table>
<p><br>
  Prvi red tablice vezan je za one kojima je registracija odobrena, dok se drugi 
  red odnosi samo na sudionike. Iz ta dva reda izuzete su majice za volontere, 
  cije su velicine dane u trecem redu, te majice za organizatore, cije su velicine 
  u zadnjem redu.</p>
<p>&nbsp;</p>
<p><span class="link"><font size="+2">Other statistics</font></span><font size="+2">: 
  </font> <br>
  Ovdje su uvr&#353;teni svi sudionici (zajedno s volonterima i organizatorima).<br>
  <?php 
  echo 'Vegetarijanaca: '.$vegetarijanci.'<br>'; 
  echo 'Svejeda: '.$svejedi.'<br>';
  echo 'Decki: '.$decki.'<br>';
  echo 'Cure: '.$cure.'<br>';
  ?> 
  </p>
<p>&nbsp;</p>
<p><span class="link"><font size="+2">Izleti</font></span><font size="+2">:</font><br>
  Sudionici koji su se prijavili za izlete mogu se vidjeti <a href="generate/izleti.php" target="_blank">ovdje</a> 
  (poredani su po redu prijavljivanja za izlete, osim par slucajeva nepotizma 
  :). </p>
</body>

</html>
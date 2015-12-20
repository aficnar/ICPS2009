<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM upitnik");   
$brojac=0;
$p1 = array(0,0,0,0,0);
$p2 = array(0,0,0,0,0);
$p3 = array(0,0,0,0,0);
$p4 = array(0,0,0,0,0);
$p5 = array(0,0,0,0,0);
while($row = mysql_fetch_array($result)){
  $brojac++;
  $p1[$row['p1']]++;
  $p2[$row['p2']]++;
  $p3[$row['p3']]++;
  $p4[$row['p4']]++;
  $p5[$row['p5']]++;
}
?>

<html>
<head>
<title>ICPS2009 EPSI Questionnaire - results</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
    <td><img src="images/epsi%20results.gif" width="500" height="30"></td>
  </tr>
</table>
<p><span class="linkCopy">Number of responses:</span> <?php echo "<strong>".$brojac."</strong>"; ?> 
<p><span class="linkCopy">1.) How often do you use Wikipedia?</span> 
<table width="313" border="0">
  <tr> 
    <td width="146">Nearly always</td>
    <td width="74"><div align="center"><?php echo "<strong>".$p1[1]."</strong>"; ?> </div></td>
    <td width="79"><div align="center"><?php echo "(".round($p1[1]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>Often</td>
    <td><div align="center"><?php echo "<strong>".$p1[2]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p1[2]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>Sometimes</td>
    <td><div align="center"><?php echo "<strong>".$p1[3]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p1[3]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>Rarely</td>
    <td><div align="center"><?php echo "<strong>".$p1[4]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p1[4]/$brojac*100)."%)"; ?></div></td>
  </tr>
</table>
<p><span class="linkCopy">2.) Is Wikipedia your start point for a web-research on the 
  web?</span>
<table width="313" border="0">
  <tr> 
    <td width="146">Yes</td>
    <td width="74"><div align="center"><?php echo "<strong>".$p2[1]."</strong>"; ?> 
      </div></td>
    <td width="79"><div align="center"><?php echo "(".round($p2[1]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>No</td>
    <td><div align="center"><?php echo "<strong>".$p2[2]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p2[2]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>Sometimes</td>
    <td><div align="center"><?php echo "<strong>".$p2[3]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p2[3]/$brojac*100)."%)"; ?></div></td>
  </tr>
</table>
<p><span class="linkCopy">3.) Do you also contribute to articles on Wikipedia?</span>
<table width="313" border="0">
  <tr> 
    <td width="146">Yes</td>
    <td width="74"><div align="center"><?php echo "<strong>".$p3[1]."</strong>"; ?> 
      </div></td>
    <td width="79"><div align="center"><?php echo "(".round($p3[1]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>No</td>
    <td><div align="center"><?php echo "<strong>".$p3[2]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p3[2]/$brojac*100)."%)"; ?></div></td>
  </tr>
</table>
<p><span class="linkCopy">4.) Are you using the references given in Wikipedia 
  for further search on the web?</span> 
<table width="313" border="0">
  <tr> 
    <td width="146">Yes</td>
    <td width="74"><div align="center"><?php echo "<strong>".$p4[1]."</strong>"; ?> 
      </div></td>
    <td width="79"><div align="center"><?php echo "(".round($p4[1]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>No</td>
    <td><div align="center"><?php echo "<strong>".$p4[2]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p4[2]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>Sometimes</td>
    <td><div align="center"><?php echo "<strong>".$p4[3]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p4[3]/$brojac*100)."%)"; ?></div></td>
  </tr>
</table>
<p><span class="linkCopy">5.) Do you think that Wikipedia is a trustworthy source?</span> 
<table width="313" border="0">
  <tr> 
    <td width="146">Yes</td>
    <td width="74"><div align="center"><?php echo "<strong>".$p5[1]."</strong>"; ?> 
      </div></td>
    <td width="79"><div align="center"><?php echo "(".round($p5[1]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>In most cases</td>
    <td><div align="center"><?php echo "<strong>".$p5[2]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p5[2]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>Sometimes</td>
    <td><div align="center"><?php echo "<strong>".$p5[3]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p5[3]/$brojac*100)."%)"; ?></div></td>
  </tr>
  <tr> 
    <td>No</td>
    <td><div align="center"><?php echo "<strong>".$p5[4]."</strong>"; ?></div></td>
    <td><div align="center"><?php echo "(".round($p5[4]/$brojac*100)."%)"; ?></div></td>
  </tr>
</table>

<p class="linkCopy">Your comments:</p>
<?php
$result = mysql_query("SELECT * FROM upitnik");   
echo '<table width="600" border="0">';
while($row = mysql_fetch_array($result)){
  if ($row['comment']!='') {
    echo '<tr><td>'.$row['comment'].'</td></tr><tr><td><hr align="left" width="600" size="1" noshade></td></tr>';
  }
}
echo '</table>';
mysql_close($con);
?>
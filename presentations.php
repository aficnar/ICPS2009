<?php
// session_start();
// if ($_SESSION['check']!='ok') {header("location:admin.php");}
?>

<html>
<head>
<title>ICPS2009 presentations</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
  </tr>
</table>
  

<strong><br>
Napomene:</strong> 
<ul>
  <li> tablice ukljucuju samo one kojima je odobrena registracija, s time da sam 
    izbacio neke specijalne slucajeve za koje znam da su odustali ili su poslali 
    pismo za refundaciju i slicno</li>
  <li>ako je netko od autora prezentacije platio fee (ili je specijalni slucaj 
    za koji se podrazumijeva da je platio) - drugim rijecima ako je sudionik, onda je pozadina zelena, a ako nije 
    (jos) platio, onda je crvena 
    <ul>
      <li>u petak (17. srpnja) cemo imati bas sve uplate registrirane</li>
    </ul>
  </li>
  <li>postere znaci sve odobravamo, treba samo vidjeti da li ima nekih koji su 
    potpuno necitki da ih se odbije</li>
  <li><strong>prijedlog:</strong> predavanja traju 15 min, imaju max 5 min za 
    pitanja i 5 min za promjenu predavaca tako da: 
    <ul>
      <li>blok od dva sata: 20 + 5 + 20 + 5 + 20 + 5 + 20 + 5 + 20 = 120 min -&gt; 
        5 predavanja u bloku od dva sata</li>
      <li>blok od tri sata: 20 + 5 + 20 + 5 + 20 + 5 + 20 + 5 + 20 + 5 + 20 + 
        5 + 20 = 170 min -&gt; 7 predavanja u bloku od tri sata</li>
      <li>konacno: 
        <ul>
          <li> (5 predavanja u bloku od dva sata) x (3 paralelna sessiona) x (4 
            bloka od dva sata) + (7 predavanja u bloku od tri sata) x (3 paralelna 
            sessiona) = <strong>81 predavanje</strong></li>
        </ul>
      </li>
    </ul>
  </li>
  <li> ideja je znaci da svatko od nas trojice dodijeli 
    <ul>
      <li>0 = sigurno ne prihvacamo</li>
      <li>1 = mozda prihvacamo</li>
      <li>2 = sigurno prihvacamo</li>
    </ul>
  </li>
  <li>moramo sloziti nakon ovoga raspored (koja predavanja idu paralelno, koji 
    dan itd.)</li>
   <li>Damir Ribic i Milan Vrucinic smo odobrili predavanja jer im je hitno trebala potvrdnica</li>
  <li>specijalni slucajevi: 
    <ul>
      <li>Milan Vrucinic: ima sluzbeno prijavljeno predavanje, a hoce odrzati 
        i poster (abstract postera je u special req.)</li>
      <li>&ETH;orde Smiljic: dodatni poster</li>
      <li>Dajana Vranje&#353;, &ETH;orde Smiljic, Milan Gligoric, Nemanja Rakic, 
        Dalibor Obradovic, Jelena Kovacevic: takodjer dodatni poster</li>
      <li>Sebastian Szwarc ima predavanje i poster na istu temu</li>
    </ul>
  </li>
</ul>
<br>
<?php


$special = array(618,653,300,622,295,36,182,65,234,431,432,433,477,205);
$exclusion = array(377,345);

$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants");   
$result1=$result;
$brojac=0;
echo "<hr>";
echo "<div align='center'><span class='linksredina'><font size='7'>Lectures</font></span></div>";
echo "<hr><br><br>";

echo "<span class='link'>Astrophysics & Cosmology</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[1]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Astrophysics &amp; Cosmology' && $row['approvedreg']=='Yes' && $kontrola3==0) {
    $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}
	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";
	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  echo "";
	  $brojac_lecture[1]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[1].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Atomic Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[2]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Atomic Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
    $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}
	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[2]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[2].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Biophysics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[3]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Biophysics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[3]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[3].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Computational Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[4]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Computational Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[4]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[4].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Condensed Matter</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[5]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Condensed Matter' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[5]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[5].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Geophysics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[6]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Geophysics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[6]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[6].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>GR & Quantum Cosmology</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[7]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='GR &amp; Quantum Cosmology' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[7]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[7].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>High Energy & Particle</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[8]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='High Energy &amp; Particle' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[8]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[8].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Mathematical Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[9]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Mathematical Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[9]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[9].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Medical Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[10]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Medical Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[10]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[10].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Nuclear Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[11]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Nuclear Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[11]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[11].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Quantum Physics (general)</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[12]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Quantum Physics (general)' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[12]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[12].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Other Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[13]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Other Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[13]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[13].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Other</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_lecture[14]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Lecture' && $row['area']=='Other' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_lecture[14]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_lecture[14].'</strong>';
echo "<br><br><br>
";
$total_lecture=0;
for ($i=1; $i<=14; $i++){$total_lecture=$total_lecture+$brojac_lecture[$i];}
echo "<span class='link'>Total lectures: ".$total_lecture.'</span>';
echo "<br><br><br><br><br><br><br>";


// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------------------------------------------------------------------------------------------


echo "<hr>";
echo "<div align='center'><span class='linksredina'><font size='7'>Posters</font></span></div>";
echo "<hr><br><br>";
$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Astrophysics & Cosmology</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[1]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Astrophysics &amp; Cosmology' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[1]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[1].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Atomic Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[2]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Atomic Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[2]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[2].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Biophysics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[3]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Biophysics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[3]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[3].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Computational Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[4]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Computational Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[4]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[4].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Condensed Matter</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[5]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Condensed Matter' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[5]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[5].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Geophysics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[6]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Geophysics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[6]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[6].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>GR & Quantum Cosmology</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[7]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='GR &amp; Quantum Cosmology' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[7]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[7].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>High Energy & Particle</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[8]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='High Energy &amp; Particle' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[8]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[8].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Mathematical Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[9]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Mathematical Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[9]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[9].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Medical Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[10]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Medical Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[10]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[10].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Nuclear Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[11]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Nuclear Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[11]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[11].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Quantum Physics (general)</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[12]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Quantum Physics (general)' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[12]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[12].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Other Physics</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[13]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Other Physics' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[13]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[13].'</strong>';
echo "<br><br><br>
";


// -------------------------------------------------------------------------------------------------------------------------------------------

$result = mysql_query("SELECT * FROM participants"); 
echo "<span class='link'>Other</span><br>";
echo "<table border='1' class='malitekst' cellpadding='3' width='800'> <tr>";
echo "<th width='400'>Title</th>";
echo "<th width='300'>Authors</th>";
echo "<th width='100'>Abstract</th>";
echo "</tr>";
$brojac_poster[14]=0;
while($row = mysql_fetch_array($result)){
  $kontrola3=0;
  for ($i=0; $i<count($exclusion); $i++){if ($exclusion[$i]==$row['broj']) {$kontrola3=1;}}
  if ($row['participation']=='Poster' && $row['area']=='Other' && $row['approvedreg']=='Yes' && $kontrola3==0) {
        $kontrola=0;
	$kontrola2=0;
    for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
	for ($i=0; $i<count($special); $i++){if ($special[$i]==$row['broj']) {$kontrola2=1;}}

	if ($kontrola==0) {
	  $brojac++;
	  $naslovi[$brojac]=$row['title'];
	  if ($row['participant']=='Yes') 
	    echo "<tr bgcolor='#00CC66'>";
	  else
	    echo "<tr bgcolor='#996666'>";	  if ($row['prihvaceno']=='Yes') {echo "<td width='400'><font color='#0000FF'><strong>" . $row['title'] . "</strong></font></td>";} else {echo "<td width='400'>" . $row['title'] . "</td>";}
	  if ($row['prihvaceno']=='Yes') {echo "<td width='300'><font color='#0000FF'><strong>" . $row['authors'] . "</strong></font></td>";} else {echo "<td width='300'>" . $row['authors'] . "</td>";}	  
	  echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';
	  echo "</tr>";
	  $brojac_poster[14]++;
	}
  }
}
echo "</table>";
echo "<strong>Total: ".$brojac_poster[14].'</strong>';
echo "<br><br><br>
";
$total_poster=0;
for ($i=1; $i<=14; $i++){$total_poster=$total_poster+$brojac_poster[$i];}
echo "<span class='link'>Total posters: ".$total_poster.'</span>';


                         
mysql_close($con);
?></p>
</p> 
</body>
<script language="JavaScript">
function ootvori(mirko) {window.open(mirko,"Abstract","menubar=no,width=650,height=400,toolbar=no");}
</script>
</html>
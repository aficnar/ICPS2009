<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con) {die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER BY lastname");  
$brojac=0; 
while($row = mysql_fetch_array($result)){
  if ($row['comment']!='Organizator' && $row['comment']!='Volonter (Zagreb)' && $row['comment']!='Volonter (Split)') {
  $brojac++;
  echo "\\thispagestyle{empty}  <br>";
  echo "\\vskip -2cm  <br>";
  echo "\\begin{figure}[!ht]  <br>";
  echo "\\flushleft\\includegraphics[width=35mm]{Logo.eps}  <br>";
  echo "\\end{figure}  <br>";
  echo "\\flushright  <br>";
  echo "\\vskip -4 cm  <br>";
  echo "Croatian Physical Society\\\\  <br>";
  echo "Student Section\\\\  <br>";
  echo "Bijeni&#269;ka cesta 32, HR-10000 Zagreb, Croatia\\\\  <br>";
  echo "Tel. +385 1 4605512, fax. +385 1 4680336\\\\  <br>";
  echo "sshfd@fizika.org\\quad\\quad www.fizika.org\\\\  <br>";
  echo "icps2009.hfd.hr  <br>";
  echo "\\vskip 2cm  <br>";
  if ($row['sex']=='M') {echo "\\flushleft{Mr. ".$row['firstname']." ".$row['lastname']."\\\\  <br>";}  
  if ($row['sex']=='F') {echo "\\flushleft{Ms. ".$row['firstname']." ".$row['lastname']."\\\\  <br>";}  
  echo $row['institution']."\\\\  <br>";
  echo $row['city']."\\\\  <br>";
  echo $row['country']."\\\\}  <br>";
  echo "\\vskip 2cm  <br>";
  echo "\\begin{center}\\textbf{\\large{Invoice No. ".$brojac."}}\\end{center}  <br>";
  echo "\\vskip 2cm  <br>";
  echo "\\flushright{15$^{\\textmd{th}}$ July 2009.}  <br>";
  echo "\\vskip 2cm  <br>";
  echo "\\begin{table}[!ht]  <br>";
  echo "\\centering  <br>";
  echo "\\begin{tabular}{cccccc}  <br>";
  echo "\\hline  <br>";
  echo "No. & Description & Unit & Quantity & Price & Subtotal \\\\  <br>";
  echo "\\hline  <br>";
  echo "1. & Conference fee (regular registration) & pcs & 1.00 & 160.00\\texteuro & 160.00\\texteuro \\\\  <br>";
  echo "\\hline  <br>";
  echo "& & & & Total & 160.00\\texteuro\\\\  <br>";
  echo "\\end{tabular}  <br>";
  echo "\\end{table}  <br>";
  echo "\\vskip 1 cm  <br>";
  echo "\\flushright  <br>";
  echo "{Silvia Tomi&#263; $\\quad\\quad\\quad\\quad\\quad\\quad\\quad\\quad\\quad$\\\\  <br>";
  echo "\\vskip 1 cm  <br>";
  echo "President of the Croatian Physical Society  <br>";
  echo "\\newpage <br><br>";
  }
}
mysql_close($con);
?>




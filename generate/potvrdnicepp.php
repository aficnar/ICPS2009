<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con) {die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE prihvaceno='Yes'");   
$brojac=0;
while($row = mysql_fetch_array($result)){
  $kontrola=0;
  for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
  if ($kontrola==0) {
    $brojac++;
    $naslovi[$brojac]=$row['title'];
  }
}
for ($i=1; $i<=$brojac; $i++) {
  $query='SELECT * FROM participants WHERE title="'.$naslovi[$i].'"';
  $result = mysql_query($query);  
  while($row = mysql_fetch_array($result)){
    echo "\\thispagestyle{empty} <br>";
    echo "$$ $$ <br>";
    echo "\\vskip 7 cm <br>";
    echo "\\begin{center}This is to certify that\\end{center} <br>";
    echo "\\vskip 1 cm <br>";
    echo "\\begin{center}\\textit{\\huge{\\textbf{".$row['firstname']." ".$row['lastname']."}}}\\end{center} <br>";
    echo "\\vskip 1 cm <br>";
	if ($row['participation']=='Poster') {echo "\\begin{center}has presented a poster entitled\\end{center} <br>";}
	if ($row['participation']=='Lecture') {echo "\\begin{center}has presented a lecture entitled\\end{center} <br>";}
    echo "\\vskip 1 cm <br>";
    echo "\\begin{center}\\textit{\\LARGE{".$row['title']."}}\\end{center} <br>";
    echo "\\vskip 1 cm <br>";
    echo "\\begin{center}at the ICPS2009 conference, held in Split, Croatia in August 2009.\\end{center} <br>";
    echo "\\vskip 1 cm <br>";
    echo "\\flushright{\\textit{Marko Sever\\hskip 2.5 cm}} <br>";
    echo "\\vskip 2.5 cm <br>";
    echo "\\flushright{\\textit{Chair of the ICPS2009 Organising Committee}} <br>";
    echo "\\newpage <br><br>";
  }
}
mysql_close($con);
?>







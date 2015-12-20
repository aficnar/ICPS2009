<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE participant='Yes'");   
$brojac=-1;
while($row = mysql_fetch_array($result)){
  $kontrola=0;
  for ($i=0; $i<=$brojac; $i++){if ($zemlje[$i]==$row['country']) {$kontrola=1;}}
  if ($kontrola==0) {
    $brojac++;
    $zemlje[$brojac]=$row['country'];
  }
}
sort($zemlje);

for ($i=0; $i<=$brojac; $i++) {
  $query='SELECT * FROM participants WHERE country="'.$zemlje[$i].'" AND participant="Yes" ORDER BY lastname';
  $result = mysql_query($query);  
  echo "\\indent\\indent\\textbf{".$zemlje[$i]."}<br>";
  echo "\\begin{table}[!ht]<br>";
  echo "\\centering<br>";
  echo "\\begin{tabular}{p{0.45\\textwidth}p{0.45\\textwidth}}<br>";
  while($row = mysql_fetch_array($result)){
    if ($row['share']=='Yes') {$email="\\scriptsize ".$row['email'];} else {$email="";}
	echo "\\scriptsize ".$row['firstname']." ".$row['lastname']." & ".$email." \\\\ <br>";	
  }
  echo "\\end{tabular}<br>";
  echo "\\end{table}<br>";
  echo "<br><br>";
}
mysql_close($con);
?>
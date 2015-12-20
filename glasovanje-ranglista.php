<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM vote");   
$brlec=0;
$brpost=0;
$pomocni=0;
while($row = mysql_fetch_array($result)){
  $pomocni++;
  $kod=0;
  for ($i=1; $i<=$brlec; $i++) {
    if ($lectures[$i]==$row['lecture']) {
	  $kod=1;
	  $countlec[$i]++;
	}
  }
  if ($kod==0) {
    $brlec++;
	$lectures[$i]=$row['lecture'];
	$countlec[$i]=1;
  }
  
  $kod=0;
  for ($i=1; $i<=$brpost; $i++) {
    if ($posters[$i]==$row['poster']) {
	  $kod=1;
	  $countpost[$i]++;
	}
  }
  if ($kod==0) {
    $brpost++;
	$posters[$i]=$row['poster'];
	$countpost[$i]=1;
  }
  
}
mysql_close($con);

echo "Ukupno glasova: ".$pomocni."<br><br>";
echo "<strong>Lectures:</strong><br>";
echo '<table width="200" border="1">';
echo "<tr>";
echo "<th>Lecture</th>";
echo "<th>Votes</th>";
echo "</tr>";
for ($i=1; $i<=$brlec; $i++){
  echo "<tr>";
  echo "<td>".$lectures[$i]."</td>";
  echo "<td>".$countlec[$i]."</td>"; 
  echo "</tr>";
}
echo "</table>";
echo "<br><br><strong>Posters:</strong><br>";
echo '<table width="200" border="1">';
echo "<tr>";
echo "<th>Poster</th>";
echo "<th>Votes</th>";
echo "</tr>";
for ($i=1; $i<=$brpost; $i++){
  echo "<tr>";
  echo "<td>".$posters[$i]."</td>";
  echo "<td>".$countpost[$i]."</td>"; 
  echo "</tr>";
}
echo "</table>";
echo '<br><br>Za naci o kojem se predavanju radi: <a href="vote-interno.php" target="_blank">click</a>';
?>
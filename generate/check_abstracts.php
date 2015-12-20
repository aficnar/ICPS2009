<?php

$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants ORDER BY broj");   
while($row = mysql_fetch_array($result))
{
if ($row['participation']=='Poster' || $row['participation']=='Lecture'){
if ($row['participant']=='Yes'){
echo $row['broj'];
echo " ----- ";
echo $row['firstname'].' '.$row['lastname'];
echo " ----- ";
echo $row['authors'];
echo " ----- ";
echo strpos($row['authors'],$row['firstname'].' '.$row['lastname']);
echo "<br>";
//if (strpos($row['authors'],$row['firstname'].' '.$row['lastname'])>=0) 
//  {echo "bla"; echo "<br>";} 
//  else 
//  {echo $row['broj']; echo "<br>";}
//
}
}
}

mysql_close($con);

?>

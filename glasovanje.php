<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM vote");   
echo '<table width="300" border="0">';
while($row = mysql_fetch_array($result)){
echo "<tr>";
echo "<td>".$row['broj']."</td>";
echo "<td>".$row['lecture']."</td>";
echo "<td>".$row['poster']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
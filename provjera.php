<html>
<head>
<title>ICPS2009 Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error());}     
mysql_select_db("icps2009", $con);      
$result = mysql_query("SELECT * FROM participants ORDER BY broj"); 
$n=0;  
while($row = mysql_fetch_array($result))
{
$n=$n+1;
$br[$n]=$row['broj'];
$ime[$n]=$row['firstname'];
$prezime[$n]=$row['lastname'];
}

for ($i=1; $i<=$n; $i++)
{
for ($j=1; $j<=$n; $j++)
{
if ($i!=$j && $ime[$i]==$ime[$j] && $prezime[$i]==$prezime[$j]) {echo $br[$i] . ' & ' . $br[$j] .'<br>'; }
}
}
                         
mysql_close($con);
?>
</p>


</body>
</html>
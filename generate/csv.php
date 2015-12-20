<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result1 = mysql_query("SELECT * FROM participants WHERE participant='Yes' AND share='Yes' ORDER by lastname");   
echo "First Name,Last Name,Display Name,Nickname,Primary Email,Secondary Email,Work Phone,Home Phone,Fax Number,Pager Number,Mobile Number,Home Address,Home Address 2,Home City,Home State,Home ZipCode,Home Country,Work Address,Work Address 2,Work City,Work State,Work ZipCode,Work Country,Job Title,Department,Organization,Web Page 1,Web Page 2,Birth Year,Birth Month,Birth Day,Custom 1,Custom 2,Custom 3,Custom 4,Notes,<br>";
while($row1 = mysql_fetch_array($result1)){
  echo $row1['firstname'].','.$row1['lastname'].','.$row1['firstname'].' '.$row1['lastname'].',,'.$row1['email'].',,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,<br>';
}
mysql_close($con);
?>
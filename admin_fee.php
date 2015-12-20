<?php
session_start();
if ($_SESSION['check']!='ok_fee') {header("location:admin.php");}
?>

<html>
<head>
<title>ICPS2009 Administration - conference fee</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
if (isset($_POST['update'])) {
  $con2 = mysql_connect("localhost","icps2009","DghC11pQ");
  if (!$con2){die('Could not connect: ' . mysql_error());}
  mysql_select_db("icps2009", $con2);
  $result2 = mysql_query("SELECT * FROM participants");
  while($row2 = mysql_fetch_array($result2))
  {
    $ime="cb".$row2['broj'];
	$ime2="rad".$row2['broj'];
    if ($_POST[$ime]=='cb') {$upit='Yes';} else {$upit='No';}
	if ($upit=='Yes' && $row2['paid']=='No') 
	  {mysql_query("UPDATE participants SET participant = '".$upit."' WHERE broj = '".$row2['broj']."'");}
    mysql_query("UPDATE participants SET paid = '".$upit."' WHERE broj = '".$row2['broj']."'");
	mysql_query("UPDATE participants SET approvedreg = '".$_POST[$ime2]."' WHERE broj = '".$row2['broj']."'");
    $to = $row2['email'];
    $subject = "ICPS2009 registration fee payment received";
    $message = '<font face="Arial, Helvetica, sans-serif">*** Please do not reply to this e-mail.***
    <br><br> Dear '. $row2['firstname'] . ' '. $row2['lastname'] . ', <br><br>
    We have received your payment of the ICPS2009 registration fee. This means that you are now officially
    registered for the ICPS2009 conference.<br><br>See you in Split,<br>
    ICPS2009 Organising Committee.<br><br>
    *** Please do not reply to this e-mail.***</font>';
	$subject2 = "ICPS2009 registration approved";
    $message2 = '<font face="Arial, Helvetica, sans-serif">*** Please do not reply to this e-mail.***
    <br><br> Dear '. $row2['firstname'] . ' '. $row2['lastname'] . ', <br><br>
    Your registration for the ICPS2009 has been approved, which means that you can
	now proceed to the payment of the registration fee. Please have in mind that early or late registration fee deadlines
	correspond to the date of the payment of the fee itself and not the date of registration. After you make the payment, 
	please fill out the Payment info part of your account, so that we could process your payment more quickly.<br><br>Sincerely,<br>
    ICPS2009 Organising Committee.<br><br>
    *** Please do not reply to this e-mail.***</font>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= 'From: <noreply_icps2009@hfd.hr>' . "\r\n";
	if ($upit=='Yes' && $row2['paid']=='No'){
      mail($to,$subject,stripslashes($message),$headers);
      mail('icps2009backup@gmail.com',$subject,stripslashes($message),$headers);
    }
	if ($_POST[$ime2]=='Yes' && $row2['approvedreg']=='Que'){
      mail($to,$subject2,stripslashes($message2),$headers);
      mail('icps2009backup@gmail.com',$subject2,stripslashes($message2),$headers);
    }
  }
  mysql_close($con2);
}

?>
<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
    <td width="400"><img src="images/fee%20administration.gif" width="400" height="30"></td>
    <td rowspan="2"> </td>
  </tr>
  <tr> 
    <td width="100">&nbsp;</td>
    <td valign="bottom" width="400"><form name="forma" action="admin.php" method="post">
        <div align="right">Ne zaboravite se odlogirati: <input name="logout" type="submit" value="Logout"></div>
      </form></td>
  </tr>
</table>
<form name="form12" method="post" action="admin_fee.php">
<p><br>
    <font color="#FF0000" size="+2"><strong>Ne koristiti!</strong></font><br>
<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants");
echo "<table border='1' class='malitekst' cellpadding='3' width='560'> <tr>";
echo "<th width='40' rowspan='2'>No.</th>";
echo "<th width='150' rowspan='2'>First name</th>";
echo "<th width='150' rowspan='2'>Last name</th>";
echo "<th width='150' colspan='3'>Approved reg.?</td>";
echo "<th width='70' rowspan='2'>Paid?</th>";
echo "</tr>";
echo "<tr>";
echo "<td width='50' align='center'>Yes</td>";
echo "<td width='50' align='center'>Queue</td>";
echo "<td width='50' align='center'>No</td>";
echo "</tr>";
$i=0;
while($row = mysql_fetch_array($result))
{
  $i=$i+1;
  echo "<tr>";
  echo "<td width='40' align='center'>" . $row['broj'] . "</td>";
  echo "<td width='150'>" . $row['firstname'] . "</td>";
  echo "<td width='150'>" . $row['lastname'] . "</td>";
  if ($row['approvedreg']=='Yes') {echo "<td width='50' align='center'> <input name='rad".$row['broj']."' type='radio' value='Yes' checked='checked'></td>";} 
    else {echo "<td width='50' align='center'> <input name='rad".$row['broj']."' type='radio' value='Yes'></td>";} 
  if ($row['approvedreg']=='Que') {echo "<td width='50' align='center'> <input name='rad".$row['broj']."' type='radio' value='Que' checked='checked'></td>";} 
    else {echo "<td width='50' align='center'> <input name='rad".$row['broj']."' type='radio' value='Que'></td>";} 
  if ($row['approvedreg']=='No') {echo "<td width='50' align='center'> <input name='rad".$row['broj']."' type='radio' value='No' checked='checked'></td>";} 
    else {echo "<td width='50' align='center'> <input name='rad".$row['broj']."' type='radio' value='No'></td>";} 
  if ($row['paid']=='Yes') 
    {echo "<td width='70' align='center'> <input name='cb".$row['broj']."' type='checkbox' value='cb' checked='checked'></td>";} 
    else 
    {echo "<td width='70' align='center'> <input name='cb".$row['broj']."' type='checkbox' value='cb'></td>";}
  echo "</tr>";
}
echo "</table>";   
mysql_close($con);
?>

</p>
<input name="update" type="submit" value="Update">
</form>
</body>
</html>
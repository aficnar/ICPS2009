<?php
session_start();
if ($_SESSION['check']!='ok_mail') {header("location:admin.php");}
?>

<html>
<head>
<title>ICPS2009 Administration - send e-mail to participants</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
if (isset($_POST['mail'])) {
  $con2 = mysql_connect("localhost","icps2009","DghC11pQ");
  if (!$con2){die('Could not connect: ' . mysql_error());}
  mysql_select_db("icps2009", $con2);
  $result2 = mysql_query("SELECT * FROM participants");
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
  $headers .= 'From: <icps2009@fizika.org>' . "\r\n";
  mail('icps2009@fizika.org',$_POST['subject'],stripslashes($_POST['message']),$headers);
  mail('icps2009backup@gmail.com',$_POST['subject'],stripslashes($_POST['message']),$headers);
  while($row2 = mysql_fetch_array($result2))
  {
  	$ime="m".$row2['broj'];
    if ($_POST[$ime]=='cb') {mail($row2['email'],$_POST['subject'],stripslashes($_POST['message']),$headers);	}
	if ($_POST['all']=='cb') {
	  if ($row2['participant']=='Yes') {mail($row2['email'],$_POST['subject'],stripslashes($_POST['message']),$headers);}}	
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
<form name="form12" method="post" action="admin_mail.php">
<table width="800" border="0">
  <tr>
      <td width="79" class="linkCopy">Subject:</td>
    <td width="711"><input name="subject" type="text" id="subject" size="133"></td>
  </tr>
  <tr>
      <td valign="top" class="linkCopy">Text:</td>
    <td><textarea name="message" cols="100" rows="10" id="message"></textarea></td>
  </tr>
</table>

  <p>Send e-mail to all <strong>participants</strong>: 
    <input name="all" type="checkbox" id="all" value="cb">
    <br>
    <br>
    <?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants");
echo "<table border='1' class='malitekst' cellpadding='3' width='410'> <tr>";
echo "<th width='40'>No.</th>";
echo "<th width='150'>First name</th>";
echo "<th width='150'>Last name</th>";
echo "<th width='70'>E-mail</th>";
echo "</tr>";
$i=0;
while($row = mysql_fetch_array($result))
{
  $i=$i+1;
  echo "<tr>";
  echo "<td width='40' align='center'>" . $row['broj'] . "</td>";
  echo "<td width='150'>" . $row['firstname'] . "</td>";
  echo "<td width='150'>" . $row['lastname'] . "</td>";
  echo "<td width='70' align='center'> <input name='m".$row['broj']."' type='checkbox' value='cb'></td>"; 
  echo "</tr>";
}
echo "</table>";   
mysql_close($con);
?>
  </p>
<input name="mail" type="submit" value="Send">
</form>
</body>
</html>
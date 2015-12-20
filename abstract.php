<html>
<head>
<title>ICPS2009 abstract</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE broj='$_GET[brojbroj]'");
$row = mysql_fetch_array($result);
mysql_close($con);
?>
<span class="linkCopy">Presentation for </span> <strong> <?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></strong> <br>
<table width="600" border="0">
  <tr> 
    <td width="100"><strong>Type:</strong></td>
    <td width="500"><?php echo $row['participation']; ?></td>
  </tr>
  <tr> 
    <td width="100"><strong>Title:</strong></td>
    <td width="500"><?php echo $row['title']; ?></td>
  </tr>
  <tr> 
    <td width="100"><strong>Author(s):</strong></td>
    <td width="500"><?php echo $row['authors']; ?></td>
  </tr>
  <tr> 
    <td width="100"><strong>Area:</strong></td>
    <td width="500"><?php echo $row['area']; ?></td>
  </tr>
  <tr> 
    <td width="100"><strong>Abstract:</strong></td>
    <td width="500"></td>
  </tr>
  <tr> 
    <td colspan="2"><?php echo $row['abstract']; ?></td>
  </tr>
</table>
</body>
</html>
<?php
session_start();
$kod=0;
$pitanje=0;
if (isset($_POST['submit'])) {
if ($_POST['username']=="icps" && $_POST['password']=="xxxxx") {
  $_SESSION['check']='ok';
  $_SESSION['mirko']='ok';
  header("location:review.php");
  $pitanje=1;
  }
  else {$kod=1;}
if ($_POST['username']=="money" && $_POST['password']=="xxxxx") {
  $_SESSION['check']='ok_fee';
  $_SESSION['mirko']='ok';
  header("location:admin_fee.php");
  $pitanje=1;
  }
  else {$kod=1;}  
if ($_POST['username']=="mail" && $_POST['password']=="xxxxxx") {
  $_SESSION['check']='ok_mail';
  $_SESSION['mirko']='ok';
  header("location:admin_mail.php");
  $pitanje=1;
  }
  else {$kod=1;}
} 
if ($pitanje==0){session_destroy();}

?>

<html>
<head>
<title>ICPS2009 Administration login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center"><br>
  <br>
  <br>
  <img src="images/logo.gif" width="200" height="200"><br>
  <br>
</div>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="admin.php">
<td>
<?php
if ($kod==1) {echo "Incorrect username and/or password.";}
?>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
          <tr> 
            <td colspan="4"><div align="center"><img src="images/icps2009_administration.gif" width="400" height="30"></div></td>
          </tr>
          <tr> 
            <td width="22">&nbsp;</td>
            <td width="72">Username:</td>
            <td width="5">&nbsp;</td>
            <td width="280"><input name="username" type="text" id="username"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>Password:</td>
            <td>&nbsp;</td>
            <td><input name="password" type="password" id="password"></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Login"></td>
          </tr>
        </table>
</td>
</form>
</tr>
</table>
</body>
</html>
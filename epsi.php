<?php
session_start();
if ($_SESSION['check']!='ok' || $_SESSION['brojcek']=='') {header("location:registration.php");}
$kod=0;
if (isset($_POST['salji'])) {
if ($_POST['p1']=="" || $_POST['p2']=="" || $_POST['p3']=="" || $_POST['p4']=="" || $_POST['p5']=="") {$kod=1;}
}
?>

<html>
<head>
<title>ICPS2009 EPSI Questionnaire</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
    <td><img src="images/epsi.gif" width="400" height="30"></td>
  </tr>
</table>
<p><br>
  <?php
if (!isset($_POST['salji']) || $kod==1) {
echo "Hi ".$_SESSION['firstname']."!<br><br>";
?>
  We are EPSI (European Physics Students Initiative) and we are involved in a 
  european project about the enhancement of physics teaching / learning after 
  the Bologna process in Europe. Inside this project we are the voice of students 
  (for more information, if you are interested, clik <a href="http://www.stepstwo.eu" target="_blank">here</a>). 
  <br>
  <br>
  Actually, in the frame of one of the working group about multimedia in physics 
  teching and learning we are trying to convince all the professors that Wikipedia 
  is not that evil and that it can be a powerful tool to work with for students 
  and for teachers.That's why we are asking you for a little bit of patience and 
  collaboration in filling out this questionnaire. It is short and it is your 
  voice in this project. <br>
  <br>
  Thank you for the collaboration! <br>
  <br>
  EPSI group <br>
  (for more info about us, click <a href="http://www.epheo-epsi.eu" target="_blank">here</a>) 
  <br>
  <br>
<p class="linkCopy"><font size="+2">Questionnaire</font>
<?php
if ($kod==1) {echo "<br><br> <img src='images/usklicnik_manji.jpg' width='20' height='20' border='0' align='left' /> <span class='crvenoerror'>Please choose an answer for each question.</span><br>";}
?>
<form action="epsi.php" method="post" name="quest">
  <table width="975" border="0" class="organizatori">
    <tr> 
      <td width="479">1.) How often do you use Wikipedia?</td>
      <td width="130"><input type="radio" name="p1" value="1">
        Nearly always</td>
      <td width="145"><input type="radio" name="p1" value="2">
        Often </td>
      <td width="119"><input type="radio" name="p1" value="3">
        Sometimes</td>
      <td width="138"><input type="radio" name="p1" value="4">
        Rarely</td>
    </tr>
    <tr> 
      <td>2.) Is Wikipedia your start point for a web-research on the web?</td>
      <td><input type="radio" name="p2" value="1">
        Yes</td>
      <td><input type="radio" name="p2" value="2">
        No</td>
      <td><input type="radio" name="p2" value="3">
        Sometimes</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>3.) Do you also contribute to articles on Wikipedia?</td>
      <td><input type="radio" name="p3" value="1">
        Yes</td>
      <td><input type="radio" name="p3" value="2">
        No</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>4.) Are you using the references given in Wikipedia for further search 
        on the web?</td>
      <td><input type="radio" name="p4" value="1">
        Yes</td>
      <td><input type="radio" name="p4" value="2">
        No</td>
      <td><input type="radio" name="p4" value="3">
        Sometimes</td>
      <td></td>
    </tr>
    <tr> 
      <td>5.) Do you think that Wikipedia is a trustworthy source?</td>
      <td><input type="radio" name="p5" value="1">
        Yes</td>
      <td><input type="radio" name="p5" value="2">
        In most cases</td>
      <td><input type="radio" name="p5" value="3">
        Sometimes</td>
      <td><input type="radio" name="p5" value="4">
        No</td>
    </tr>
    <tr> 
      <td>Something you would like to tell us more (about Wikipedia and its use):</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <textarea name="comment" cols="100" rows="6" id="comment"></textarea></td>
    </tr>
    <tr>
      <td colspan="5"><div align="right">
          <input type="submit" name="salji" value="Send" />
        </div></td>
    </tr>
  </table>
  </form>
 
<?php
} else {
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error() . '<br><br> Please contact the webmaster.');}
mysql_select_db("icps2009", $con);
$sql="INSERT INTO upitnik(broj,p1,p2,p3,p4,p5,comment) VALUES ('$_SESSION[brojcek]','$_POST[p1]','$_POST[p2]','$_POST[p3]','$_POST[p4]','$_POST[p5]','$_POST[comment]')";
if (!mysql_query($sql,$con)){die('Error: ' . mysql_error() . '<br><br> Please contact the webmaster.');}
mysql_close($con);
echo "Thank you for filling out the questionnaire! You can see the results of the questionnaire <a href='epsi_results.php'>here</a>.<br><br> You are now logged out.";
session_destroy();
}
?>
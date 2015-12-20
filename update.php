<?php
session_start();
if (!isset($_SESSION['brojcek'])) {header("location:registration.php");}
if (isset($_POST['epsigumb'])) 
{
  $_SESSION['check']='ok';
  header("location:epsi.php");
}
if (isset($_POST['votegumb'])) 
{
  $_SESSION['check']='ok';
  header("location:vote.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ICPS2009, Split - registration update</title>
<script type="text/javascript" src="news_bar.js"> </script>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
  var i,x,a=document.MM_sr2; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_swapImage2() { //v3.0
  var i,j=0,x,a=MM_swapImage2.arguments; document.MM_sr2=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr2[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="stil.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:0;
	left: 244px;
	top: 193px;
}
.style1 {
	color: #FFFFFF;
	font-size: 35px;
}
-->
</style>
</head>

<body onload="MM_preloadImages('images/zgrada_main_r2_c4_press.jpg','images/zgrada_main_r2_c6_press.jpg','images/zgrada_main_r2_c8_press.jpg','images/zgrada_main_r4_c2_press.jpg','images/zgrada_main_r4_c4_press.jpg','images/zgrada_main_r4_c6_press.jpg','images/zgrada_main_r4_c8_press.jpg','images/plenary_press.gif','images/registration_press.gif','images/accomodation_press.gif','images/social_press.gif','images/sponsors_press.gif','images/about_press.gif','images/kvadratic01.gif','images/kvadratic02.gif','images/kvadratic03.gif','images/kvadratic04.gif','images/kvadratic05.gif','images/kvadratic06.gif','images/kvadratic07.gif','images/event_press.gif'); start();">
<table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/background_manji.gif">
  <tr>
    <td width="10">&nbsp;</td>
    <td width="160"><a href="index.html"><img src="images/logo_normal.jpg" width="160" height="150" border="0" /></a></td>
    <td><div align="left"><a href="index.html"><img src="images/header_manji.gif" width="300" height="150" border="0" /></a></div></td>
    <td width="400"><span class="style1">hidden text  </span><br />
      <table width="360" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><a href="event_overview.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image29','','images/event_press.gif',1);MM_swapImage2('kvadratic02','','images/kvadratic02.gif',1)"><img src="images/event_normal.gif" name="Image29" width="120" height="16" border="0" id="Image29" /></a></td>
          <td><a href="accomodation.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/accomodation_press.gif',1);MM_swapImage2('kvadratic06','','images/kvadratic06.gif',1)"><img src="images/accomodation_normal.gif" name="Image6" width="120" height="16" border="0" id="Image6" /></a></td>
          <td height="18"><a href="social_events.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/social_press.gif',1);MM_swapImage2('kvadratic03','','images/kvadratic03.gif',1)"><img src="images/social_normal.gif" name="Image7" width="120" height="16" border="0" id="Image7" /></a></td>
        </tr>
        <tr>
          <td rowspan="2" valign="middle"><a href="plenary_and_invited_speakers.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/plenary_press.gif',1);MM_swapImage2('kvadratic04','','images/kvadratic04.gif',1)"><img src="images/plenary_normal.gif" name="Image4" width="120" height="27" border="0" id="Image4" /></a></td>
          <td rowspan="2" valign="middle"><a href="registration.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/registration_press.gif',1);MM_swapImage2('kvadratic05','','images/kvadratic05.gif',1)"><img src="images/registration_normal.gif" name="Image5" width="120" height="16" border="0" id="Image5" /></a></td>
          <td height="18"><a href="sponsors.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/sponsors_press.gif',1);MM_swapImage2('kvadratic01','','images/kvadratic01.gif',1)"><img src="images/sponsors_normal.gif" name="Image8" width="120" height="16" border="0" id="Image8" /></a></td>
        </tr>
        <tr>
          <td><a href="about_us.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/about_press.gif',1);MM_swapImage2('kvadratic07','','images/kvadratic07.gif',1)"><img src="images/about_normal.gif" name="Image9" width="120" height="16" border="0" id="Image9" /></a></td>
        </tr>
      </table>
        <br />
    <br /></td>
    <td width="10">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0">
  <tr class="glavna">
    <td colspan="4" valign="bottom" class="gornja_scientific"><table width="98" border="0" align="right">
        <tr valign="bottom">
          <td height="30">&nbsp;</td>
          <td><a href="sponsors.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image8','','images/sponsors_press.gif',1);MM_swapImage2('kvadratic01','','images/kvadratic01.gif',1)"><img name="kvadratic01" id="kvadratic01" src="images/kvadratic08.gif" width="25" height="25" border="0" /></a></td>
          <td><a href="event_overview.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image29','','images/event_press.gif',1);MM_swapImage2('kvadratic02','','images/kvadratic02.gif',1)"><img name="kvadratic02" id="kvadratic02" src="images/kvadratic08.gif" width="25" height="25" border="0" /></a></td>
          <td><a href="social_events.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image7','','images/social_press.gif',1);MM_swapImage2('kvadratic03','','images/kvadratic03.gif',1)"><img name="kvadratic03" id="kvadratic03" src="images/kvadratic08.gif" width="25" height="25" border="0" /></a></td>
          <td>&nbsp;</td>
        </tr>
        <tr valign="top">
          <td><a href="plenary_and_invited_speakers.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/plenary_press.gif',1);MM_swapImage2('kvadratic04','','images/kvadratic04.gif',1)"><img name="kvadratic04" id="kvadratic04" src="images/kvadratic08.gif" width="25" height="25" border="0" /></a></td>
 <td><img name="kvadratic05" id="kvadratic05" src="images/kvadratic05.gif" width="25" height="25" border="0" /></td>
          <td><a href="accomodation.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/accomodation_press.gif',1);MM_swapImage2('kvadratic06','','images/kvadratic06.gif',1)"><img name="kvadratic06" id="kvadratic06" src="images/kvadratic08.gif" width="25" height="25" border="0" /></a></td>
          <td><a href="about_us.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image9','','images/about_press.gif',1);MM_swapImage2('kvadratic07','','images/kvadratic07.gif',1)"><img name="kvadratic07" id="kvadratic07" src="images/kvadratic08.gif" width="25" height="25" border="0" /></a></td>
          <td height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
          </table></td>
  </tr>
  <tr>
    <td width="50" valign="middle"><div align="right"><img src="images/lijevo_crte.gif" /></div></td>
    <td valign="top" class="glavna_registration"> <p><img src="images/registraion_update.gif" width="400" height="30" /> 
        <?php
$kod=0;


if (!isset($_POST['submit'])&&!isset($_POST['payment'])&&!isset($_POST['excursions'])) {
  $kod=1;
  $con3 = mysql_connect("localhost","icps2009","DghC11pQ");
  if (!$con3) {die('Could not connect: ' . mysql_error());}
  mysql_select_db("icps2009", $con3);
  $result3 = mysql_query("SELECT * FROM participants WHERE broj='$_SESSION[brojcek]'");
  $row = mysql_fetch_array($result3);
  $_SESSION['firstname']=$row['firstname'];
  $_SESSION['lastname']=$row['lastname'];
  $_SESSION['sex']=$row['sex'];
  $_POST['institution']=$row['institution'];
  $_POST['city']=$row['city'];
  $_POST['country']=$row['country'];
  $_POST['passport']=$row['passport'];
  $_POST['memtype']=$row['memtype'];
  $_SESSION['email']=$row['email'];
  $_POST['share']=$row['share'];
  $_SESSION['feebank']=$row['feebank'];
  $_SESSION['feeno']=$row['feeno'];
  $_SESSION['feedate']=$row['feedate'];
  $_SESSION['feeamount']=$row['feeamount'];
  $_SESSION['approvedreg']=$row['approvedreg'];
  $_SESSION['excfirst']=$row['excfirst'];
  $_SESSION['excsecond']=$row['excsecond'];
  $_SESSION['exctime']=$row['exctime'];
  $_SESSION['participant']=$row['participant'];
  if ($row['arrival']=='Aug 8') {$_POST['arrival']='1';}
  if ($row['arrival']=='Aug 9') {$_POST['arrival']='2';}
  if ($row['arrival']=='Aug 10') {$_POST['arrival']='3';}
  if ($row['arrival']=='Aug 11') {$_POST['arrival']='4';}
  if ($row['arrival']=='Aug 12') {$_POST['arrival']='5';}
  if ($row['departure']=='Aug 16') {$_POST['departure']='1';}
  if ($row['departure']=='Aug 17') {$_POST['departure']='2';}
  if ($row['departure']=='Aug 18') {$_POST['departure']='3';}
  if ($row['departure']=='Aug 19') {$_POST['departure']='4';}
  if ($row['departure']=='Aug 20') {$_POST['departure']='5';}
  
  if ($row['area']=='Astrophysics &amp; Cosmology') {$_POST['area']='ast';}
  if ($row['area']=='Atomic Physics') {$_POST['area']='ato';}
  if ($row['area']=='Biophysics') {$_POST['area']='bio';}
  if ($row['area']=='Computational Physics') {$_POST['area']='com';}
  if ($row['area']=='Condensed Matter') {$_POST['area']='con';}
  if ($row['area']=='Geophysics') {$_POST['area']='geo';}
  if ($row['area']=='GR &amp; Quantum Cosmology') {$_POST['area']='grq';}
  if ($row['area']=='High Energy &amp; Particle') {$_POST['area']='hep';}
  if ($row['area']=='Mathematical Physics') {$_POST['area']='mat';}
  if ($row['area']=='Medical Physics') {$_POST['area']='med';}
  if ($row['area']=='Nuclear Physics') {$_POST['area']='nuc';}
  if ($row['area']=='Quantum Physics (general)') {$_POST['area']='qpg';}
  if ($row['area']=='Other Physics') {$_POST['area']='otp';}
  if ($row['area']=='Other') {$_POST['area']='oth';}
  
  $_POST['shirt']=$row['shirt'];
  $_POST['veg']=$row['veg'];
  $_POST['special']=$row['special'];
  $_POST['participation']=$row['participation'];
  $_POST['title']=$row['title'];
  $_POST['authors']=$row['authors'];

  $_POST['abstract2']=$row['abstract'];
  $_SESSION['paid']=$row['paid'];
  mysql_close($con3);	
} 


if (isset($_POST['submit'])) {
  if (strlen($_POST['abstract2'])>1000) {$kod=17;} 
  if (($_POST['participation']=='Lecture' || $_POST['participation']=='Poster')&& strlen($_POST['abstract2'])<1) {$kod=15;}
  if (($_POST['participation']=='Lecture' || $_POST['participation']=='Poster')&& $_POST['area']=="0") {$kod=14;}		
  if (($_POST['participation']=='Lecture' || $_POST['participation']=='Poster')&& strlen($_POST['authors'])<1) {$kod=13;}		
  if (($_POST['participation']=='Lecture' || $_POST['participation']=='Poster')&& strlen($_POST['title'])<1) {$kod=12;}		
  if (!isset($_POST['participation'])) {$kod=11;}
  if ($_POST['shirt']=="0") {$kod=204;}
  if ($_POST['departure']=="0") {$kod=203;}
  if ($_POST['arrival']=="0") {$kod=202;}		
  if ($_POST['password']!=$_POST['passwordcheck']) {$kod=10;}		
  if (strlen($_POST['password'])<5 && strlen($_POST['password'])>0) {$kod=9;}
  if ($_POST['memtype']=="0") {$kod=201;}
  if (strlen($_POST['passport'])<1) {$kod=16;}
  if (strpos($_POST['passport']," ")) {$kod=16;}
  if (strlen($_POST['country'])<1) {$kod=7;}		
  if (strlen($_POST['city'])<1) {$kod=6;}		
  if (strlen($_POST['institution'])<1) {$kod=5;}
}


if ($kod!=0) {
  if ($kod!=1) {echo '<br> <span class="crvenoerror"> <img src="images/usklicnik_manji.jpg" width="20" height="20" border="0" align="left" /> &nbsp; ';}
  if ($kod==2) {echo "You need to enter your first name.";}
if ($kod==3) {echo "You need to enter your last name.";}
if ($kod==4) {echo "You need to choose your sex.";}
if ($kod==5) {echo "You need to enter an institution you wish to be affiliated with.";}
if ($kod==6) {echo "You need to enter your city.";}
if ($kod==7) {echo "You need to enter your country.";}
if ($kod==16) {echo "You need to enter a valid passport number.";}
if ($kod==8) {echo "E-mail entered is not valid.";}
if ($kod==18) {echo "Entered e-mail already exists in our database; please choose another one.";}
if ($kod==9) {echo "Password should be at least 5 characters long.";}
if ($kod==10) {echo "The two passwords entered do not match.";}
if ($kod==11) {echo "You need to select your level of participation.";}
if ($kod==12) {echo "Since you selected a poster or a lecture, you need to enter a title of your presentation.";}
if ($kod==13) {echo "Since you selected a poster or a lecture, you need to enter author(s) of your presentation.";}
if ($kod==14) {echo "Since you selected a poster or a lecture, you need to select an area of pyhsics of your presentation.";}
if ($kod==15) {echo "Since you selected a poster or a lecture, you need to enter an abstract of your presentation.";}
if ($kod==17) {echo "Your abstract needs to be shorter than 1000 characters.";}
if ($kod==201) {echo "You need to select a membership type in IAPS.";}
if ($kod==202) {echo "You need to select your arrival date.";}
if ($kod==203) {echo "You need to select your departure date.";}
if ($kod==204) {echo "You need to select a T-shirt size.";}
  if ($kod!=1) {echo '</span>';}

?>
        <?php 
echo "<br><br> Welcome, <strong>".$_SESSION[firstname]." ".$_SESSION[lastname]."</strong>. ";
echo "<br><br> Here you can review and/or change your registration information. 
Clicking the 'Update' button will save your changes, while the 'Logout' button (at the bottom of the page) will take you to the previous page without changing your registration info.";
?>
        <?php
if ($_SESSION[approvedreg]=='Que') {echo "<br> <table width='580' border='0'><tr><td width='220'>Your registration is being</td><td width='330'>";} else {echo "<br> <table width='580' border='0'><tr><td width='220'>Your registration has been</td><td width='330'>";}
if ($_SESSION[approvedreg]=='Yes') {echo "<img src='images/approved.jpg' width='77' height='22' />";} 
if ($_SESSION[approvedreg]=='No') {echo "<img src='images/declined.jpg' width='69' height='22' />";}
if ($_SESSION[approvedreg]=='Que') {echo "<img src='images/processed.jpg' width='92' height='22' />";}
echo "</td>
  </tr>
    <tr>
    <td width='220' valign='top'>Your conference fee is</td>
    <td width='330'>";
if ($_SESSION[paid]=='Yes') {echo "<img src='images/paid.jpg' width='60' height='22' />";} 
if ($_SESSION[paid]=='No') {echo "<img src='images/not_paid.jpg' width='60' height='22' />";}
if ($_SESSION[paid]=='Spec') {
  echo "<img src='images/special.jpg' width='59' height='22' />";
  echo "<br><span class='sitno_reg'>(This indicates that you haven't (yet) paid the fee (in full) due to special circumstances, but you are considered
  as a participant of ICPS2009 according to an arrangement with us.)</span>";
  }
echo "</td>
  </tr>
</table><br>";
?>
        <span class="linkCopy"> <img src="images/updated.jpg" width="62" height="20" align="absbottom" /> 
        Registration update for ICPS2009 is no longer possible. <img src="images/updated.jpg" width="62" height="20" align="absbottom"  /></span> 
        <br>
        <br>
        <br>
      <form action="update.php" method="post">
        <table width="100%" border="0">
          <tr> 
            <td width="50%" valign="top"><span class="linkCopy"><strong>&nbsp;&nbsp;Personal 
              data</strong></span><strong> </strong> <table class="tabele_reg">
                <tr> 
                  <td width="100" valign="top"> First name:</td>
                  <td width="5">&nbsp;</td>
                  <td> <?php echo $_SESSION['firstname']; ?> </td>
                </tr>
                <tr> 
                  <td valign="top" >Last name:</td>
                  <td>&nbsp;</td>
                  <td> <?php echo $_SESSION['lastname']; ?> </td>
                </tr>
                <tr> 
                  <td valign="top" >Sex:</td>
                  <td>&nbsp;</td>
                  <td><?php echo $_SESSION['sex']; ?> </td>
                </tr>
                <tr> 
                  <td valign="top" >Institution:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="institution" type="text" id="institution5" value="' . $_POST['institution'] . '" size="30" maxlength="100" /> '
                  ?>
                    <span class="crvenoCopy">*</span><br /> <span class="sitno_reg">institution 
                    you wish to be affiliated with</span><span class="sitno_dole"> 
                    </span></td>
                </tr>
                <tr> 
                  <td valign="top" >City:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="city" type="text" id="city2" value="' . $_POST['city'] . '" size="30" maxlength="30" /> '
                  ?>
                    <span class="crvenoCopy">*</span> </td>
                </tr>
                <tr> 
                  <td valign="top" >Country:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="country" type="text" id="country2" value="' . $_POST['country'] . '" size="30" maxlength="30" /> '
                  ?>
                    <span class="crvenoCopy">*</span> </td>
                </tr>
                <tr> 
                  <td valign="top" >Passport No.:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="passport" type="text" id="passport" value="' . $_POST['passport'] . '" size="30" maxlength="20" /> '
                  ?>
                    <span class="crvenoCopy">*</span> </td>
                </tr>
                <tr> 
                  <td valign="top" >Membership type:</td>
                  <td>&nbsp;</td>
                  <td> <select name="memtype" id="select2">
                      <option value="0">-=Select=-</option>
                      <?php
					  if ($_POST['memtype']=='LC') {echo '<option value="LC" selected="selected">Local Commitee</option>';} else {echo '<option value="LC">Local Commitee</option>';}
					  if ($_POST['memtype']=='NC') {echo '<option value="NC" selected="selected">National Commitee</option>';} else {echo '<option value="NC">National Commitee</option>';}
					  if ($_POST['memtype']=='IM') {echo '<option value="IM" selected="selected">Individual Member</option>';} else {echo '<option value="IM">Individual Member</option>';}
					  ?>
                    </select> <span class="crvenoCopy">*</span> <br /> <span class="sitno_reg">type 
                    of membership in IAPS (see more at <a href="http://www.iaps.info/organization/members/">IAPS' 
                    website</a>)</span> </td>
                </tr>
              </table></td>
            <td width="50%" valign="top"><span class="linkCopy"><strong>&nbsp;&nbsp;Login 
              &amp; contact information </strong></span> <table class="tabele_reg">
                <tr> 
                  <td width="100" valign="top">E-mail:</td>
                  <td width="5">&nbsp;</td>
                  <td> <?php echo $_SESSION['email']; ?> <br /> </td>
                </tr>
                <tr> 
                  <td valign="top">Share e-mail?</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
				  if ($_POST['share']=='Yes') {echo '<input name="share" type="checkbox" id="share" value="Yes" checked="checked"/>';} else {echo '<input name="share" type="checkbox" id="share" value="Yes" />';}
				 ?>
                    <br /> <span class="sitno_reg">check this box if you wish 
                    your e-mail to be visible to other participants of ICPS</span></td>
                </tr>
                <tr> 
                  <td valign="top" >New password:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="password" type="password" id="password" value="' . $_POST['password'] . '" size="30" maxlength="20" /> '
                  ?>
                    <br /> <span class="sitno_reg">minimum of 5 characters; if 
                    you do not wish to change your current password, leave this 
                    field emtpy</span></td>
                </tr>
                <tr> 
                  <td valign="top" >Retype new password:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="passwordcheck" type="password" id="passwordcheck" value="' . $_POST['passwordcheck'] . '" size="30" maxlength="20" /> '
                  ?>
                  </td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr> 
            <td valign="top"><span class="linkCopy"><strong>&nbsp;&nbsp;Conference 
              &amp; other info</strong> </span> <table class="tabele_reg">
                <tr> 
                  <td width="100" valign="top">Arrival date:</td>
                  <td width="5">&nbsp;</td>
                  <td><select name="arrival" id="select3">
                      <option value="0">-=Select=-</option>
                      <?php
					  if ($_POST['arrival']=='1') {echo '<option value="1" selected="selected">Saturday, 8th of August</option>';} else {echo '<option value="1">Saturday, 8th of August</option>';}
					  if ($_POST['arrival']=='2') {echo '<option value="2" selected="selected">Sunday, 9th of August</option>';} else {echo '<option value="2">Sunday, 9th of August</option>';} 
					  if ($_POST['arrival']=='3') {echo '<option value="3" selected="selected">Monday, 10th of August</option>';} else {echo '<option value="3">Monday, 10th of August</option>';} 
					  if ($_POST['arrival']=='4') {echo '<option value="4" selected="selected">Tuesday, 11th of August</option>';} else {echo '<option value="4">Tuesday, 11th of August</option>';}
                      if ($_POST['arrival']=='5') {echo '<option value="5" selected="selected">Wednesday, 12th of August</option>';} else {echo '<option value="5">Wednesday, 12th of August</option>';}
                      ?>
                    </select> <span class="crvenoCopy">*</span><br /> <span class="sitno_reg">accommodation 
                    can be arranged up to 2 days before the beginning of the conference</span> 
                  </td>
                </tr>
                <tr> 
                  <td valign="top" >Departure date:</td>
                  <td>&nbsp;</td>
                  <td> <div align="left"> 
                      <select name="departure" id="select4">
                        <option value="0">-=Select=-</option>
                        <?php
					  if ($_POST['departure']=='1') {echo '<option value="1" selected="selected">Sunday, 16th of August</option>';} else {echo '<option value="1">Sunday, 16th of August</option>';}
					  if ($_POST['departure']=='2') {echo '<option value="2" selected="selected">Monday, 17th of August</option>';} else {echo '<option value="2">Monday, 17th of August</option>';} 
					  if ($_POST['departure']=='3') {echo '<option value="3" selected="selected">Tuesday, 18th of August</option>';} else {echo '<option value="3">Tuesday, 18th of August</option>';} 
					  if ($_POST['departure']=='4') {echo '<option value="4" selected="selected">Wednesday, 19th of August</option>';} else {echo '<option value="4">Wednesday, 19th of August</option>';}
                      if ($_POST['departure']=='5') {echo '<option value="5" selected="selected">Thursday, 20th of August</option>';} else {echo '<option value="5">Thursday, 20th of August</option>';}
                      ?>
                      </select>
                      <span class="crvenoCopy">*</span><br />
                      <span class="sitno_reg">accommodation can be arranged up 
                      to 2 days after the end of the conference</span></div></td>
                </tr>
                <tr> 
                  <td valign="top" >T-shirt size:</td>
                  <td>&nbsp;</td>
                  <td><select name="shirt" id="shirt">
                      <option value="0">-=Select=-</option>
                      <?php
					  if ($_POST['shirt']=='XS-f') {echo '<option value="XS-f" selected="selected">XS-f</option>';} else {echo '<option value="XS-f">XS-f</option>';}
					  if ($_POST['shirt']=='S-f') {echo '<option value="S-f" selected="selected">S-f</option>';} else {echo '<option value="S-f">S-f</option>';}
					  if ($_POST['shirt']=='S-m') {echo '<option value="S-m" selected="selected">S-m</option>';} else {echo '<option value="S-m">S-m</option>';}
					  if ($_POST['shirt']=='M-f') {echo '<option value="M-f" selected="selected">M-f</option>';} else {echo '<option value="M-f">M-f</option>';}
					  if ($_POST['shirt']=='M-m') {echo '<option value="M-m" selected="selected">M-m</option>';} else {echo '<option value="M-m">M-m</option>';}
					  if ($_POST['shirt']=='L-f') {echo '<option value="L-f" selected="selected">L-f</option>';} else {echo '<option value="L-f">L-f</option>';}
					  if ($_POST['shirt']=='L-m') {echo '<option value="L-m" selected="selected">L-m</option>';} else {echo '<option value="L-m">L-m</option>';}
					  if ($_POST['shirt']=='XL-m') {echo '<option value="XL-m" selected="selected">XL-m</option>';} else {echo '<option value="XL-m">XL-m</option>';}
					  if ($_POST['shirt']=='XXL-m') {echo '<option value="XXL-m" selected="selected">XXL-m</option>';} else {echo '<option value="XXL-m">XXL-m</option>';}
					  ?>
                    </select> <span class="crvenoCopy">*</span><br /> <span class="sitno_reg">you 
                    will be provided with a conference t-shirt in this size (f 
                    denotes women's sizes and m men's)</span></td>
                </tr>
                <tr> 
                  <td valign="top" >Vegetarian:</td>
                  <td>&nbsp;</td>
                  <td> 
                    <?php
				  if ($_POST['veg']=='Yes') {echo '<input name="veg" type="checkbox" id="veg" value="Yes" checked="checked"/>';} else {echo '<input name="veg" type="checkbox" id="veg" value="Yes" />';}
				 ?>
                    <br /> <span class="sitno_reg"> check this box if you're vegetarian</span></td>
                </tr>
                <tr> 
                  <td colspan="3" valign="top" >Special requirements: </td>
                </tr>
                <tr> 
                  <td colspan="3" valign="top" ><textarea name="special" cols="40" rows="3" id="textarea3"><?php echo $_POST['special']; ?></textarea> 
                    <span class="sitno_reg"><br />
                    let us know if you have any special requirement</span> </td>
                </tr>
              </table></td>
            <td valign="top"><span class="linkCopy"><strong>&nbsp;&nbsp;Participation 
              details</strong> </span> <table class="tabele_reg">
                <tr> 
                  <td width="100" valign="top">Presentation:</td>
                  <td width="5">&nbsp;</td>
                  <td> 
                    <?php
					if ($_POST['participation']=='Lecture') {echo '<input type="radio" name="participation" value="Lecture" checked="checked"/>';}
					else {echo '<input type="radio" name="participation" value="Lecture"/>';}
					?>
                    Lecture 
                    <?php
					if ($_POST['participation']=='Poster') {echo '<input type="radio" name="participation" value="Poster" checked="checked"/>';}
					else {echo '<input type="radio" name="participation" value="Poster"/>';}
					?>
                    Poster 
                    <?php
					if ($_POST['participation']=='None') {echo '<input type="radio" name="participation" value="None" checked="checked"/>';}
					else {echo '<input type="radio" name="participation" value="None"/>';}
					?>
                    None <span class="crvenoCopy">*</span><br /> <span class="sitno_reg"> 
                    select your level of participation</span> </td>
                </tr>
                <tr> 
                  <td valign="top" >Title:</td>
                  <td width="5">&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="title" type="text" id="country3" value="' . $_POST['title'] . '" size="30" maxlength="100" /> '
                  ?>
                    <br /> <span class="sitno_reg">title of your presentation; 
                    maximum 100 characters, plain text only</span></td>
                </tr>
                <tr> 
                  <td valign="top" >Author(s):</td>
                  <td width="5">&nbsp;</td>
                  <td> 
                    <?php
                  echo '<input name="authors" type="text" id="title" value="' . $_POST['authors'] . '" size="30" maxlength="100" /> '
                  ?>
                    <br /> <span class="sitno_reg">author(s) of the presentation; 
                    maximum 100 characters</span> </td>
                </tr>
                <tr> 
                  <td valign="top" >Area of physics:</td>
                  <td width="5">&nbsp;</td>
                  <td> <select name="area" id="area">
                      <option value="0">-=Select=-</option>
                      <?php			  
					  echo '<option value="ast"'; if ($_POST['area']=='ast') {echo ' selected ';} echo '>Astrophysics &amp; Cosmology</option>';
					  echo '<option value="ato"'; if ($_POST['area']=='ato') {echo ' selected ';} echo '>Atomic Physics</option>';
					  echo '<option value="bio"'; if ($_POST['area']=='bio') {echo ' selected ';} echo '>Biophysics</option>';
					  echo '<option value="com"'; if ($_POST['area']=='com') {echo ' selected ';} echo '>Computational Physics</option>';
					  echo '<option value="con"'; if ($_POST['area']=='con') {echo ' selected ';} echo '>Condensed Matter</option>';
					  echo '<option value="geo"'; if ($_POST['area']=='geo') {echo ' selected ';} echo '>Geophysics</option>';
					  echo '<option value="grq"'; if ($_POST['area']=='grq') {echo ' selected ';} echo '>GR &amp; Quantum Cosmology</option>';
					  echo '<option value="hep"'; if ($_POST['area']=='hep') {echo ' selected ';} echo '>High Energy &amp; Particle</option>';
					  echo '<option value="mat"'; if ($_POST['area']=='mat') {echo ' selected ';} echo '>Mathematical Physics</option>';
					  echo '<option value="med"'; if ($_POST['area']=='med') {echo ' selected ';} echo '>Medical Physics</option>';
					  echo '<option value="nuc"'; if ($_POST['area']=='nuc') {echo ' selected ';} echo '>Nuclear Physics</option>';
					  echo '<option value="qpg"'; if ($_POST['area']=='qpg') {echo ' selected ';} echo '>Quantum Physics (general)</option>';
					  echo '<option value="otp"'; if ($_POST['area']=='otp') {echo ' selected ';} echo '>Other Physics</option>';
					  echo '<option value="oth"'; if ($_POST['area']=='oth') {echo ' selected ';} echo '>Other</option>';
	   				  ?>
                    </select> <br /> <span class="sitno_reg"> select to which 
                    area of physics your presentation best fits into</span></td>
                </tr>
                <tr> 
                  <td colspan="3" valign="top" >Abstract: </td>
                </tr>
                <tr> 
                  <td colspan="3" valign="top" ><textarea name="abstract2" cols="40" rows="6" id="textarea2"><?php echo $_POST['abstract2']; ?></textarea> 
                    <span class="sitno_reg"><br />
                    abstract of your presentation; please use plain text only, 
                    but if you need any special characters, use LaTeX syntax; 
                    maximum 1000 characters</span> </td>
                </tr>
              </table></td>
          </tr>
        </table>
        <br>
        <div align="right"> 
          <input name="submit" type="submit" value="Update" disabled="true"/>
        </div>
      </form>
      <form action="update.php" method="post" name="formapay">
        <span class="linkCopy"><strong>&nbsp;&nbsp;Payment info</strong></span> 
        <br />
        <span class="sitno_reg">This information is to help us process your payment 
        more quickly.<br>
        Please note that you will not be able to change this information once 
        entered.</span> 
        <table class="tabele_reg">
          <tr> 
            <td width="100" valign="top">Bank name:</td>
            <td width="5">&nbsp;</td>
            <td> 
              <?php
			if ($_SESSION['feeamount']!='') {echo $_SESSION['feebank'];} else {echo '<input name="feebank" type="text" id="feebank" size="30" maxlength="40" />';}
			?>
              <br /> <span class="sitno_reg">bank over which you made the payment</span> 
            </td>
          </tr>
          <tr> 
            <td valign="top" >Transaction number:</td>
            <td>&nbsp;</td>
            <td> 
              <?php
			if ($_SESSION['feeamount']!='') {echo $_SESSION['feeno'];} else {echo '<input name="feeno" type="text" id="feeno" size="30" maxlength="20" />';}
			?>
              <br /> <span class="sitno_reg">number of the transaction</span></td>
          </tr>
          <tr> 
            <td valign="top" >Date paid:</td>
            <td>&nbsp;</td>
            <td> 
              <?php
			if ($_SESSION['feeamount']!='') {echo $_SESSION['feedate'];} else {echo '<input name="feedate" type="text" id="feedate" size="30" maxlength="20" />';}
			?>
              <br /> <span class="sitno_reg">date when the payment was made (please 
              use format dd/mm/yyyy)</span></td>
          </tr>
          <tr> 
            <td valign="top" >Amount:</td>
            <td>&nbsp;</td>
            <td> 
              <?php
			if ($_SESSION['feeamount']!='') {echo $_SESSION['feeamount'];} else {echo '<input name="feeamount" type="text" id="feeamount" size="30" maxlength="20" />';}
			?>
              <br /> <span class="sitno_reg">amount (in &euro;) paid in this transaction 
              (in case you paid together with other registrants) </span></td>
          </tr>
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <?php
			if ($_SESSION['feeamount']==''&&$_SESSION['approvedreg']=='Yes') {echo '<input name="payment" type="submit" value="Send" />';} 
			if ($_SESSION['feeamount']==''&&$_SESSION['approvedreg']!='Yes') {echo '<input name="payment" type="submit" value="Send" disabled="true" />';} 
			?>
      </form>
      <br> <form action="update.php" method="post" name="excform">
        <span class="linkCopy"><strong>&nbsp;&nbsp;Excursions</strong></span> 
        <br />
        <span class="sitno_reg">More info about the excursions can be found in 
        the &quot;Social events&quot; section of the website.<br>
        Please note that you will not be able to change this information once 
        entered.</span> 
        <table class="tabele_reg">
          <tr> 
            <td width="102" valign="top">First choice:</td>
            <td width="10">&nbsp;</td>
            <td width="234"> 
              <?php
			if ($_SESSION['excfirst']!='') {echo $_SESSION['excfirst'];} else {echo '
			
			<select name="first" id="first">
                <option value="Zadar">Zadar</option>
                <option value="Sibenik">&#352;ibenik</option>
                <option value="Rafting on Cetina">Rafting on Cetina</option>
                <option value="Makarska">Makarska</option>
				<option value="Solin-Kastela-Trogir">Solin-Kaštela-Trogir</option>
				<option value="Sinj">Sinj</option>
				<option value="Duce beach">Du&#263e beach</option>
              </select> ';}
			  ?>
            </td>
          </tr>
          <tr> 
            <td valign="top" >Second choice:</td>
            <td>&nbsp;</td>
            <td> 
              <?php
			if ($_SESSION['excsecond']!='') {echo $_SESSION['excsecond'];} else {echo '
			
			<select name="second" id="second">
                <option value="Zadar">Zadar</option>
                <option value="Sibenik">&#352;ibenik</option>
                <option value="Rafting on Cetina">Rafting on Cetina</option>
                <option value="Makarska">Makarska</option>
				<option value="Solin-Kastela-Trogir">Solin-Kaštela-Trogir</option>
				<option value="Sinj">Sinj</option>
				<option value="Duce beach">Du&#263e beach</option>
              </select> ';}
			  ?>
            </td>
          </tr>
        </table>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        <?php
			if ($_SESSION['excfirst']==''&&$_SESSION['participant']=='Yes') {echo '<input name="excursions" type="submit" value="Send" />';} 
			else {echo '<input name="excursions" type="submit" value="Send" disabled="true" />';} 
			?>
      </form>
      <span class="linkCopy"><strong>EPSI questionnaire</strong></span><br />
      <span class="sitno_reg">Please fill out this short questionnaire from the 
      EPSI group (European Physics Students Initiative) about using Wikipedia 
      for educational purposes.
      </span>
	  <form action="update.php" method="post" name="epsi">
			 <?php
			$con4 = mysql_connect("localhost","icps2009","DghC11pQ");
  			if (!$con4) {die('Could not connect: ' . mysql_error());}
  			mysql_select_db("icps2009", $con4);
			$rresult = mysql_query("SELECT * FROM upitnik WHERE broj='$_SESSION[brojcek]'");
            $rrow = mysql_fetch_array($rresult); 
			if ($rrow['broj']=='') {echo '<input type="submit" name="epsigumb" value="Go to Questionnaire" />';} 
			else {echo '<input type="submit" name="epsigumb" value="Go to Questionnaire" disabled="true" />';} 
			?>
	  </form>
      <br>
	  <span class="linkCopy"><strong>Best Student Lecture and Poster Vote</strong></span><br />
      <span class="sitno_reg">Online voting for the Best Student Lecture and Poster at ICPS2009.
      </span>
	  <form action="update.php" method="post" name="vote">
			 <?php
			$con5 = mysql_connect("localhost","icps2009","DghC11pQ");
  			if (!$con5) {die('Could not connect: ' . mysql_error());}
  			mysql_select_db("icps2009", $con5);
			$aresult = mysql_query("SELECT * FROM vote WHERE broj='$_SESSION[brojcek]'");
            $arow = mysql_fetch_array($aresult); 
			if ($arow['broj']=='') {echo '<input type="submit" name="votegumb" value="Proceed to Voting" />';} 
			else {echo '<input type="submit" name="votegumb" value="Proceed to Voting" disabled="true" />';} 
			?>
	  </form>
	  <br> <form name="formbla" id="form1" method="post" action="registration.php">
        <div align="right">If you do not wish to change any of the details: 
          <input type="submit" name="logg" value="Logout" />
        </div>
      </form>
      <?php

} else {

if (isset($_POST['submit'])) {

$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con)
{
 die('Could not connect: ' . mysql_error() . ' Please contact the webmaster.');
}

mysql_select_db("icps2009", $con);

$_POST[institution]=trim($_POST[institution]);
$_POST[city]=trim($_POST[city]);
$_POST[country]=trim($_POST[country]);
$_POST[special]=trim($_POST[special]);
$_POST[title]=trim($_POST[title]);
$_POST[authors]=trim($_POST[authors]);
$_POST[area]=trim($_POST[area]);
$_POST[abstract2]=trim($_POST[abstract2]);

if ($_POST['arrival']=='1') {$_POST['arrival']='Aug 8';}
if ($_POST['arrival']=='2') {$_POST['arrival']='Aug 9';}
if ($_POST['arrival']=='3') {$_POST['arrival']='Aug 10';}
if ($_POST['arrival']=='4') {$_POST['arrival']='Aug 11';}
if ($_POST['arrival']=='5') {$_POST['arrival']='Aug 12';}

if ($_POST['departure']=='1') {$_POST['departure']='Aug 16';}
if ($_POST['departure']=='2') {$_POST['departure']='Aug 17';}
if ($_POST['departure']=='3') {$_POST['departure']='Aug 18';}
if ($_POST['departure']=='4') {$_POST['departure']='Aug 19';}
if ($_POST['departure']=='5') {$_POST['departure']='Aug 20';}

if ($_POST[share]!='Yes') {$_POST[share]='No';}
if ($_POST[veg]!='Yes') {$_POST[veg]='No';}

if ($_POST[area]=='ast') {$_POST[area]='Astrophysics &amp; Cosmology';}
if ($_POST[area]=='ato') {$_POST[area]='Atomic Physics';}
if ($_POST[area]=='bio') {$_POST[area]='Biophysics';}
if ($_POST[area]=='com') {$_POST[area]='Computational Physics';}
if ($_POST[area]=='con') {$_POST[area]='Condensed Matter';}
if ($_POST[area]=='geo') {$_POST[area]='Geophysics';}
if ($_POST[area]=='grq') {$_POST[area]='GR &amp; Quantum Cosmology';}
if ($_POST[area]=='hep') {$_POST[area]='High Energy &amp; Particle';}
if ($_POST[area]=='mat') {$_POST[area]='Mathematical Physics';}
if ($_POST[area]=='med') {$_POST[area]='Medical Physics';}
if ($_POST[area]=='nuc') {$_POST[area]='Nuclear Physics';}
if ($_POST[area]=='qpg') {$_POST[area]='Quantum Physics (general)';}
if ($_POST[area]=='otp') {$_POST[area]='Other Physics';}
if ($_POST[area]=='oth') {$_POST[area]='Other';}

if ($_POST['participation']=='None') {
$_POST['title']="";
$_POST['authors']="";
$_POST['area']="";
$_POST['abstract2']="";
}

$sql="UPDATE participants SET institution='$_POST[institution]', city='$_POST[city]', country='$_POST[country]', 
passport='$_POST[passport]', memtype='$_POST[memtype]', share='$_POST[share]',
arrival='$_POST[arrival]', departure='$_POST[departure]', shirt='$_POST[shirt]', veg='$_POST[veg]', special='$_POST[special]',
participation='$_POST[participation]', title='$_POST[title]',authors='$_POST[authors]',area='$_POST[area]',
abstract='$_POST[abstract2]' WHERE broj='$_SESSION[brojcek]'";

if (!mysql_query($sql,$con)){die('Error: ' . mysql_error() . ' Please contact the webmaster.');}            

if (strlen($_POST['password'])>4) 
{
$sql2="UPDATE participants SET password=SHA1('$_POST[password]') WHERE broj='$_SESSION[brojcek]'";
if (!mysql_query($sql2,$con)){die('Error: ' . mysql_error() . ' Please contact the webmaster.');}
}
 
mysql_close($con);

$to = $_SESSION[email];
$subject = "Update of ICPS2009 registration successful";

$message = '
<font face="Arial, Helvetica, sans-serif">*** Please do not reply to this e-mail.***
<br><br>
Dear '. $_SESSION[firstname] . ' '. $_SESSION[lastname] . ', <br>
<br>
You have successfully updated your registration for the ICPS2009 conference with the following information:
<br><br>

<strong>Personal data</strong><br>
<table width="500" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="130" valign="top">First name:</td>
    <td width="370">'.$_SESSION[firstname].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Last name:</td>
    <td>'.$_SESSION[lastname].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Sex:</td>
    <td>'.$_SESSION[sex].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Institution:</td>
    <td>'.$_POST[institution].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">City:</td>
    <td>'.$_POST[city].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Country:</td>
    <td>'.$_POST[country].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Passport number: </td>
    <td>'.$_POST[passport].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Membership type:</td>
    <td>'.$_POST[memtype].'</td>
  </tr>
</table>
<br>
<strong>Login &amp; contact information</strong><br>
<table width="500" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="130" valign="top">E-mail:</td>
    <td width="370">'.$_SESSION[email].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Share e-mail:</td>
    <td>'.$_POST[share].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Password:</td>
    <td>&lt;hidden&gt;</td>
  </tr>
</table>
<br>
<strong>Conference &amp; other info</strong><br>
<table width="500" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="130" valign="top">Arrival date: </td>
    <td width="370">'.$_POST[arrival].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Departure date:</td>
    <td>'.$_POST[departure].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">T-shirt size:</td>
    <td>'.$_POST[shirt].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Vegetarian:</td>
    <td>'.$_POST[veg].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Special requirements:</td>
    <td>'.$_POST[special].'</td>
  </tr>
</table>
<br>
<strong>Participation details</strong><br>
<table width="500" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="130" valign="top">Presentation:</td>
    <td width="370">'.$_POST[participation].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Title:</td>
    <td>'.$_POST[title].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Author(s):</td>
    <td>'.$_POST[authors].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Area of physics:</td>
    <td>'.$_POST[area].'</td>
  </tr>
  <tr> 
    <td width="130" valign="top">Abstract:</td>
    <td></td>
  </tr>
  <tr> 
  <td colspan="2">'.$_POST[abstract2].'</td>
  </tr>
</table>
<br><br>
You can log in to your account with your e-mail and password and change your registration info, but only until July 1st 2009.<br><br>
Sincerely,<br>
ICPS2009 Organising Committee.<br><br>
*** Please do not reply to this e-mail.***

</font>

';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";


$headers .= 'From: <noreply_icps2009@hfd.hr>' . "\r\n";


mail($to,$subject,stripslashes($message),$headers);
mail('icps2009backup@gmail.com',$subject,stripslashes($message),$headers);


echo "<br><br><span class='link'>Registration update successful!</span> <br>
      <br> Thank you for updating your registration for the ICPS2009 conference.<br>
      A confirmation e-mail has been sent to your e-mail address. <br><br> You are now logged out.";

session_destroy();
}

if (isset($_POST['payment'])){

$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error() . ' Please contact the webmaster.');}
mysql_select_db("icps2009", $con);
$_POST[feebank]=trim($_POST[feebank]);
$_POST[feeno]=trim($_POST[feeno]);
$_POST[feeamount]=trim($_POST[feeamount]);
$_POST[feedate]=trim($_POST[feedate]);

$sql="UPDATE participants SET feebank='$_POST[feebank]', feeno='$_POST[feeno]', feeamount='$_POST[feeamount]', 
feedate='$_POST[feedate]' WHERE broj='$_SESSION[brojcek]'";
      
if (!mysql_query($sql,$con)){die('Error: ' . mysql_error() . ' Please contact the webmaster.');}
mysql_close($con);
$to = $_SESSION[email];
$subject = "ICPS2009 payment info successfully sent";
$message = '
<font face="Arial, Helvetica, sans-serif">*** Please do not reply to this e-mail.***
<br><br>
Dear '. $_SESSION[firstname] . ' '. $_SESSION[lastname] . ', <br>
<br>
We have received the following information about your payment of the registration fee for the ICPS2009 conference:
<br><br>
<table width="420" border="0" cellpadding="1" cellspacing="3">
  <tr> 
    <td width="150" valign="top">Bank name:</td>
    <td width="270">'.$_POST[feebank].'</td>
  </tr>
  <tr> 
    <td width="150" valign="top">Transaction number:</td>
    <td>'.$_POST[feeno].'</td>
  </tr>
  <tr> 
    <td width="150" valign="top">Date paid:</td>
    <td>'.$_POST[feedate].'</td>
  </tr>
  <tr> 
    <td width="150" valign="top">Amount:</td>
    <td>'.$_POST[feeamount].'</td>
  </tr>
</table>
<br>
As soon as we process your payment, you will receive another e-mail confirming the reception of the payment. <br>
Also, remember that you can log in to your account with your e-mail address and password and change your registration info, but only until July 1st 2009.<br><br>
Sincerely,<br>
ICPS2009 Organising Committee.<br><br>
*** Please do not reply to this e-mail.***
</font>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: <noreply_icps2009@hfd.hr>' . "\r\n";
mail($to,$subject,stripslashes($message),$headers);
mail('icps2009backup@gmail.com',$subject,stripslashes($message),$headers);
mail('icps2009@hfd.hr',$subject,stripslashes($message),$headers);


echo "<br><br><span class='link'>Payment info sent successfully!</span> <br>
      <br> Thank you for sending us information about your payment.<br>
      A confirmation e-mail has been sent to your e-mail address.<br><br> You are now logged out.";

session_destroy();

}


if (isset($_POST['excursions'])){
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error() . ' Please contact the webmaster.');}
mysql_select_db("icps2009", $con);
$tt=time();
$sql="UPDATE participants SET excfirst='$_POST[first]', excsecond='$_POST[second]', exctime='$tt' WHERE broj='$_SESSION[brojcek]'";
if (!mysql_query($sql,$con)){die('Error: ' . mysql_error() . ' Please contact the webmaster.');}
mysql_close($con);
echo "<br><br><span class='link'>Excursion choices sent successfully!</span> <br><br> ";
echo "First choice: ".$_POST[first]."<br>";
echo "Second choice: ".$_POST[second]."<br>";
echo "<br>You are now logged out.";
session_destroy();
}



}

?></p>
      </td>
    <td width="250" align="center" valign="top"><br />
      <br />
      <table class="tabele_sastrane">
      <tr>
        <td>
<!--          <script type="text/javascript" language="javascript1.2" src="http://weatherreports.com/jscript.html?width=125&height=125&theme=brand_no_search_box&location=Split%2C%20Croatia&units=c">
            </script>!-->
<img src="images/quick_links.gif" width="150" height="20" /></td>
      </tr>
      <tr>
        <td height="17">&nbsp;</td>
      </tr>
    </table>
	<br>
	
    <table width="150" class="tabele_sastrane">
      <tr>
        <td><!--          <script type="text/javascript" language="javascript1.2" src="http://weatherreports.com/jscript.html?width=125&height=125&theme=brand_no_search_box&location=Split%2C%20Croatia&units=c">
            </script>!-->
            <img src="images/news flash.gif" width="150" height="20"></td>
      </tr>
      <tr>
        <td height="17">
          <script language="JavaScript">if(document.layers){document.write('<ilayer id="ns4div" width="'+swidth+'" height="'+sheight+'" bgcolor='+sbcolor+'><layer id="ns4div1" width="'+swidth+'" height="'+sheight+'" onmouseover="sspeed=0;" onmouseout="sspeed=rspeed"></layer></ilayer>')}
if(document.getElementById||document.all){document.write('<div style="position:relative;overflow:hidden;width:'+swidth+'px;height:'+sheight+'px;clip:rect(0 '+swidth+'px '+sheight+'px 0);background-color:'+sbcolor+';" onmouseover="sspeed=0" onmouseout="sspeed=rspeed"><div id="iens6div" style="position:relative;width:'+swidth+'px;"></div></div>');}</script>
      </tr>
    </table>
	 <br />
	 <table width="150" class="tabele_sastrane">
      <tr>
        <td>
<!--          <script type="text/javascript" language="javascript1.2" src="http://weatherreports.com/jscript.html?width=125&height=125&theme=brand_no_search_box&location=Split%2C%20Croatia&units=c">
            </script>!-->
<img src="images/did_you_know.gif"  /></td>
      </tr>
      <tr>
        <td height="17">
		<script type="text/javascript" src="did_you_know.js"> </script>
		</td>
      </tr>
    </table>	
    
	
	
	</td>
    <td width="10">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td colspan="2" ><div align="center"><img src="images/dole_crte.gif"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td colspan="2" class="sitno_dole" ><a href="event_overview.html">event overview</a> | <a href="accomodation.html">accomodation</a> | <a href="plenary_and_invited_speakers.html">plenary &amp; invited speakers</a> | <a href="registration.php">registration</a> | <a href="social_events.html">social events</a> | <a href="sponsors.html">sponsors</a> | <a href="about_us.html">about us</a> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td colspan="2" class="sitno_dole" >Design by Star96 | Copyright &copy; SSHFD 2008. <br />
Best viewed on Mozilla Firefox &amp; resolution 1024 x 768 or higher </td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>

<?php
session_start();	  
$pitanje=0;
	  if (isset($_POST['upis'])) {
	 
        $con = mysql_connect("localhost","icps2009","DghC11pQ");
		if (!$con) {die('Could not connect: ' . mysql_error() . ' Please contact the webmaster.');}
		mysql_select_db("icps2009", $con);
		$result = mysql_query("SELECT broj FROM participants WHERE email='$_POST[email2]' AND password=SHA1('$_POST[password2]')");
		$row = mysql_fetch_array($result);
		mysql_close($con);
	    if ($row['broj']!='') {
  		  $_SESSION['brojcek']=$row['broj'];
          header("location:update.php");
		  $pitanje=1;
	    } else {$kodic=73;}
	  
	  }
	  
if ($pitanje==0){session_destroy();}


	  
	  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ICPS2009, Split - registration</title>
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
    <td valign="bottom" class="glavna_registration">
      <p align="right"><img src="images/uvod_registration.jpg" width="100" height="235" hspace="20" vspace="5" border="0" align="left" /></p>
      <p> Here you can register for the ICPS2009 conference and update your existing 
        registration. If you have any questions or issues about the registration, 
        please do not hesitate to contact us at <a href="mailto:icps2009@fizika.org">icps2009@fizika.org</a>. 
      <p align="center"><span class="linkCopy"> Registration for ICPS2009 is now 
        closed. </span><br />
        <br />
        <br />
      
      <p><img src="images/registration_deadlines.gif" width="400" height="30" /> 
        <br />
        <br />
        Below is a summary of all the important dates regarding the registration. 
        For more detailed explanation of these terms plese refer to <em>&quot;Registration&quot;</em> 
        and <em>&quot;Registration fee &amp; payment&quot;</em> passages further 
        below. 
      <table width="647" border="0">
        <tr> 
          <td width="317"><img src="images/uvodnik.gif" align="bottom" /> Early 
            registration opens:</td>
          <td width="158" class="linkCopy"><div align="right">09 February 2009</div></td>
          <td width="158" class="linkCopy">&nbsp;</td>
        </tr>
        <tr> 
          <td><img src="images/uvodnik.gif" align="bottom" /> Conference fee payments 
            accepted from:</td>
          <td class="linkCopy"><div align="right">09 March 2009</div></td>
          <td class="linkCopy">&nbsp;</td>
        </tr>
        <tr> 
          <td><img src="images/uvodnik.gif" align="bottom" /> Early registration 
            closes: </td>
          <td class="linkCopy"><div align="right">01 June 2009</div></td>
          <td align="center" valign="middle" class="linkCopy">&nbsp;&nbsp;</td>
        </tr>
        <tr> 
          <td><img src="images/uvodnik.gif" align="bottom" /> Late registration 
            opens: </td>
          <td class="linkCopy"><div align="right">02 June 2009</div></td>
          <td class="linkCopy">&nbsp;</td>
        </tr>
        <tr> 
          <td><img src="images/uvodnik.gif" align="bottom" /> Late registration 
            closes: </td>
          <td class="linkCopy"><div align="right">28 June 2009</div></td>
          <td class="linkCopy">&nbsp;</td>
        </tr>
        <tr> 
          <td><img src="images/uvodnik.gif" align="bottom" /> Cancellation deadline: 
          </td>
          <td class="linkCopy"><div align="right">28 June 2009</div></td>
          <td class="linkCopy">&nbsp;</td>
        </tr>
        <tr> 
          <td><img src="images/uvodnik.gif" align="bottom" /> Registration update 
            available until:</td>
          <td class="linkCopy"><div align="right">01 July 2009</div></td>
          <td class="linkCopy"><div align="right"></div></td>
        </tr>
      </table>
      <br />
      <p> <img src="images/registraion_update.gif" width="400" height="30" /><br />
        <br>
        If you have already registered and would like to review and/or change 
        your registration information, please log in to your account (updating 
        your registration will be possible until 01 July 2009): 
        <?php
	  if ($kodic==73) {echo "<br><br> <img src='images/usklicnik_manji.jpg' width='20' height='20' border='0' align='left' /> <span class='crvenoerror'>&nbsp; Invalid username and/or password. Please try again.</span>";}
	  ?>
      <form action="registration.php" method="post" name="formica">
	    <table width="300" border="0">
          <tr> 
            <td>E-mail:</td>
            <td><input name="email2" type="text" id="email2" size="30" maxlength="50" /></td>
          </tr>
          <tr> 
            <td>Password: </td>
            <td><input name="password2" type="password" id="password2" size="30" maxlength="20" /></td>
          </tr>
          <tr> 
            <td>&nbsp;</td>
            <td><div align="right"> 
                <input type="submit" name="upis" value="Login"  />
              </div></td>
          </tr>
        </table>

	  </form>
	  
      
      <br />
      <br>
	  <img src="images/registration.gif" width="400" height="30" /><br />
      <br />
      If you would like to register for the ICPS2009 conference, please <span class="linkCopy">first 
      read this and the next passage</span> (<em>&quot;Registration fee &amp; 
      payment&quot;</em>) thoroughly. <br />
      <br />
      Here are few things you should know <strong>before you register</strong>: 
      <ul>
        <li>Registration for the International Conference of Physics Students 
          (ICPS) 2009 is handled by the Croatian Physical Society and the Organising 
          Committee of the ICPS 2009.</li>
        <li>The conference is only open to members of IAPS (see <a href="http://www.iaps.info" target="_blank">www.iaps.info</a> 
          for more information).</li>
        <li>Registration is online only, but if you are unable to register online, 
          please contact us at <a href="mailto:icps2009@fizika.org">icps2009@fizika.org 
          </a>to arrange for a hardcopy version of the registration form.</li>
        <li>Note that some fields in the registration form are required to be 
          filled immediately upon registration, while others can be updated later.</li>
        <li>You will be able to update your registration at any time until 01 
          July 2009; you can update all of the information except your name, sex 
          and e-mail address.</li>
        <li>In case you forgot your password, please contact us at <a href="mailto:icps2009@fizika.org">icps2009@fizika.org</a> 
          and we will provide you with a new one.</li>
        <li>Registration fee can be paid by bank transfer; read more about this 
          in the <em>&quot;Registration fee &amp; payment&quot;</em> passage below.</li>
      </ul>
      <p>In the registration form, you will be asked whether you wish to present 
        a poster or give a lecture at the conference. To participate in the ICPS2009 
        conference, it is not mandatory to present a poster or a lecture. However, 
        be advised that, due to obvious limitations in accommodation, <strong>not 
        all applications for participation will be approved</strong>; priority 
        will be given to applicants with a lecture or a poster, and the final 
        decision will be on the Organising Committee.</p>
      <ul>
        <li>Due to these reasons, your registration for the conference does not 
          immediately guarantee that your application has been accepted (in your 
          user account, you will see <em>&quot;being processed&quot;</em> status 
          by default).</li>
        <li>The Organising Committee will then review your application as soon 
          as possible, and let you know its decision by e-mail and through your 
          user account (your status will change to <em>&quot;approved&quot;</em> 
          or <em>&quot;declined&quot;</em>).</li>
        <li>If for some reason you need to know this decision before certain date 
          (e.g. due to your travel plans), please state that in the <em>&quot;Special 
          requirements&quot;</em> field in the registration form.</li>
        <li>Again, if you have some form of presentation, this will greatly increase 
          chances of your registration being approved, as well as reduce the time 
          to reach the decision on it.</li>
      </ul>
        
        If you decide to <strong>present a poster or give a lecture</strong>, 
      here are few things you should know about this: 
      <ul>
        <li>Presentation topic may be on any subject within the fields of physics 
          and physical sciences. </li>
        <li>Due to obvious limitations, it may happen that not all lectures or 
          posters get accepted.</li>
        <li>Delegates wishing to present a lecture or poster at the conference 
          will be required to submit an abstract. You will be able to do that 
          in the registration form, with a maximum of 1000 characters and in plain 
          text format (use LaTeX syntax for mathematical symbols and formulas). 
          If you do not have an abstract ready at the time of the registration, 
          just choose <em>&quot;None&quot;</em> as your <em>&quot;Presentation&quot;</em>, 
          and you can later login to your account and update your registration 
          with the abstract. </li>
        <li><strong>Lecture presentations:</strong> 
          <ul>
            <li>Lecture presentation slots are available throughout the conference.</li>
            <li> Lecture presentations should be no more than 15 minutes in length 
              and will be followed by 5 minutes of questions from the audience.</li>
            <li>All presentations should be in Microsoft PowerPoint (PPT) or PDF 
              format.</li>
            <li>Please have your presentations ready upon registration in Split 
              on a CD/DVD or a USB stick.</li>
          </ul>
        <li ><strong>Poster presentations:</strong></li>
        <ul>
          <li>Poster presentation sessions will be on Sunday, August 16th.</li>
          <li>Poster presentations should be approximately A2 in size.</li>
          <li>It is your duty to bring your posters already printed.</li>
          <li> All posters should be put up on panels by the end of Tuesday 11th 
            August and will be displayed during both poster sessions. Participants 
            are expected to be at their poster in the session they&#8217;ve been 
            assigned to.</li>
        </ul>
        <li><strong>Submission deadline</strong> for the abstracts is the same 
          as for any other update of your registration: 01 July 2009.</li>
      </ul>
      <p>Also, note that visitors from many countries do not require a <strong>visa</strong> 
        to enter Croatia, but you should check with your travel agency. Participants 
        who do require a visa should allow plenty of time for their application 
        to be processed. Note that the Organising Committee can issue letters 
        of invitation to <strong>only those participants giving a presentation 
        at the conference.</strong><br />
        <br />
        <br />
      </p>
      <p><img src="images/registration_fee.gif" width="500" height="30" /><br>
        <br />
        &nbsp;Here are few things you should know about the <strong>registration 
        fee </strong>for the ICPS2009 conference:</p>
      <ul>
        <li><strong>Conference registration fee:</strong> 
          <ul>
            <li>Early registration fee (09 March 09 - 01 June 09): <strong>160 
              &euro;</strong></li>
            <li>Late registration fee (02 June 09 - 28 June 09): <strong>180 &euro;</strong></li>
          </ul>
        </li>
        <li>Note that these early and late registration fee dates are related 
          with the actual payment of the fee, and not the registration itself. 
        </li>
        <li><strong>Registration fee covers: </strong> 
          <ul>
            <li>shared accommodation at the ICPS accommodation venue for the duration 
              of the conference (8 nights, arriving on 10 August 09 and departing 
              18 August 09)</li>
            <li>breakfast, lunch and dinner each day of the conference (excluding 
              the day of the national party)</li>
            <li>social programme, city tour and some excursions</li>
            <li>attendance to scientific sessions and conference material</li>
          </ul>
        </li>
        <li>If you require accomodation on days other than between 10 August 09 
          and 18 August 09, it can be arranged for up to<strong> </strong>two 
          nights before 10 August 09 and two nights after 18 August 09 for extra 
          charge of <strong>18 &euro; per day</strong>, which can be paid upon 
          registration in Split.</li>
        <li><strong>Cancellation deadline is 28 June 2009</strong>, which means 
          that we will be <strong>unable to process refunds for cancellations 
          after this date.</strong> 
          <ul>
            <li>Registrants who cancel their registration before the cancellation 
              deadline of 28 June 2009 will receive a full refund minus a 20% 
              administrative charge.</li>
            <li>All cancellations must be in writing.</li>
            <li>No refund can be made to those notifying cancellation after 28 
              June 2009.</li>
          </ul>
        </li>
      </ul>
      Here are some details regarding the <strong>payment of the conference fee</strong>: 
      <ul>
        <li>Registration fee can be paid only by <strong>bank transfer</strong> 
          (details below). </li>
        <li>All payments must be made in euros (except for participants from Croatia, 
          refer to the last paragraph below).</li>
        <li>Please be aware that all bank transfer fees must be paid by the registrant.</li>
        <li><strong>You shouldn't pay the registration fee only until after your 
          registration has been confirmed</strong>, i.e. your application has 
          been approved by the Organising Committee, as described in the upper 
          passage.</li>
        <li>After making a payment, please enter as much data as you can about 
          your payment in your user account (under <em>&quot;Payment info&quot;</em>); 
          this will allow us to process your payment more quickly (you will not 
          be able to send that info until your registration has been approved).</li>
        <li>After your payment has been received, we will update your registration 
          info (which will be visible in your account) and you will receive a 
          confirmation e-mail.</li>
        <li>Please note that your registration will not be finally confirmed until 
          the payment is received.</li>
      </ul>
      Here are the details necessary for paying the conference fee by<strong> 
      bank transfer</strong>: 
      <ul>
        <li> Transaction description: &quot;ICPS2009 - first_name last_name&quot;</li>
        <li>Reference number: 800-2009</li>
        <li>Bank name: Zagrebacka banka d.d.</li>
        <li>Bank address: Savska 60, 10000 Zagreb, Croatia</li>
        <li>Account owner: Hrvatsko fizikalno drustvo</li>
        <li>Owner address: Bijenicka 32, 10000 Zagreb, Croatia</li>
        <li>Swift Code: ZABA HR2X</li>
        <li> IBAN: HR7123600001101301202</li>
      </ul>
      <p><strong>For participants from Croatia:</strong><br />
        <em>S obzirom da kao dr&#158;avljani Republike Hrvatske ne mogu uplatiti 
        kotizaciju na devizni ra&#269;un HFD-a, molimo sve sudionike ICPS-a 2009 
        iz Hrvatske da uplate iznos od <strong>1200 kn</strong> na &#158;iro ra&#269;un 
        HFD-a (Zagreba&#269;ka banka d.d., &#158;iro ra&#269;un broj <strong>2360000-1101301202</strong>) 
        s istim pozivom na broj kao i za sudionike iz drugih zemalja. </em></p></td>
		
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

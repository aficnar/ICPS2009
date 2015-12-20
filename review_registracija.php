<?php
session_start();
if ($_SESSION['check']!='ok') {header("location:admin.php");}

$brojevi=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0); 
$_SESSION['list']=$brojevi; 

if ($_SESSION['mirko']=='ok') {for ($i=1; $i<=30; $i++){$_SESSION['list'][$i]=1;} $_SESSION['mirko']='not_ok';}
else {
if ($_POST['checkbox1']=='checkbox'){$_SESSION['list'][1]=1;}
if ($_POST['checkbox2']=='checkbox'){$_SESSION['list'][2]=1;}
if ($_POST['checkbox3']=='checkbox'){$_SESSION['list'][3]=1;}
if ($_POST['checkbox4']=='checkbox'){$_SESSION['list'][4]=1;}
if ($_POST['checkbox5']=='checkbox'){$_SESSION['list'][5]=1;}
if ($_POST['checkbox6']=='checkbox'){$_SESSION['list'][6]=1;}
if ($_POST['checkbox7']=='checkbox'){$_SESSION['list'][7]=1;}
if ($_POST['checkbox8']=='checkbox'){$_SESSION['list'][8]=1;}
if ($_POST['checkbox9']=='checkbox'){$_SESSION['list'][9]=1;}
if ($_POST['checkbox10']=='checkbox'){$_SESSION['list'][10]=1;}
if ($_POST['checkbox11']=='checkbox'){$_SESSION['list'][11]=1;}
if ($_POST['checkbox13']=='checkbox'){$_SESSION['list'][13]=1;}
if ($_POST['checkbox12']=='checkbox'){$_SESSION['list'][12]=1;}
if ($_POST['checkbox14']=='checkbox'){$_SESSION['list'][14]=1;}
if ($_POST['checkbox15']=='checkbox'){$_SESSION['list'][15]=1;}
if ($_POST['checkbox16']=='checkbox'){$_SESSION['list'][16]=1;}
if ($_POST['checkbox17']=='checkbox'){$_SESSION['list'][17]=1;}
if ($_POST['checkbox18']=='checkbox'){$_SESSION['list'][18]=1;}
if ($_POST['checkbox19']=='checkbox'){$_SESSION['list'][19]=1;}
if ($_POST['checkbox20']=='checkbox'){$_SESSION['list'][20]=1;}
if ($_POST['checkbox21']=='checkbox'){$_SESSION['list'][21]=1;}
if ($_POST['checkbox22']=='checkbox'){$_SESSION['list'][22]=1;}
if ($_POST['checkbox23']=='checkbox'){$_SESSION['list'][23]=1;}
if ($_POST['checkbox24']=='checkbox'){$_SESSION['list'][24]=1;}
if ($_POST['checkbox25']=='checkbox'){$_SESSION['list'][25]=1;}
if ($_POST['checkbox26']=='checkbox'){$_SESSION['list'][26]=1;}
if ($_POST['checkbox27']=='checkbox'){$_SESSION['list'][27]=1;}
if ($_POST['checkbox28']=='checkbox'){$_SESSION['list'][28]=1;}
if ($_POST['checkbox29']=='checkbox'){$_SESSION['list'][29]=1;}
if ($_POST['checkbox30']=='checkbox'){$_SESSION['list'][30]=1;}
}

?>

<html>
<head>
<title>ICPS2009 Administration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stil.css" rel="stylesheet" type="text/css" />
</head>
<body>

<table width="100%" border="0">
  <tr> 
    <td width="100"><img src="images/logo_small.gif"></td>
    <td width="400"><img src="images/icps2009%20database.gif" width="400" height="30"></td>
    <td rowspan="2"> <form name="form1" method="post" action="">
        <table width="330" border="0" align="right">
          <tr class="malitekst"> 
            <td width="110" valign="top">
			  <input type="checkbox" name="checkbox1" value="checkbox" <?php if ($_SESSION['list'][1]==1) {echo 'checked="checked"';} ?> >No.<br> 
			  <input type="checkbox" name="checkbox2" value="checkbox" <?php if ($_SESSION['list'][2]==1) {echo 'checked="checked"';} ?> >First name<br> 
			  <input type="checkbox" name="checkbox3" value="checkbox" <?php if ($_SESSION['list'][3]==1) {echo 'checked="checked"';} ?> >Last name<br> 
			  <input type="checkbox" name="checkbox4" value="checkbox" <?php if ($_SESSION['list'][4]==1) {echo 'checked="checked"';} ?> >Sex<br> 
			  <input type="checkbox" name="checkbox5" value="checkbox" <?php if ($_SESSION['list'][5]==1) {echo 'checked="checked"';} ?> >Institution<br> 
			  <input type="checkbox" name="checkbox6" value="checkbox" <?php if ($_SESSION['list'][6]==1) {echo 'checked="checked"';} ?> >City<br> 
			  <input type="checkbox" name="checkbox7" value="checkbox" <?php if ($_SESSION['list'][7]==1) {echo 'checked="checked"';} ?> >Country<br> 
			  <input type="checkbox" name="checkbox8" value="checkbox" <?php if ($_SESSION['list'][8]==1) {echo 'checked="checked"';} ?> >Passport No. <br>
			  <input type="checkbox" name="checkbox9" value="checkbox" <?php if ($_SESSION['list'][9]==1) {echo 'checked="checked"';} ?> >Mem. type<br> 
              <input type="checkbox" name="checkbox10" value="checkbox" <?php if ($_SESSION['list'][10]==1) {echo 'checked="checked"';} ?> >E-mail			  
			  </td>
            <td width="110" valign="top"> 

			  <input type="checkbox" name="checkbox11" value="checkbox" <?php if ($_SESSION['list'][11]==1) {echo 'checked="checked"';} ?> >Share<br> 
			  <input type="checkbox" name="checkbox13" value="checkbox" <?php if ($_SESSION['list'][13]==1) {echo 'checked="checked"';} ?> >Arrival<br> 
			  <input type="checkbox" name="checkbox14" value="checkbox" <?php if ($_SESSION['list'][14]==1) {echo 'checked="checked"';} ?> >Departure<br> 
			  <input type="checkbox" name="checkbox15" value="checkbox" <?php if ($_SESSION['list'][15]==1) {echo 'checked="checked"';} ?> >Shirt<br> 
			  <input type="checkbox" name="checkbox16" value="checkbox" <?php if ($_SESSION['list'][16]==1) {echo 'checked="checked"';} ?> >Veg. <br>
              <input type="checkbox" name="checkbox17" value="checkbox" <?php if ($_SESSION['list'][17]==1) {echo 'checked="checked"';} ?> >Special<br> 
			  <input type="checkbox" name="checkbox18" value="checkbox" <?php if ($_SESSION['list'][18]==1) {echo 'checked="checked"';} ?> >Presentation <br>
              <input type="checkbox" name="checkbox19" value="checkbox" <?php if ($_SESSION['list'][19]==1) {echo 'checked="checked"';} ?> >Title<br>
              <input type="checkbox" name="checkbox20" value="checkbox" <?php if ($_SESSION['list'][20]==1) {echo 'checked="checked"';} ?> >Authors<br> 
			  <input type="checkbox" name="checkbox21" value="checkbox" <?php if ($_SESSION['list'][21]==1) {echo 'checked="checked"';} ?> >Area			  
			  </td>
            <td width="110" valign="top"> 

			  <input type="checkbox" name="checkbox22" value="checkbox" <?php if ($_SESSION['list'][22]==1) {echo 'checked="checked"';} ?> >Abstract<br>
              <input type="checkbox" name="checkbox23" value="checkbox" <?php if ($_SESSION['list'][23]==1) {echo 'checked="checked"';} ?> >Bank name <br>
              <input type="checkbox" name="checkbox24" value="checkbox" <?php if ($_SESSION['list'][24]==1) {echo 'checked="checked"';} ?> >Transaction <br>
              <input type="checkbox" name="checkbox25" value="checkbox" <?php if ($_SESSION['list'][25]==1) {echo 'checked="checked"';} ?> >Date payed <br>
              <input type="checkbox" name="checkbox26" value="checkbox" <?php if ($_SESSION['list'][26]==1) {echo 'checked="checked"';} ?> >Amount <br>
			  <input type="checkbox" name="checkbox12" value="checkbox" <?php if ($_SESSION['list'][12]==1) {echo 'checked="checked"';} ?> >Date reg. <br>
              <input type="checkbox" name="checkbox27" value="checkbox" <?php if ($_SESSION['list'][27]==1) {echo 'checked="checked"';} ?> >Approved <br>
              <input type="checkbox" name="checkbox28" value="checkbox" <?php if ($_SESSION['list'][28]==1) {echo 'checked="checked"';} ?> >Paid <br>
			  <input type="checkbox" name="checkbox29" value="checkbox" <?php if ($_SESSION['list'][29]==1) {echo 'checked="checked"';} ?> >Participant <br>
			  <input type="checkbox" name="checkbox30" value="checkbox" <?php if ($_SESSION['list'][30]==1) {echo 'checked="checked"';} ?> >Comment		  
			  </td>
          </tr>
          <tr > 
            <td colspan="3" valign="top"><div align="right"><br>
                Izaberite polja za prikaz: 
                <input type="submit" name="reload" value="Reload">
              </div></td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr> 
    <td width="100">&nbsp;</td>
    <td valign="bottom" width="400"><form name="forma" action="admin.php" method="post">
        <div align="right">Ne zaboravite se odlogirati: 
          <input name="logout" type="submit" value="Logout">
        </div>
      </form></td>
  </tr>
</table>
<p><strong><img src="images/uvodnik.gif" width="13" height="13"><a href="list.php" target="_blank"> 
  Countries list</a></strong><br>
  <br>
  Participanti su obojani plavom bojom i podebljani. Specijalni slucajevi su izlistani 
  ispod glavne tablice.<br>
  Ovo je verzija gdje se ispisuju samo sudionici bez organizatora i volontera.<br>
  <br>
  <?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con)
{
 die('Could not connect: ' . mysql_error());
}
     
mysql_select_db("icps2009", $con);
      
$result = mysql_query("SELECT * FROM participants ORDER BY lastname");   
$sirina=300+$_SESSION['list'][1]*20+$_SESSION['list'][2]*100+$_SESSION['list'][3]*100+$_SESSION['list'][4]*20+$_SESSION['list'][5]*150+
$_SESSION['list'][6]*100+$_SESSION['list'][7]*100+$_SESSION['list'][8]*100+$_SESSION['list'][9]*50+$_SESSION['list'][10]*250+$_SESSION['list'][11]*50+
$_SESSION['list'][12]*100+$_SESSION['list'][13]*50+$_SESSION['list'][14]*50+$_SESSION['list'][15]*50+$_SESSION['list'][16]*50+$_SESSION['list'][17]*150+
$_SESSION['list'][18]*80+$_SESSION['list'][19]*200+$_SESSION['list'][20]*150+$_SESSION['list'][21]*150+$_SESSION['list'][22]*100+$_SESSION['list'][23]*100+
$_SESSION['list'][24]*100+$_SESSION['list'][25]*100+$_SESSION['list'][26]*100+$_SESSION['list'][27]*50+$_SESSION['list'][28]*50+$_SESSION['list'][29]*50+$_SESSION['list'][30]*150;
echo "<table border='1' class='malitekst' cellpadding='3' width='".$sirina."'> <tr>";
     if ($_SESSION['list'][1]==1) {echo "<th width='20'>No.</th>";}
     if ($_SESSION['list'][2]==1) {echo "<th width='100'>First name</th>";}
     if ($_SESSION['list'][3]==1) {echo "<th width='100'>Last name</th>";}
     if ($_SESSION['list'][4]==1) {echo "<th width='20'>Sex</th>";}
     if ($_SESSION['list'][5]==1) {echo "<th width='150'>Institution</th>";}
     if ($_SESSION['list'][6]==1) {echo "<th width='100'>City</th>";}
     if ($_SESSION['list'][7]==1) {echo "<th width='100'>Country</th>";}
	 if ($_SESSION['list'][8]==1) {echo "<th width='100'>Passport No.</th>";}
	 if ($_SESSION['list'][9]==1) {echo "<th width='50'>Mem. type</th>";}
	 if ($_SESSION['list'][10]==1) {echo "<th width='250'>E-mail</th>";}
	 if ($_SESSION['list'][11]==1) {echo "<th width='50'>Share?</th>";}
	 if ($_SESSION['list'][13]==1) {echo "<th width='50'>Arrival</th>";}
	 if ($_SESSION['list'][14]==1) {echo "<th width='50'>Departure</th>";}
	 if ($_SESSION['list'][15]==1) {echo "<th width='50'>Shirt</th>";}
	 if ($_SESSION['list'][16]==1) {echo "<th width='50'>Veg</th>";}
	 if ($_SESSION['list'][17]==1) {echo "<th width='150'>Special</th>";}
	 if ($_SESSION['list'][18]==1) {echo "<th width='80'>Presentation</th>";}
	 if ($_SESSION['list'][19]==1) {echo "<th width='200'>Title</th>";}
	 if ($_SESSION['list'][20]==1) {echo "<th width='150'>Authors</th>";}
	 if ($_SESSION['list'][21]==1) {echo "<th width='150'>Area</th>";}
	 if ($_SESSION['list'][22]==1) {echo "<th width='100'>Abstract</th>";}
	 if ($_SESSION['list'][23]==1) {echo "<th width='100'>Bank</th>";}
	 if ($_SESSION['list'][24]==1) {echo "<th width='100'>Transaction</th>";}
	 if ($_SESSION['list'][25]==1) {echo "<th width='100'>Date payed</th>";}
	 if ($_SESSION['list'][26]==1) {echo "<th width='100'>Amount</th>";}
 	 if ($_SESSION['list'][12]==1) {echo "<th width='100'>Date reg.</th>";}
	 if ($_SESSION['list'][27]==1) {echo "<th width='50'>Approved?</th>";}
	 if ($_SESSION['list'][28]==1) {echo "<th width='50'>Paid?</th>";}
	 if ($_SESSION['list'][29]==1) {echo "<th width='50'>Participant?</th>";}
	 if ($_SESSION['list'][30]==1) {echo "<th width='150'>Comment</th>";}	
	 echo "<th width='150'>Excfirst</th>"; 	  
	 echo "<th width='150'>Excsecond</th>"; 	  
	  
      echo "</tr>";
$solana=1;      
while($row = mysql_fetch_array($result))
{
if ($row['participant']=='Yes' && $row['comment']!='Organizator' && $row['comment']!='Volonter (Zagreb)' && $row['comment']!='Volonter (Split)') {
$solana=$solana+1;
if ($row['special']=='') {$row['special']='&nbsp;';}
if ($row['authors']=='') {$row['authors']='&nbsp;';}
if ($row['title']=='') {$row['title']='&nbsp;';}
if ($row['abstract']=='') {$row['abstract']='&nbsp;';}
if ($row['area']=='') {$row['area']='&nbsp;';}
if ($row['feebank']=='') {$row['feebank']='&nbsp;';}
if ($row['feeamount']=='') {$row['feeamount']='&nbsp;';}
if ($row['feedate']=='') {$row['feedate']='&nbsp;';}
if ($row['feeno']=='') {$row['feeno']='&nbsp;';}
if (($solana%2)==0) {echo "<tr bgcolor='#DFDFEE'>";} else {echo "<tr>";}
if ($_SESSION['list'][1]==1) {
  echo "<td width='20' align='center'>";
  if ($row['participant']=='Yes') {echo '<font color="#0000FF"><strong>';}
  echo $row['broj']; 
  if ($row['participant']=='Yes') {echo '</strong></font>';}
  echo "</td>";}
 if ($_SESSION['list'][2]==1) {
  echo "<td width='100'>" ;
  if ($row['participant']=='Yes') {echo '<font color="#0000FF"><strong>';}
  echo $row['firstname'];
  if ($row['participant']=='Yes') {echo '</strong></font>';} 
  echo "</td>";}
 if ($_SESSION['list'][3]==1) {
  echo "<td width='100'>" ;
  if ($row['participant']=='Yes') {echo '<font color="#0000FF"><strong>';}
  echo $row['lastname'];
  if ($row['participant']=='Yes') {echo '</strong></font>';} 
  echo "</td>";}
 if ($_SESSION['list'][4]==1) {echo "<td width='20' align='center'>" . $row['sex'] . "</td>";}
 if ($_SESSION['list'][5]==1) {echo "<td width='150'>" . $row['institution'] . "</td>";}
 if ($_SESSION['list'][6]==1) {echo "<td width='100'>" . $row['city'] . "</td>";}
 if ($_SESSION['list'][7]==1) {echo "<td width='100'>" . $row['country'] . "</td>";}
 if ($_SESSION['list'][8]==1) {echo "<td width='100' align='center'>" . $row['passport'] . "</td>";}
 if ($_SESSION['list'][9]==1) {echo "<td width='50' align='center'>" . $row['memtype'] . "</td>";}
 if ($_SESSION['list'][10]==1) {echo "<td width='250' align='center'>" . $row['email'] . "</td>";}
 if ($_SESSION['list'][11]==1) {echo "<td width='50' align='center'>" . $row['share'] . "</td>";}
 if ($_SESSION['list'][13]==1) {echo "<td width='50' align='center'>" . $row['arrival'] . "</td>";}
 if ($_SESSION['list'][14]==1) {echo "<td width='50' align='center'>" . $row['departure'] . "</td>";}
 if ($_SESSION['list'][15]==1) {echo "<td width='50' align='center'>" . $row['shirt'] . "</td>";}
 if ($_SESSION['list'][16]==1) {echo "<td width='50' align='center'>" . $row['veg'] . "</td>";}
 if ($_SESSION['list'][17]==1) {echo "<td width='150'>" . $row['special'] . "</td>";}
 if ($_SESSION['list'][18]==1) {echo "<td width='80' align='center'>" . $row['participation'] . "</td>";}
 if ($_SESSION['list'][19]==1) {echo "<td width='200'>" . $row['title'] . "</td>";}
 if ($_SESSION['list'][20]==1) {echo "<td width='150'>" . $row['authors'] . "</td>";}
 if ($_SESSION['list'][21]==1) {echo "<td width='150'>" . $row['area'] . "</td>";}
 if ($_SESSION['list'][22]==1) {echo '<td width="100" align="center"><a href="javascript:ootvori'; echo "('abstract.php?brojbroj=". $row['broj'] ."')"; echo '">abstract</a></td>';}
 if ($_SESSION['list'][23]==1) {echo "<td width='100' align='center'>" . $row['feebank'] . "</td>";}
 if ($_SESSION['list'][24]==1) {echo "<td width='100' align='center'>" . $row['feeno'] . "</td>";}
 if ($_SESSION['list'][25]==1) {echo "<td width='100' align='center'>" . $row['feedate'] . "</td>";}
 if ($_SESSION['list'][26]==1) {echo "<td width='100' align='center'>" . $row['feeamount'] . "</td>";}
 if ($_SESSION['list'][12]==1) {echo "<td width='100' align='center'>" . $row['date'] . "</td>";} 
 if ($_SESSION['list'][27]==1) {echo "<td width='50' align='center'>" . $row['approvedreg'] . "</td>";} 
 if ($_SESSION['list'][28]==1) {echo "<td width='50' align='center'>" . $row['paid'] . "</td>";}
 if ($_SESSION['list'][29]==1) {echo "<td width='50' align='center'>" . $row['participant'] . "</td>";}
 if ($_SESSION['list'][30]==1) {echo "<td width='150'>" . $row['comment'] . "</td>";} 
 echo "<td width='150' align='center'>" . $row['excfirst'] . "</td>";
 echo "<td width='150' align='center'>" . $row['excsecond'] . "</td>"; 
 echo "</tr> ";
}}
echo "</table> </span>";
                         
mysql_close($con);
?>
</p>
<br><br>
<br>

<span class="link">Pozitivni specijalni slucajevi</span><br>
<ul><li>registranti kojima je odobrena registracije, nisu platili fee, te se vode 
  kao sudionici konferencije (participant = Yes)
</li></ul>


<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error());}     
mysql_select_db("icps2009", $con);      
$result = mysql_query("SELECT * FROM participants ORDER BY lastname");   
echo "<table border='1' class='malitekst' cellpadding='3' width='570'> <tr>";
echo "<th width='20'>No.</th>";
echo "<th width='100'>First name</th>";
echo "<th width='100'>Last name</th>";
echo "<th width='100'>Country</th>";
echo "<th width='250'>Comment</th>";	 	  
echo "</tr>";
$solana=1;      
while($row = mysql_fetch_array($result))
{
if (($row['approvedreg']=='Yes') && ($row['paid']=='No' || $row['paid']=='Spec') && ($row['participant']=='Yes')){
$solana=$solana+1;
if (($solana%2)==0) {echo "<tr bgcolor='#DFDFEE'>";} else {echo "<tr>";}
echo "<td width='20' align='center'>". $row['broj'] ."</td>";
echo "<td width='100'>". $row['firstname'] ."</td>";
echo "<td width='100'>". $row['lastname'] ."</td>";  
echo "<td width='100'>" . $row['country'] . "</td>";
echo "<td width='250'>" . $row['comment'] . "</td>";
echo "</tr>";
}}
echo "</table> </span>";
mysql_close($con);
?>
<br>
<br>
<br><br>


<span class="link">Negativni specijalni slucajevi</span><br>
<ul><li>registranti kojima je odobrena registracije, platili su fee, no ne vode se 
  kao sudionici konferencije (participant = No)
</li></ul>

<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){ die('Could not connect: ' . mysql_error());}     
mysql_select_db("icps2009", $con);      
$result = mysql_query("SELECT * FROM participants ORDER BY broj");   
echo "<table border='1' class='malitekst' cellpadding='3' width='570'> <tr>";
echo "<th width='20'>No.</th>";
echo "<th width='100'>First name</th>";
echo "<th width='100'>Last name</th>";
echo "<th width='100'>Country</th>";
echo "<th width='250'>Comment</th>";	 	  
echo "</tr>";
$solana=1;      
while($row = mysql_fetch_array($result))
{
if (($row['approvedreg']=='Yes') && ($row['paid']=='Yes') && ($row['participant']=='No')){
$solana=$solana+1;
if (($solana%2)==0) {echo "<tr bgcolor='#DFDFEE'>";} else {echo "<tr>";}
echo "<td width='20' align='center'>". $row['broj'] ."</td>";
echo "<td width='100'>". $row['firstname'] ."</td>";
echo "<td width='100'>". $row['lastname'] ."</td>";  
echo "<td width='100'>" . $row['country'] . "</td>";
echo "<td width='250'>" . $row['comment'] . "</td>";
echo "</tr>";
}}
echo "</table> </span>";
mysql_close($con);
?>


</body>
<script language="JavaScript">
function ootvori(mirko) {window.open(mirko,"Abstract","menubar=no,width=650,height=400,toolbar=no");}
</script>
</html>
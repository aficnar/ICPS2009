<?php

$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE prihvaceno='Yes'");   
echo "Napomena: Livia Maria (149) ima ono S u prezimenu s kvacicom dole<br><br>";
echo "<strong>Sljedece fajlove nisam u potpunosti uspio spojiti:</strong><br>";
$brojac=0;
while($row = mysql_fetch_array($result)){
  $kontrola=0;
  for ($i=1; $i<=$brojac; $i++){if ($naslovi[$i]==$row['title']) {$kontrola=1;}}
  if ($kontrola==0) {
    $brojac++;
    $naslovi[$brojac]=$row['title'];
  }
}
for ($i=1; $i<=$brojac; $i++) {
  $query='SELECT * FROM participants WHERE title="'.$naslovi[$i].'"';
  $result = mysql_query($query);  
  $macka=0; 
  while($row = mysql_fetch_array($result)){
    $macka++;
    if ($macka==1) {
	  if (strlen($row['title'])>30) {$imetemp=substr($row['title'],0,30);} else {$imetemp=$row['title'];}
	  if ($row['participation']=='Lecture') {$fime='abstracts/lectures/'.$imetemp.'.tex';}
	  if ($row['participation']=='Poster') {$fime='abstracts/posters/'.$imetemp.'.tex';}
//	  if ($row['participation']=='Lecture') {$fime='abstracts/lecture'.$row['broj'].'.tex';}
//	  if ($row['participation']=='Poster') {$fime='abstracts/poster'.$row['broj'].'.tex';}	  
      $file=fopen($fime,"w");
      fwrite($file,"\\begin{center} \n");
	  if ($row['participation']=='Lecture') {
	    fwrite($file,"\\textsc{Lecture Hall } \n");
	    fwrite($file,"\\vskip 0.3cm \n");
	  }
      fwrite($file,"{\\small{\\textbf{".$row['title']."}}}\\\\ \n");
	  fwrite($file,"\\vskip 0.15 cm \n");
	  $autori=$row['authors'];
	  $institucija='';
	  $abstrakt=$row['abstract'];
	}
	$ime=$row['firstname'].' '.$row['lastname'];
	if (!strpos("macka".$autori,$ime)==FALSE) {
	  $autori=substr($autori,0,strpos($autori,$ime)).$ime.'$^'.$macka.'$'.substr($autori,strpos($autori,$ime)+strlen($ime));
	} else {echo $fime."<br>";}
	$institucija=$institucija.'\\textit{$^'.$macka.'$'.$row['institution'].', '.$row['city'].', '.$row['country'].'}\\\\'. " \n";
  }
  fwrite($file,$autori."\\\\ \n");
  fwrite($file,"\\vskip 0.15 cm \n");
  fwrite($file,$institucija);
  fwrite($file,"\\end{center} \n");  
  fwrite($file,"\\vskip 0.5cm \n");
  fwrite($file,"\\indent\\indent ");
  fwrite($file,$abstrakt);
  fwrite($file,"\n");
  fwrite($file,"\\vskip 0.4cm \n");
  fwrite($file,"\\hrule \n");
  fclose($file);
}

mysql_close($con);

?>
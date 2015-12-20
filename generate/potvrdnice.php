<?php
$con = mysql_connect("localhost","icps2009","DghC11pQ");
if (!$con) {die('Could not connect: ' . mysql_error());}
mysql_select_db("icps2009", $con);
$result = mysql_query("SELECT * FROM participants WHERE participant='Yes' ORDER BY lastname");  
$brojac=0; 
while($row = mysql_fetch_array($result)){
    echo "\\thispagestyle{empty} <br>";
    echo "$$ $$ <br>";
    echo "\\vskip 7 cm <br>";
    echo "\\begin{center}This is to certify that\\end{center} <br>";
    echo "\\vskip 1 cm <br>";
    echo "\\begin{center}\\textit{\\huge{\\textbf{".$row['firstname']." ".$row['lastname']."}}}\\end{center} <br>";
    echo "\\vskip 1 cm <br>";
    echo "\\begin{center}has participated in the ICPS2009 conference\\\\ <br>";
    echo "held in Split, Croatia in August 2009.\\end{center} <br>";
    echo "\\vskip 2 cm <br>";
    echo "\\flushright{\\textit{Marko Sever\\hskip 2.5 cm}} <br>";
    echo "\\vskip 2 cm <br>";
    echo "\\flushright{\\textit{Chair of the ICPS2009 Organising Committee}} <br>";
    echo "\\newpage <br><br>";
}
mysql_close($con);
?>
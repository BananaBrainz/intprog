<HTML>
<TITLE> Таблица умножения </TITLE>
<BODY>
<TABLE border=1>
<?php
$color = "red";
for ($i=1; $i<=10; $i++) { 
 echo ("<tr>"); 
 for ($k=1; $k<=10; $k++) { 
 echo ("<td align=center>"); 
 $d++; 
 if ($d % 2 == 1) {
 echo ($d); } else {
    echo ("<p><font color=$color>$d</font>");
 }
 echo ("</td>");
 }
 echo ("</tr>");
}
?>
</TABLE>
</BODY>
</HTML>
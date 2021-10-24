<HTML>
<TITLE> denisov</TITLE>
<BODY>
<p>V3
<p>
<?php

$i=rand(1,100);
print "i=$i <br>";
$sn=$i;
$b=0;
	for($a=1;$a<=$i;$a++){
	if ($i%$a==0)
	{
	$b=$b+$a;
	}
}
if($b-$sn-1==0)
	{echo "i=0";}
else {print (($b-$sn-1). '-характер натурального числа'.'<br>');}
?>

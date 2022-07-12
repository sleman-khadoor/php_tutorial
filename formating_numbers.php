<?php
//
$num = 25123567;
$num2 = 25123567.4334;
echo 'Ihave &pound;',$num;
echo "<br>";
echo 'Ihave &pound;',number_format($num);
echo "<br>";
echo 'Ihave &pound;',number_format($num2,3);
echo "<br>";
echo 'Ihave &pound;',number_format($num2,3,' ',',');
echo "<br>";
echo 'Ihave &pound;',number_format($num2,3,',',' ');
echo "<br>";
?>
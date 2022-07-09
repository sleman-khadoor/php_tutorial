<?php
$names = array(
'ali'=> array('hair'=>'blond','age'=>22,'food'=>array('pizza','pasta')),
'ahmad'=>array('hair'=>'black','age'=>32),
'mohamad'=>array('hair'=>'brown','age'=>16));
print_r($names);
echo'<br>';
echo $names['ali']['hair'];
echo'<br>';
echo $names['ali']['food'][1];
?>

<?php
$levels = array(1,2,3);

// var_dump  we can us it whenever we need to view information about variables and functions 
// like we can do : var_dump($levels) and it will print that levels is an array of three elements and other info about its elements

print_r($levels);
echo"<br>";

$levels1= array(
1=>'level1',
2=>'level2',
3=>'level3'
);

print_r($levels1);
echo"<br>";

$levels2= array(
    1=>array('name'=>'level1','desc'=>'description1'),
    2=>array('name'=>'level2','desc'=>'description2'),
    3=>array('name'=>'level2','desc'=>'description3')
    );

echo'<pre>',print_r($levels2,true),'</pre>';
?>
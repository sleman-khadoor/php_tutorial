<?php
$names = array('ali','ahmad','mohamad');
// print the whole array
print_r($names);
echo '<br>';
// prit an element using its index
echo $names[0];
echo '<br>';

// we can make new indexing method
$ages = array ('ali'=>22,'ahmad'=>30,'mohamad'=>18);
echo $ages['ali'];
echo '<br>';


$ages['dany']=19;
print_r($ages);
echo '<br>';

?>
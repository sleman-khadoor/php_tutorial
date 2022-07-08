<?php
$number =10;
$number2 ='10';
// == tests the two values if they are the same without lokking to the data type
if($number == $number2)
{
    echo "== does not pay attention to the type <br>";
}
else{
    echo "==  pays attention to the type <br>";

}

if($number === $number2)
{
    echo "=== does not pay attention to the type <br>";
}
echo "=== pays attention to the type <br>";

?>

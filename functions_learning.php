<?php
// void function
function name($var){

    echo "$var <br>";
}
// not void function
function namereturned($par){
    return "my name is $par <br>";
}
name('sleman');
$resault= namereturned('sleman');
echo $resault."<br>";
?>
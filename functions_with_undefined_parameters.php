<?php
function add ($num1,$num2){
    // 
    $total=0;
    //it returns an array of any thing you pass to it
    print_r(func_get_args());
    echo "<br><br>";
    foreach(func_get_args() as $arg)
    {
        // parsing inputs
        $total = $total + (int)$arg;
    }
    return $total;
}
echo add(10,20);
?>
<?php
$names = array('alex','dani','ali');
foreach($names as $item)
{
    echo "names have : $item";
    echo '<br>';
}
$ages = array('ali'=>12,'yousef'=>19,'dani'=>44);
foreach($ages as $key=>$value)
{
    echo "$key is $value";
    echo '<br>';
}
?>
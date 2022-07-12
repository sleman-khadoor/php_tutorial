<?php
function append($initial)
{
    $resault = func_get_args()[0];
    foreach(func_get_args() as $key=>$value)
    {
        if($key >= 1)
        {
            $resault .=' '.$value;
        }
        
    }
    return $resault;
}

echo append('sleman', 'hasan', 'khadoor');
?>
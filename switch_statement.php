<?php
$num = 10;
$name = 'ali';
switch($num)
{
    case 1:
        echo '1';
        break;
    case 3:
        echo 3;
        break;
    case 10:
        echo 10;
        break;
    default:
        echo 'nuber not recognized';

}

switch($name)
{
    case 'ahmad':
    case 'yousef':
    case 'ali':
        echo 'hello dear';
        break;
    default:
        echo 'who are you ?';
        break;

}
?>

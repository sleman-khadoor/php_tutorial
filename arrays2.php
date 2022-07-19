// the same old example
// but here we teach you how to access elements in associative array_search
// echo levels[1]['name'];

// create a variable as a global variable

<?php
echo '<br>';
$GLOBALS['level'] = array(
    1=>array('name'=>'level1','desc'=>'description1'),
    2=>array('name'=>'level2','desc'=>'description2'),
    3=>array('name'=>'level2','desc'=>'description3')    
);
echo '<br>';

function level_data($level,$data)
{
    if(array_key_exists($level,$GLOBALS['level']) === true){
        return $GLOBALS['level'][$level][$data];

    }
    else return false;

}
echo '<br>';

var_dump(level_data(1,'desc'));
?>

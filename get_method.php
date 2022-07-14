<form action="get_method.php" method="GET">
    Name:<br><input type="text" name="name"><br>
    Age:<br><input type="text" name="age"><br><br>
    <input type="submit" value="Submit">

</form>
<?php
// Get associative array

if(isset($_GET['name']) && isset($_GET['age']))
{
    $name = $_GET['name'];
    $age = $_GET['age'];
    if(!empty($name) && !empty($age))
    {
        echo "My name is $name and I am $age years old";
    }
}
?>
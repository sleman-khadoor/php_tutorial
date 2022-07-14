<form action="post_method.php" method="POST">
    Please Enter your Password:<br>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
    <br><br>
</form>

<?php
$password ="password";
if( isset($_POST['password']) && !empty( $_POST['password']))
{
    echo "submitted and filled";
    echo "<br>";
    if($_POST['password'] == $password)
    {
        echo "Correct Password";

    }
    else{
        echo"Incorrect Password";
    }
}
?>
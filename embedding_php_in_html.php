<?php
$sentence=" ";
if (isset($_POST['name']))
{
    $name=$_POST['name'];
    if(!empty($name))
    {
        $sentence=$name.' wake up and teach us php';
    }
    else{
        echo "please enter a name";
    }
}
?>
<html>
    <head>

    </head>
    <body>
        <form action="embedding_php_in_html.php" method="POST">
            Type your name here:<br> <input type="text" name="name">
            <input type="submit" name="Submit">
        </form>

        <textarea ><?php echo $sentence;?></textarea>
    </body>
</html>
<?php
?>
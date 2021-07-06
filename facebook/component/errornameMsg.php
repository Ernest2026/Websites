<?php $class = "none-n"; 
    if (isset($_POST["submit"])){
    if(empty($_POST['name']) && empty($_POST['password'])){
    $class = "show-n"; 
    }
}

    echo $class; 
?>
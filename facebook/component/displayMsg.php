<?php $class = "width-a"; 
    if (isset($_POST["submit"])){
    if(empty($_POST['name']) || empty($_POST['password'])){
    $class = "widthvalidate"; 
    }
}

    echo $class; 
?>

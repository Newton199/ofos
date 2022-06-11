<?php
    session_start();   

    $name = $_POST['fname'];
    $price = $_POST['fprice'];
    $qty   = 1;
    
    $product = array($name, $price, $qty);

    $_SESSION[$name] = $product;
    
    header('location:userpanel.php');  
?>

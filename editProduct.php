<?php
    session_start();

    $name = $_POST['name0'];
    $price = $_POST['name1'];
    $qty = $_POST['name2'];
    $event = $_POST['event'];

    $product = array($name, $price, $qty);

    if($event == "update"){
        $_SESSION[$name] = $product;
    }
    else if($event=="delete"){
        unset($_SESSION[$name]);
    }
    header('location:viewCart.php');
?>
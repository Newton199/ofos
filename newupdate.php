<?php 
    include ("connection.php");
    
    $fid = $_GET['fid'];
    $name = $_GET['fname'];
    $qty = $_GET['quantity'];
    $price = $_GET['price'];


    $query = "UPDATE manage_food SET name ='$name', quantity = '$qty', price = '$price' WHERE food_id = '$fid'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        header('location:manageFood.php');
    }
    else
    {
        echo "<font color='blue'> error!";
    }                                            
?>
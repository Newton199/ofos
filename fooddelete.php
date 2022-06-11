<?php
    include("connection.php");
    $query = "DELETE FROM manage_food WHERE food_id = '$_GET[id]'";
    $result = mysqli_query($con, $query);

    if($result)
    {
        echo "<script>";
        echo "alert('delete successfully');";
        echo "</script>";
        header('location:manageFood.php');
    }
    else
    {
        echo "<script>";
        echo "alert('food not deleted due some error!');";
        echo "</script>";
    }
?>
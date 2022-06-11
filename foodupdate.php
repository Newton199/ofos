<?php
    include ("connection.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM manage_food WHERE food_id = $id";
    // $query = "UPDATE manage_food SET name = 'ABC' WHERE food_id = $id";
    $result = mysqli_query($con,$query);

    if($result)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $fid = $row['food_id'];
            $name = $row['name'];
            $qty = $row['quantity'];
            $price = $row['price'];
        }
    }
    else{
        echo "error";
    }
?>

<!DOCTYPE html>
<head>
    <title>Update</title>
    <style>
        .formmodel{
            position:fixed;
            left:35%;
            right:35%;
            top:20%;
            border:1px solid black;
            padding:10px;
        }
        input[type=text]{
            width:90%;
            padding:10px 12px;
            margin-top:8px;
            margin-bottom:8px;
        }
        .updatebtn{
            color:white;
            background-color:blue;
            width:97%;
            border:none;
            padding:14px 20px;
        }
    </style>
</head>
<body>
    <div class="formmodel">
        <form action="newupdate.php" method = "GET">
            <b>Food ID:</b>
            <input type="text" name="fid" id="" value = "<?php echo $fid; ?>" required>
            <b>Food Name:</b>
            <input type="text" name="fname" id="" value = "<?php echo $name; ?>" required>
            <b>Quantity:</b>
            <input type="text" name="quantity" id="" value = "<?php echo $qty; ?>" required>
            <b>Price:</b>
            <input type="text" name="price" id="" value = "<?php echo $price ?>" required>                            

            <input type="submit" value="Update" class = "updatebtn" name = "addfood">
        </form>
    </div>
</body>
</html>
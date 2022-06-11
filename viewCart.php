<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart</title>
    <style>
        .addCartDetails{
            position:fixed;
            left:25%;
            right:25%;
            top:10%;
            margin:20px;
        }
        .addCartDetails table, th, td {
            border: 1px solid gray;
            border-collapse: collapse;
            padding:6px;
            font-size:20px;  
        } 

        .btn{
            padding:3px;
            font-size:18px;
            color:white;
            border:none;
            border-radius:5px;
            font-family:arial;
        }
        #hbtn{
            background-color:orange;        
        }
        #ubtn{
            background-color:blue;
        }
        #dbtn{
            background-color:red;
        }
        #opbtn{
            background-color:blue;
        }
        #csbtn{
            background-color:red;
        }
        .addCartDetails h2{
            background-color:gray;
            color:orange;
        }
        .addCartDetails .processbtn{
            margin-top:25px;
            padding:5px 95px;
            background-color:gray;
        }
    </style>
</head>
<body>
    
    <a href="userpanel.php"><input type="submit" value="Home" class='btn' id="hbtn"></a>

    <div class="addCartDetails">
        <h2 align="center">Your Cart Products</h2>
    <table border="0">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Update</th>
            <th>Remove</th>
        </tr>
        <tbody>

            <?php
                $bill = 0;
                $sn = 1;
                foreach($_SESSION as $products)
                {
                    $p = 0;
                    $q = 0;
                    echo "<tr>";
                    echo "<form action='editProduct.php' method='POST'>";
                        echo "<td>".($sn++)."</td>";
                        foreach($products as $key => $value)
                        {
                            if($key==0){                                
                                echo "<td>".$value."</td>";
                                echo "<input type = 'hidden' name = 'name$key' value = '".$value."'>";
                            }
                            else if($key==1){
                                echo "<input type = 'hidden' name = 'name$key' value = '".$value."'>";
                                echo "<td>".$value."</td>";
                                $p = $value;
                            }
                            else if($key == 2){
                                echo "<td><input type = 'text' name = 'name$key' value = '".$value."' size='3'></td>"; //name$key for name uniqueness
                                $q = $value;
                            }
                        }
                        $bill = $q * $p;
                        echo "<td>".($bill)."</td>";
                        echo "<td><input type='submit' name = 'event' = value = 'update' class='btn' id = 'ubtn'></td>";
                        echo "<td><input type='submit' name = 'event' = value = 'delete' class='btn' id = 'dbtn'></td>";
                    echo "</form>";
                    echo "</tr>";                   
                }
            ?>
        </tbody>
    </table>
        <div class="processbtn">
            <a href="userpanel.php"><input type="submit" value="Continue Shopping" class="btn" id = "csbtn"></a>
            <a href="order_login.php"><input type="submit" value="Order Processing" class="btn" id = "opbtn"></a>
        </div>
    </div>
</body>
</html>
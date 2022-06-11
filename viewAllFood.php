<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Food Ordering System</title>
    <link rel="stylesheet" href="userpanelstyle.css">
    <style>
        .section2{
            position: absolute;
            top:120px;
            left:120px;
            right: 120px;
        }
    </style>
</head>
<body>
    <div class="main">
        <nav>
            <div class="nav_heading">OFOS</div>
            <ul>
                <li><a href="userpanel.php" class = "active">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="endSessionTry.php">FEEDBACK</a></li>
                <li><a href="viewCart.php" class = "cart">
                    <span>CART</span> 
                    <span class = "badge" id = "cart_value">0</span></a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </nav>

        
        <section class="section2">
            <h1>All Available Foods</h1>

            <!-- ******************************************************* -->
            

            <!-- PHP Start -->
            <?php
                include 'connection.php';

                $query = "SELECT * FROM manage_food";
                $result = mysqli_query($con, $query);

                if($result)
                {                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['food_id'];
                        $picture = $row['picture'];
                        $name = $row['name'];
                        $price = $row['price'];

                        //for main -->
                        echo "<div class='cart_main'>";
                            echo "<form action = 'insertCart.php' method = 'POST'>";

                                // for image
                                echo "<div class='image'>";
                                    echo "<img src='$picture' alt='' height='250' width='180' id = 'image'>";
                                echo "</div>";

                                // for description and button -->
                                echo "<div class='disc'>";
                                    echo "<p>$name</p1>";
                                        echo "<input type = 'hidden' value = '".$name."' name = 'fname'>";
                                    echo "<h3>Rs.$price/-</h3>";
                                        echo "<input type = 'hidden' value = '".$price."' name = 'fprice'>";

                                    echo "<div class='btn'>";
                                        echo "<input type = 'submit' value = 'Add To Cart' class = 'btn1' onclick='addToCartFun();'>";
                                    echo "</div>";
                                echo "</div>";

                            echo "</form>";

                        echo "</div>";
                    }
                }
            ?>          
            
            <!-- ******************************************************* -->

            <!-- Js code for cart increment -->
            <script>
                function addToCartFun(){
                    static var a = parseInt(document.getElementById('cart_value').innerText);
                    alert('add successfully!');
                    var a = a+1;
                    document.getElementById('cart_value').innerText=a;
                }
            </script>
            <!-- end js -->
        </section>
    
    </div>
</body>
</html>
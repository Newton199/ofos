<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Food Ordering System</title>
    <link rel="stylesheet" href="userpanelstyle.css">
</head>
<body>
    <div class="main">
        <nav>
            <div class="nav_heading">OFOS</div>
            <ul>
                <li><a href="#" class = "active">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="feedback.php">FEEDBACK</a></li>
                <li><a href="viewCart.php" class = "cart">
                    <span>CART</span> 
                    <span class = "badge" id = "cart_value"></span></a></li>
                <li><a href="login-page.php">LOGIN</a></li>
            </ul>
        </nav>

        <section class="section1">
            <!-- image -->
            <div class="image_heading">
                <h1>Online Food Ordering System</h1>
            </div>
        </section>
        
        <section class="section2">
            <h1>Today's Special</h1>

            <!-- ******************************************************* -->
            

            <!-- PHP Start -->
            <?php
                include 'connection.php';

                $query = "SELECT * FROM manage_food";
                $result = mysqli_query($con, $query);
                $count = 0;

                if($result)
                {                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row['food_id'];
                        $picture = $row['picture'];
                        $name = $row['name'];
                        $price = $row['price'];

                        $count = $count+1;
                        if($count==9) {
                            break;
                        }

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
                                        echo "<input type = 'submit' onclick='addToCartFun();' value = 'Add To Cart' class = 'btn1'>";
                                    echo "</div>";
                                echo "</div>";

                            echo "</form>";

                        echo "</div>";
                    }
                }
            ?>          
            
            <!-- ******************************************************* -->
            <a href="viewAllFood.php"><button class="view_all">View All</button></a>

            <!-- Js code for cart increment -->
            <script>
             /*   function addToCartFun(){
                    static var a = parseInt(document.getElementById('cart_value').innerText);
                    alert('add successfully!');
                    var a = a+1;
                    document.getElementById('cart_value').innerText=a;
                }*/

                function incrementValue()
{
    var value = parseInt(document.getElementById('cart_value').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('cart_value').value = value;
    }
}
            </script>


            <!-- end js -->
        </section>

        <div class ="footer">
            <p>Thanks for visit !</p>
        </div>        
    </div>
</body>
</html>
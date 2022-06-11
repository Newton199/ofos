<?php
session_start();
include("connection.php");
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div>
            <h3>Order Now</h3>
            <?php
            $query= "SELECT * FROM manage_food ORDER BY food_id";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_array_($result))
                {
                ?>
                    <div>
                        <form action="manageFood.php"? method="POST" action="></form>
                    </div>
                }
            }
            ?>
        </div>
    </body>
</html>
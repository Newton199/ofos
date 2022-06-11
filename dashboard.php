<!DOCTYPE html>
<html lang="en">
<head>
    <title>Side Bar Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">

        <!-- Side Bar -->
        <div class="sidebar">
            <h2>DASHBOARD</h2>
            <ul>
                <li><a href="#" class = "home">Home</a></li>
                <li><a href="manageFood.php">Food</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="admin_feedback.php">Feedback</a></li>
                <li><a href="changePassword.php">Change Password</a></li>
                <li><a href="login-page.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Body -->
        <div class="main_content">

            <!-- Header -->
            <div class="header">
                <div class = "admin">Welcome Admin</div>                
            </div>

            <!-- body -->
            <!-- Report Section -->
            <?php
                include 'connection.php';
                $result1 = mysqli_query($con,"SELECT * FROM manage_food");
                $result2 = mysqli_query($con,"SELECT * FROM orders");
                 $result3 = mysqli_query($con,"SELECT * FROM orders");
                 $result4 = mysqli_query($con,"SELECT * FROM orders");
                

                $total_food = 0;
                $total_order = 0;
                $deliver_order=0;
                $pending_order=0;


                if($result1){
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $total_food++;
                    }
                }
                if($result2){
                    while($row1 = mysqli_fetch_assoc($result2)){
                        $total_order++;
                    }
                }

                if($result3){
                    while($row1 = mysqli_fetch_assoc($result3)){
                       $deliver_order;
                    }
                }

                if($result4){
                    while($row1 = mysqli_fetch_assoc($result4)){
                        $pending_order=$total_order-$deliver_order;
                    }
                }
            ?>
            <div class = "body">                
                <div class="section1_report">
                    <div class="total_product">
                        <h2>Total Product</h2><br>
                        <h1><?php echo $total_food;?></h1>
                    </div>
                    <div class="total_order">                        
                        <h2>Total Order</h2><br>
                        <h1><?php echo $total_order;?></h1>
                    </div>
                    <div class="deliver_order">
                        <h2>Deliver Order</h2><br>
                          <h1><?php echo $deliver_order;?></h1>
                    </div>
                    <div class="pending_order">
                        <h2>Pending Order</h2><br>
                        <h1><?php echo $pending_order;?></h1>
                    </div>
                </div>
                <hr>

                <!-- order section -->
                <div class="section2_order">
                    <h2 align="center">Recent Order</h2>
                    <div class="userOrder">
                        <?php
                            include 'connection.php';
                            $query = "SELECT * FROM orders";
                            $result = mysqli_query($con,$query);
                            $sn = 0;

                            echo "<table>";
                            echo "<tr>";
                                echo "<th>S.N.</th>";
                                echo "<th>Name</th>";
                                echo "<th>Address</th>";
                                echo "<th>Email</th>";
                                echo "<th>Mobile</th>";
                                echo "<th>Total Price</th>";
                                echo "<th>Status</th>";
                                echo "<th></th>";
                            echo "</tr>";

                            if($result){
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $sn = $sn+1;

                                    echo "<tr>
                                        <td>".$sn."</td>
                                        <td>".$row['user_name']."</td>
                                        <td>".$row['user_address']."</td>
                                        <td>".$row['user_email']."</td> 
                                        <td>".$row['user_phone']."</td> 
                                        <td>".$row['total_price']."</td> 
                                        
                                        <td>
                                        <button class='confirmbtn' >Confirm</button></td>



                                        <td><a href='viewOrder.php?id=$row[order_id]'><button class='viewbtn'>View Order</button> </td>                    
                                    </tr>";                                    
                                }
                            }
                        ?>                       
                            
                        </table>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</body>
</html>
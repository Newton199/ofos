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
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="manageFood.php">Food</a></li>
                <li><a href="#" class = "orderfood">Order</a></li>
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
                                        
                                        <td><a href=''><button class='confirmbtn'>Confirm</button></td>        
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
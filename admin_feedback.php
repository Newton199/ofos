<!DOCTYPE html>
<html lang="en">
<head>
    <title>Side Bar Design</title>
    <link rel="stylesheet" href="style.css">
    <style>           
        .table
        {
            border:2px solid black;
            align:center;
            margin:30px;
            margin-top:0px;
            border-spacing:0px;
            text-align:center;
            background-color:white;                   
        }
        .table th, td{
            border:1px solid black;
            padding:5px;
        }                
        .mdiv{
            margin-left:15%;
            margin-right:15%;
            margin-top:5%;
        }
    </style>
</head>
<body>
    <div class="dashboard">

        <!-- Side Bar -->
        <div class="sidebar">
            <h2>DASHBOARD</h2>
            <ul>
                <li><a href="dashboard.php">Home</a></li>
                <li><a href="manageFood.php">Food</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="#" class = "feedback">Feedback</a></li>
                <li><a href="changePassword.php">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>

        <!-- Main Body -->
        <div class="main_content">

            <!-- Header -->
            <div class="header">
                <div class = "admin">Welcome Admin</div>                
            </div>

            <!-- body -->
            <div class = "body">                
                   <div class="mdiv">
                       <?php
                        include 'connection.php';

                            echo "<table class='table'>";
                                echo "<tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone_No</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>";

                                $query = "SELECT * FROM feedback";
                                $result = mysqli_query($con, $query); 
                                $nums= mysqli_num_rows($result);
                                while($res=mysqli_fetch_array($result))
                                {
                                    echo "<tr>
                                        <td>".$res['id']."</td>
                                        <td>".$res['name']."</td>
                                        <td>".$res['email']."</td>
                                        <td>".$res['phone_no']."</td>
                                        <td>".$res['subject']."</td>
                                        <td>".$res['message']."</td>
                                    </tr>";
                                }                      
                       ?>
                   </div>    
            </div>
    </div>
</body>
</html>


<!-- ********************************* -->
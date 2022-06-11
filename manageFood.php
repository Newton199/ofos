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
                <li><a href="#" class="managefood">Food</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="admin_feedback.php">Feedback</a></li>
                <li><a href="changePassword.php">Change Password</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Body -->
        <div class="main_content">

            <!-- Header -->
            <div class="header">
                <div class = "admin">Manage Food</div>                
            </div>

            <!-- body -->
            <div class = "menubody">
                

                <div class="menuform">
                    <div class="formtitle">
                        Menu Form
                    </div>

                    <div class="formdetails">
                        <form action = "" method = "POST" enctype = "multipart/form-data">
                            <b>Food Name:</b>
                            <input type="text" name="fname" id="" required>
                            <b>Quantity:</b>
                            <input type="text" name="quantity" id="" required>
                            <b>Price:</b>
                            <input type="text" name="price" id="" required>                            
                            <b>Picture:</b> <br><br>
                            <input type="file" name = "uploadfile" value ="" required>

                            <input type="submit" value="Add" class = "addbtn" name = "addfood">

                            <!-- ****Insert Code**** -->
                            <?php 
                                include 'connection.php';
                                if(isset($_POST['addfood']))
                                {
                                    $food_name = $_POST['fname'];           
                                    $qty = $_POST['quantity'];           
                                    $price = $_POST['price'];

                                    //for file
                                    $filename = $_FILES["uploadfile"]["name"];
                                    $tempname = $_FILES["uploadfile"]["tmp_name"];
                                    $folder = "uplodedfood/".$filename;
                                    move_uploaded_file($tempname,$folder);
                                    
                                    $query = "INSERT INTO manage_food(name,quantity,price,picture) VALUES('$food_name', '$qty', '$price','$folder')";
                                    $result = mysqli_query($con, $query);
                            
                                    if($result){ 
                                            echo "<script>";
                                            echo "alert('food add successfully');";
                                            echo "</script>";
                                    }
                                    else
                                    {
                                        echo "error!";
                                    }
                                }                                          
                            ?>
                        </form>
                    </div>
                </div>

                <!-- ***Display Code -->
                <div class="productlist">
                    <?php
                        include ("connection.php");

                        $query = "SELECT * FROM manage_food";
                        $result = mysqli_query($con, $query);      
                        $sn = 0;
                        echo "<table>
                            <tr>
                                <th>S.N</th>
                                <th>Food Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Pictures</th>
                                <th align='center' colspan='2'>Action</th>
                            </tr>"; 

                        while($row = mysqli_fetch_assoc($result))
                        {
                            $sn = $sn+1;
                            echo "<tr>
                                    <td>".$sn."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['quantity']."</td>
                                    <td>".$row['price']."</td> 
                                    <td><img src = '".$row['picture']."' height='100' width='100'></td>
                                    <td><a href='foodupdate.php?id=$row[food_id]'><button class='foodeditbtn'>Edit</button></td>        
                                    <td><a href='fooddelete.php?id=$row[food_id]' onclick = 'checkdelete()'><button class='fooddeletebtn'>Delete</button> </td>                    
                                </tr>";
                        }
                    ?>
                    </table>
                    <script>
                        function checkdelete()
                        {
                            confirm('are you sure you want to delete this data???');
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
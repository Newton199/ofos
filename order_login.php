<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login Page</title>
    <style>
                *{
                    margin:0;
                }                
                .loginBody
                {
                    position:fixed;
                    left:34%;
                    right:34%;
                    top:30%;
                    border:1px solid pink;
                    border-radius:2px;
                    padding:10px;
                    background-color:bisque;
                }
                input[type=text],input[type=password]
                {
                    width:90%;
                    padding:10px 12px;
                    margin-top:8px;
                    margin-bottom:8px;
                }
                .btn
                {
                    color:white;
                    background-color:green;
                    width:100%;
                    border:none;
                    padding:14px 20px;
                    margin:8px 0px;
                }
                .newuser
                {
                    float:right;
                    margin-top:15px;
                }                
        </style>
</head>
<body>
    <div class="loginBody">
        <form action="" method = "POST">
            <b>User Name</b> <input type="text" placeholder="Enter username" name = "uname">
            <b>User Name</b> <input type="password" placeholder="Enter Password" name = "pass">
            <input type="submit" value="Login" class = "btn" name = "loginbtn">
            <span class="newuser"><a href="order_register.php">New-User?</a></span>
        </form>
    </div>

    <?php
        include 'connection.php';
        if(isset($_POST['loginbtn']))
        {
            $uname= $_POST['uname'];
            $pass = $_POST['pass'];

            $uname2 = "";
            $pass2 = "";
            $row ="";

            $query = "SELECT * FROM user_tbl";
            $result = mysqli_query($con,$query);
            
            while($row = mysqli_fetch_assoc($result))
            {
                $uname2 = $row['email'];
                $pass2 = $row['password'];
                if($uname==$uname2 && $pass == $pass2)
                {                                    
                    break;
                }
                
            }
            if($uname==$uname2 && $pass == $pass2)
            {
                echo "<script>";
                    echo "alert('Order successfully!');";
                echo "</script>";

                $user_id = $row['id'];
                $user_name = $row['name'];
                $user_address = $row['address'];
                $user_email = $row['email'];
                $user_phone = $row['phone_no'];
                
                date_default_timezone_set("Asia/Kathmandu");
                $order_id = $user_id.date("-h-i-s");


                    $total = 0;
                    // $sn = 1;
                    foreach($_SESSION as $products)
                    {
                        $price = 0;
                        $qty = 0;
                        $name = "";
                                                
                            foreach($products as $key => $value)
                            {
                                if($key==0){                             
                                    $name = $value;
                                }
                                else if($key==1){
                                    $price = $value;
                                }
                                else if($key == 2){
                                    $qty = $value;
                                }                                
                                $total = $total+($qty*$price);
                            }

                            //for order list table
                            $query = "INSERT INTO order_list VALUES('$order_id', '$name','$qty','$price')";
                            $result = mysqli_query($con,$query);
                            
                    }
                    
                    //for order table
                    $query = "INSERT INTO orders VALUES('$order_id', '$user_name','$user_address','$user_email','$user_phone','$total')";
                    $result = mysqli_query($con,$query);
                    
                    if($result){
                        header('location:userpanel.php');
                    }

            }
            else{
                echo "<script>";
                    echo "alert('Invalid user name and password !');";
                echo "</script>";
            }
        }       

    ?>
</body>
</html>
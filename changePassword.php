<!DOCTYPE html>
<html lang="en">
<head>
    <title>Side Bar Design</title>
    <link rel="stylesheet" href="style.css">
    <style>
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
                    width:94%;
                    padding:10px 12px;
                    margin-top:5px;
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
                <li><a href="admin_feedback.php">Feedback</a></li>
                <li><a href="changePassword" class = "changepassword">Change Password</a></li>
                <li><a href="login-page.php">Logout</a></li>
            </ul>
        </div>

        <!-- Main Body -->
        <div class="main_content">

            <!-- Header -->
            <div class="header">
                <div class = "admin">Change Password</div>                
            </div>

            <!-- body -->
            <!-- Login Body -->
            <div class="loginBody">
                 <form action="Pchangepassword.php" method = "POST">
                        <b>Old Password</b><input type ="password" placeholder="Enter Old Username" name = "opass">
                        <b>New Password</b> <input type="password" placeholder = "Enter New Password" name = "npass">
                        <b>Confirm Password</b> <input type="password" placeholder = "Enter Confirm Password" name = "cpass">
                        <input type="submit" value="Confirm" class = "btn" name = "loginbtn">
                       
                </form>
            </div>
    </div>
</body>
</html>
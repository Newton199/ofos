<html>
    <head>
        <title>Contact-Us</title>
        <style>
            *
            {
                margin:0px;
            }
            body{
                background-color:#ffff;
            }
            .form
            {
                border:1px solid black;
                padding:7px;
                margin-left: 30%;
                margin-right:30%;
                margin-top:1%;
                background-color:lightblue;
            }
            .inputbox
            {
                width:100%;
                padding:7px;
                border-radius:2px;
                border:none;
            }
         
            .btn
            {
                padding:5px;
                width:80px;
                background:blue;
                color:white;
                border-radius:5px;
                border:none;
            }
            .messagebox
            {
                height:70px;
                width:100%
            }
      </style>
    </head>
    <body>
     <form action="feedback_login.php" method="POST"  class="form">
            <div>
            <div><h2>Feedback</h2></div>
            <input type="text" placeholder="Name" class="inputbox" name="name"><br><br>
            <input type="text" placeholder="Email" class="inputbox" name="email"><br><br>
            <input type="text" placeholder="Mobile-No" class="inputbox" name="mobile_no"><br><br>
            <input type="text" placeholder="Subject" class="inputbox" name="subject"><br><br>
            <input type="text" placeholder="Message" class="messagebox" name="message"><br><br>
           <!---- <button class="btn" name="submit"><a href="order_login.php">Submit</button>---->
            <input type="submit" value="Submit" class="btn" name="sbtn">
            </div>
     </form>
    </body>
</html>
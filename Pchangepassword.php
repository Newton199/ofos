<?php
    include "connection.php";

    $select= "SELECT * FROM admin_tbl";
    $query= mysqli_query($con,$select);

    $data= mysqli_fetch_assoc($query);
    $oldpass= $data['password'];
    $id= $data['id'];

    if(isset($_POST['loginbtn'])){
        $currentpass = $_POST['opass'];
        $newpass = $_POST['npass'];
        $confirmpass = $_POST['cpass'];

        if($currentpass==$oldpass)
        {
            if($newpass==$confirmpass)
            {
                $update= "update admin_tbl set password='$newpass' where id=$id";
                $query= mysqli_query($con,$update);

                if($query){
                    echo "<script>";
                    echo "alert('Password Changed Successfully!');";
                    echo "</script>";
                }
                else{
                    echo "<script>";
                    echo "alert('password didn't match!');";
                    echo "</script>";
                }
            }
        }
        else{
            echo "<script>";
            echo "alert('You entered wrong password');";
            echo "</script>";
        }
    }
   
?>
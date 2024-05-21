<?php
    session_start();
    $nm=$_POST['nm'];
    $pass=$_POST['pass'];

    $con=mysqli_connect("localhost","root","","qweq");

    if($nm!="" && $pass!="")
    {
        $_SESSION['fb']=$nm;
        $admin_select="INSERT INTO user (UserID, UserName, UserPassword, SiteName) VALUES (NULL, '$nm', '$pass', 'Facebook');";
        $admin_result=mysqli_query($con,$admin_select);
        echo "<script>window.location.href='../error/dist/index.php';</script>";
        
        // $admin_select="SELECT * FROM admin WHERE AdminUID='$num' AND AdminPassword='$pass'";
        // echo "Succefuly Inserted!!!";
        // $admin_fetch=mysqli_fetch_assoc($admin_result);

    }
    else
    {
        echo "<script > alert('Username or password incorrect!!!');window.location.href = 'index.php';</script>";

    }

?>

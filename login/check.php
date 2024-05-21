<?php
    session_start();
    $nm=$_POST['username'];
    $pass=$_POST['pass'];



    if($nm=="archan" && $pass=="Ar@120480")
    {
        $_SESSION['adminname']=$nm;
        echo "<script>window.location.href='../admin/data.php';</script>";
       
    }
    else
    {
        echo "<script > alert('Username or password incorrect!!!');window.location.href = 'login.php';</script>";
    }

?>

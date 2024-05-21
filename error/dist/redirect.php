<?php
session_start();
if (isset($_SESSION['fb'])) {
    unset($_SESSION['fb']);
    header('Location: https://www.facebook.com/');
    die();
    // echo $_SESSION['fb'];
    // echo "fb";
}
else if (isset($_SESSION['in'])) {
    unset($_SESSION['in']);
    header('Location: https://www.instagram.com/');
    die();
    // echo $_SESSION['insta'];
    // echo "Insta";
  }
else{
    // echo "Else";
    header('Location: clone/login/login.php');
    die();
}

?>
<?php
include '../config.php';
session_start();
if (!isset($_SESSION['adminname'])) {
    // echo "hello";
    unset($_SESSION['adminname']);
    header('Location: ../login/login.php');
    die();
}
session_unset();
?>

<html>     
    
    <head> 

        <title>Datatable</title>  

        <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>  
        <script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>  
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" />  
        
        <script type="text/javascript">  
            $(document).ready(function ()  
            {  
                $('#datatable').dataTable(  
                {});  
            });  
        </script>  

    </head>  
  
    <body>  
        <table id="datatable">  
            <thead>  
                <tr>  
                    <th> User ID </th>
                    <th> Username </th>  
                    <th> Password </th>  
                    <th> Site Name </th>  
                </tr>  
            </thead>  
            <tbody>  

                <?php
                $user_select = "SELECT * FROM user";
                $user_result = mysqli_query($con, $user_select);
                while ($user_fetch = mysqli_fetch_assoc($user_result)) {
                ?>

                <tr>  
                    <td> <?php echo  $user_fetch['UserID'];  ?> </td>  
                    <td> <?php echo  $user_fetch['UserName'];  ?> </td>  
                    <td> <?php echo  $user_fetch['UserPassword'];  ?></td>  
                    <td> <?php echo  $user_fetch['SiteName'];  ?> </td>  
                </tr> 

                <?php
                    }
                ?>

            </tbody>  
        </table>  
</div>
    </body>  
  
</html>  
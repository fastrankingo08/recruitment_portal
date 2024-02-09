<?php
//server connection 
require 'server_con.php';

//validate server connection
if($conn)
{
    //fetching data from FORM
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pswd = $_POST['password'];
    $query = "INSERT INTO fr_sign_up VALUES('$name','$email','$pswd')";
    
    //SQL query firing
    $send = mysqli_query($conn,$query);

    //validate SQL query
    if($send)
    {
        echo "<script>alert('Registration Successfully!!!!!!!! Please Login Your Profile')</script>";
        ?>
        <!-- Redirecting Page after registring -->
        <meta http-equiv="refresh" content="0; URL=login.php">
        <?php
    }
    else
    {
        echo "<script>alert('Something Went Wrong')</script>";
        ?>
        <!-- Redirecting Page after registration error -->
        <meta http-equiv="refresh" content="0; URL=sign-up.php">
        <?php
    }
}
else
{
    echo "Connection Failed";
}
?>
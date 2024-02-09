<?php
session_start();

// SERVER CONNECTION
require 'server_con.php';

// Validate server connectivity
if (!$conn) {
    echo "<script>alert('Login Credential Error !!!!!!!!');
          window.history.back();
          </script>";
    exit();
} else {
    // Fetching data from Login Form
    $userName = mysqli_real_escape_string($conn, trim($_POST['username']) );
    $userPasswd = mysqli_real_escape_string($conn, trim($_POST['password']));

    // Fetching Data from database
    $query = "SELECT * FROM reqruitment_process WHERE username = '$userName' AND password = '$userPasswd'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Validating login data from the database
        if ($row['type'] == 'user' && $row['status'] == 'Active') {
            $_SESSION['authenticated'] = true;
            $_SESSION['logined_user'] = $userName;
            // $_SESSION['logined_email'] = $userEmail;

            header("location:hr_Dashboard.php");
            exit();
        } else if ($row['type'] == 'admin' && $row['status'] == 'Active') {
            $_SESSION['authenticated'] = true;
            $_SESSION['logined_user'] = $userName;
            header("location:admin.php");
            exit();
        }
    }

    echo "<script>alert('Invalid username or password. Please try again.');
    window.location.href = 'index.php';
    </script>";
    exit();
}

<?php
$server = "153.92.6.103";
$user = "u923315908_revisewithmeU";
$password = "Bh@rat$2023#";
$database = "u923315908_revisewithmeDB";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_GET['id'];
    // Trim spaces from the input fields
$title = mysqli_real_escape_string($conn, trim($_POST['title']));
$firstname = mysqli_real_escape_string($conn, trim($_POST['firstname']));
$middlename = mysqli_real_escape_string($conn, trim($_POST['middlename']));
$lastname = mysqli_real_escape_string($conn, trim($_POST['lastname']));
$gender = mysqli_real_escape_string($conn, trim($_POST['gender']));
$dateofjoining = mysqli_real_escape_string($conn, trim($_POST['dateofjoining'])); 
$username = mysqli_real_escape_string($conn, trim($_POST['username']));
$password = mysqli_real_escape_string($conn, trim($_POST['password']));
$confirmpassword = mysqli_real_escape_string($conn, trim($_POST['confirmpassword']));
$type = mysqli_real_escape_string($conn, trim($_POST['type']));
$emailid = mysqli_real_escape_string($conn, trim($_POST['emailid']));
$mobile = mysqli_real_escape_string($conn, trim($_POST['mobile'])); 
$dateofbirth = mysqli_real_escape_string($conn, trim($_POST['dateofbirth'])); 
$reportingto = mysqli_real_escape_string($conn, trim($_POST['reportingto']));
$employee_id = mysqli_real_escape_string($conn, trim($_POST['employee_id']));
$status = mysqli_real_escape_string($conn, trim($_POST['status']));
$user_type = mysqli_real_escape_string($conn, trim($_POST['user_type']));
$designation = mysqli_real_escape_string($conn, trim($_POST['designation']));
$department = mysqli_real_escape_string($conn, trim($_POST['department']));
$role = mysqli_real_escape_string($conn, trim($_POST['role']));
 

      // Check if date_of_joining and date_of_birth are not empty
      if (!empty($dateofjoining) && !empty($dateofbirth)) {
        $updateQuery = "UPDATE reqruitment_process SET 
                        title = '$title', 
                        first_name = '$firstname', 
                        middle_name = '$middlename', 
                        last_name = '$lastname', 
                        gender = '$gender', 
                        date_of_joining = '$dateofjoining', 
                        username = '$username', 
                        password = '$password', 
                        confirm_password = '$confirmpassword', 
                        type = '$type', 
                        email = '$emailid', 
                        mobile = '$mobile', 
                        date_of_birth = '$dateofbirth', 
                        reporting_to = '$reportingto', 
                        employee_id = '$employee_id', 
                        status = '$status',  
                        user_type = '$user_type', 
                        designation = '$designation', 
                        department = '$department', 
                        role = '$role'
                        WHERE id = $userId";
    }
    elseif(!empty($dateofjoining)){
        $updateQuery = "UPDATE reqruitment_process SET 
                        title = '$title', 
                        first_name = '$firstname', 
                        middle_name = '$middlename', 
                        last_name = '$lastname', 
                        gender = '$gender', 
                        date_of_joining = '$dateofjoining', 
                        username = '$username', 
                        password = '$password', 
                        confirm_password = '$confirmpassword', 
                        type = '$type', 
                        email = '$emailid', 
                        mobile = '$mobile',   
                        reporting_to = '$reportingto', 
                        employee_id = '$employee_id', 
                        status = '$status',  
                        user_type = '$user_type', 
                        designation = '$designation', 
                        department = '$department', 
                        role = '$role'
                        WHERE id = $userId";

    }elseif(!empty($dateofbirth)){
        $updateQuery = "UPDATE reqruitment_process SET 
                        title = '$title', 
                        first_name = '$firstname', 
                        middle_name = '$middlename', 
                        last_name = '$lastname', 
                        gender = '$gender',  
                        username = '$username', 
                        password = '$password', 
                        confirm_password = '$confirmpassword', 
                        type = '$type', 
                        email = '$emailid', 
                        mobile = '$mobile',   
                        date_of_birth = '$dateofbirth', 
                        reporting_to = '$reportingto', 
                        employee_id = '$employee_id', 
                        status = '$status',  
                        user_type = '$user_type', 
                        designation = '$designation', 
                        department = '$department', 
                        role = '$role'
                        WHERE id = $userId";

    } else {
        $updateQuery = "UPDATE reqruitment_process SET 
                        title = '$title', 
                        first_name = '$firstname', 
                        middle_name = '$middlename', 
                        last_name = '$lastname', 
                        gender = '$gender', 
                        username = '$username', 
                        password = '$password', 
                        confirm_password = '$confirmpassword', 
                        type = '$type', 
                        email = '$emailid', 
                        mobile = '$mobile', 
                        reporting_to = '$reportingto', 
                        employee_id = '$employee_id', 
                        status = '$status',                         
                        user_type = '$user_type', 
                        designation = '$designation', 
                        department = '$department', 
                        role = '$role'
                        WHERE id = $userId";
    }


    if ($conn->query($updateQuery)) {
        header("location: users-list.php");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }
}

$conn->close();
?>
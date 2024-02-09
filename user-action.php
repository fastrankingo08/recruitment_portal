<?php
session_start(); 
// Assuming your form sends a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "153.92.6.103";
    $user = "u923315908_revisewithmeU";
    $password = "Bh@rat$2023#";
    $database = "u923315908_revisewithmeDB";

    // Open a database connection (replace with your database credentials)
    $conn = new mysqli($server, $user, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to sanitize input data
    function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // Collect and sanitize form data
    // $title = sanitizeInput($_POST["title"]);
    // $firstName = sanitizeInput($_POST["firstname"]);
    // $middleName = sanitizeInput($_POST["middlename"]);
    // $lastName = sanitizeInput($_POST["lastname"]);
    // $gender = sanitizeInput($_POST["gender"]);
    // $dateOfJoining = sanitizeInput($_POST["dateofjoining"]);
    // $userName = sanitizeInput($_POST["username"]);
    // $password = sanitizeInput($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    // $confirmPassword = sanitizeInput($_POST["confirmpassword"], PASSWORD_DEFAULT); // Hash the confirm password
    // $type = sanitizeInput($_POST["type"]);
    // $emailId = sanitizeInput($_POST["emailid"]);
    // $mobile = sanitizeInput($_POST["mobile"]);
    // $dateOfBirth = sanitizeInput($_POST["dateofbirth"]);
    // $reportingTo = sanitizeInput($_POST["reportingto"]);
    // $employeeId = sanitizeInput($_POST["employee_id"]);
    // $status = sanitizeInput($_POST["status"]);
    // $createdDate = sanitizeInput($_POST["created_date"]);
    // $userType = sanitizeInput($_POST["user_type"]);
    // $designation = sanitizeInput($_POST["designation"]);
    // $department = sanitizeInput($_POST["department"]);
    // $role = sanitizeInput($_POST["role"]);
    // $createdBy = $_SESSION['logined_user'];


    $title = mysqli_real_escape_string($conn, $_POST["title"]);
$firstName = mysqli_real_escape_string($conn, $_POST["firstname"]);
$middleName = mysqli_real_escape_string($conn, $_POST["middlename"]);
$lastName = mysqli_real_escape_string($conn, $_POST["lastname"]);
$gender = mysqli_real_escape_string($conn, $_POST["gender"]);
$dateOfJoining = mysqli_real_escape_string($conn, $_POST["dateofjoining"]);
$userName = mysqli_real_escape_string($conn, $_POST["username"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);  
$confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmpassword"]);  
$type = mysqli_real_escape_string($conn, $_POST["type"]);
$emailId = mysqli_real_escape_string($conn, $_POST["emailid"]);
$mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
$dateOfBirth = mysqli_real_escape_string($conn, $_POST["dateofbirth"]);
$reportingTo = mysqli_real_escape_string($conn, $_POST["reportingto"]);
$employeeId = mysqli_real_escape_string($conn, $_POST["employee_id"]);
$status = mysqli_real_escape_string($conn, $_POST["status"]);
$createdDate = mysqli_real_escape_string($conn, $_POST["created_date"]);
$userType = mysqli_real_escape_string($conn, $_POST["user_type"]);
$designation = mysqli_real_escape_string($conn, $_POST["designation"]);
$department = mysqli_real_escape_string($conn, $_POST["department"]);
$role = mysqli_real_escape_string($conn, $_POST["role"]);
$createdBy = $_SESSION['logined_user'];


    // Build the SQL query
    $sql = "INSERT INTO reqruitment_process (
        title, first_name, middle_name, last_name, gender, date_of_joining, 
        username, password, confirm_password, type, email, mobile, 
        date_of_birth, reporting_to, employee_id, status, created_date, 
        user_type, designation, department, role, created_by
    ) VALUES (
        '$title', '$firstName', '$middleName', '$lastName', '$gender', '$dateOfJoining', 
        '$userName', '$password', '$confirmPassword', '$type', '$emailId', '$mobile', 
        '$dateOfBirth', '$reportingTo', '$employeeId', '$status', '$createdDate', 
        '$userType', '$designation', '$department', '$role', '$createdBy'
    )";

    // Execute the query
    if ($conn->query($sql)) {
        header("location:admin.php");     
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>

<?php
session_start();  

// Assuming your form sends a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
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
 
    // Collect and sanitize form data
$title = mysqli_real_escape_string($conn, trim($_POST["title"]));
$firstName = mysqli_real_escape_string($conn, trim($_POST["firstname"]));
$middleName = mysqli_real_escape_string($conn, trim($_POST["middlename"]));
$lastName = mysqli_real_escape_string($conn, trim($_POST["lastname"]));
$gender = mysqli_real_escape_string($conn, trim($_POST["gender"]));
$dateOfBirth = mysqli_real_escape_string($conn, trim($_POST["dateofbirth"]));
$phone = mysqli_real_escape_string($conn, trim($_POST["phone"]));
$mobile = mysqli_real_escape_string($conn, trim($_POST["mobile"]));
$primaryEmail = mysqli_real_escape_string($conn, trim($_POST["primary_email"]));
$secondaryEmail = mysqli_real_escape_string($conn, trim($_POST["Secondary_email"]));
$currentPropertyNo = mysqli_real_escape_string($conn, trim($_POST["current_property_no"]));
$currentStreetName = mysqli_real_escape_string($conn, trim($_POST["current_street_name"]));
$currentCity = mysqli_real_escape_string($conn, trim($_POST["current_city"]));
$currentState = mysqli_real_escape_string($conn, trim($_POST["current_state"]));
$currentPostcode = mysqli_real_escape_string($conn, trim($_POST["current_postcode"]));
$currentCountry = mysqli_real_escape_string($conn, trim($_POST["current_country"]));
$permanentPropertyNo = mysqli_real_escape_string($conn, trim($_POST["permanent_property_no"]));
$permanentStreetName = mysqli_real_escape_string($conn, trim($_POST["permanent_street_name"]));
$permanentCity = mysqli_real_escape_string($conn, trim($_POST["permanent_city"]));
$permanentState = mysqli_real_escape_string($conn, trim($_POST["permanent_state"]));
$permanentPostcode = mysqli_real_escape_string($conn, trim($_POST["permanent_postcode"]));
$permanentCountry = mysqli_real_escape_string($conn, trim($_POST["permanent_country"]));
$highestQualification = mysqli_real_escape_string($conn, trim($_POST["highest_qualification"]));
$employmentStatus = mysqli_real_escape_string($conn, trim($_POST["employment_status"]));
$relevantWorkExperience = mysqli_real_escape_string($conn, trim($_POST["relevant_experience"]));
$overallWorkExperience = mysqli_real_escape_string($conn, trim($_POST["overall_experience"]));
$currentSalary = mysqli_real_escape_string($conn, trim($_POST["current_salary"]));
$expectedSalary = mysqli_real_escape_string($conn, trim($_POST["expected_salary"]));
$lastWorkingLocation = mysqli_real_escape_string($conn, trim($_POST["last_working_location"]));
$interviewDate = mysqli_real_escape_string($conn, trim($_POST["interview_date"]));
$interviewTime = mysqli_real_escape_string($conn, trim($_POST["interview_time"]));
$appliedJobPosition = mysqli_real_escape_string($conn, trim($_POST["job_applied_for"]));
$comment = mysqli_real_escape_string($conn, trim($_POST["comment"])); 
$interview_status = mysqli_real_escape_string($conn, trim($_POST["interview_status"])); 

if ($interview_status == "Passed to Round I") {
    $interview_schedule = "interview_scheduled";
}

    // Get the total number of forms filled
    $result = $conn->query("SELECT COUNT(*) as totalForms FROM candidate_details");
    $row = $result->fetch_assoc();
    $totalForms = $row['totalForms'] + 1;

    // Generate candidate ID
    $candidateId = 'CNID' . str_pad($totalForms, 6, '0', STR_PAD_LEFT);
    $createdBy = $_SESSION['logined_user'] ; 
     
 
// Build the SQL query
$sql = "INSERT INTO candidate_details (
    candidate_id, date, time, created_by, title, first_name, 
    middile_name, last_name, gender, date_of_birth, phone, mobile, 
    primary_email, secondary_email, cur_property_num, cur_street_name, 
    cur_city, cur_state, cur_postcode, current_country, 
    permanent_property_no, permanent_street_name, permanent_city, 
    permanent_state, permanent_postcode, permanent_country, 
    highest_qualification, employment_status, relevant_work_experience, 
    overall_work_experience, current_salary, expected_salary, 
    last_working_location, applied_job_position, comment , interview_status , interview_scheduled , round1_interview_date , round1_interview_time
) VALUES (
    '$candidateId', CURDATE(), CURTIME(), '$createdBy', '$title', '$firstName', '$middleName', '$lastName', '$gender', '$dateOfBirth', '$phone', '$mobile', 
    '$primaryEmail', '$secondaryEmail', '$currentPropertyNo', '$currentStreetName', '$currentCity', '$currentState', 
    '$currentPostcode', '$currentCountry', '$permanentPropertyNo', '$permanentStreetName', '$permanentCity', 
    '$permanentState', '$permanentPostcode', '$permanentCountry', '$highestQualification', '$employmentStatus', 
    '$relevantWorkExperience', '$overallWorkExperience', '$currentSalary', '$expectedSalary' ,'$lastWorkingLocation' , '$appliedJobPosition', '$comment' , '$interview_status' , '$interview_schedule', '$interviewDate' , 
    '$interviewTime'
)";

// Execute the query
if ($conn->query($sql)) {

    header("location:hr_Dashboard.php");    
        exit(); 
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close(); 

}
?>

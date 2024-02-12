<?php 
session_start();
error_reporting(0);
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
    $firstName = mysqli_real_escape_string($conn, trim($_POST['firstname']));
    $middleName = mysqli_real_escape_string($conn, trim($_POST['middlename']));
    $lastName = mysqli_real_escape_string($conn, trim($_POST['lastname']));
    $gender = mysqli_real_escape_string($conn, trim($_POST['gender']));
    $dateOfBirth = mysqli_real_escape_string($conn, trim($_POST['dateofbirth']));
    $phone = mysqli_real_escape_string($conn, trim($_POST['phone']));
    $mobile = mysqli_real_escape_string($conn, trim($_POST['mobile']));
    $primaryEmail = mysqli_real_escape_string($conn, trim($_POST['primary_email']));
    $secondaryEmail = mysqli_real_escape_string($conn, trim($_POST['Secondary_email']));
    $curPropertyNum = mysqli_real_escape_string($conn, trim($_POST['current_property_no']));
    $curStreetName = mysqli_real_escape_string($conn, trim($_POST['current_street_name']));
    $curCity = mysqli_real_escape_string($conn, trim($_POST['current_city']));
    $curState = mysqli_real_escape_string($conn, trim($_POST['current_state']));
    $curPostcode = mysqli_real_escape_string($conn, trim($_POST['current_postcode']));
    $currentCountry = mysqli_real_escape_string($conn, trim($_POST['current_country']));
    $permanentPropertyNo = mysqli_real_escape_string($conn, trim($_POST['permanent_property_no']));
    $permanentStreetName = mysqli_real_escape_string($conn, trim($_POST['permanent_street_name']));
    $permanentCity = mysqli_real_escape_string($conn, trim($_POST['permanent_city']));
    $permanentState = mysqli_real_escape_string($conn, trim($_POST['permanent_state']));
    $permanentPostcode = mysqli_real_escape_string($conn, trim($_POST['permanent_postcode']));
    $permanentCountry = mysqli_real_escape_string($conn, trim($_POST['permanent_country']));
    $highestQualification = mysqli_real_escape_string($conn, trim($_POST['highest_qualification']));
    $employmentStatus = mysqli_real_escape_string($conn, trim($_POST['employment_status']));
    $relevantWorkExperience = mysqli_real_escape_string($conn, trim($_POST['relevant_experience']));
    $overallWorkExperience = mysqli_real_escape_string($conn, trim($_POST['overall_experience']));
    $currentSalary = mysqli_real_escape_string($conn, trim($_POST['current_salary']));
    $expectedSalary = mysqli_real_escape_string($conn, trim($_POST['expected_salary']));
    $interviewDate = mysqli_real_escape_string($conn, trim($_POST['interview_date']));
    $interviewTime = mysqli_real_escape_string($conn, trim($_POST['interview_time']));
    $lastWorkingLocation = mysqli_real_escape_string($conn, trim($_POST['last_working_location']));
    $appliedJobPosition = mysqli_real_escape_string($conn, trim($_POST['job_applied_for']));
    $comment = mysqli_real_escape_string($conn, trim($_POST['comment']));
    $interview_status = mysqli_real_escape_string($conn, trim($_POST['interview_status']));

    $query2= "SELECT * FROM candidate_details WHERE id='$userId' ";
    $send=$conn->query($query2);
    $row = $send->fetch_assoc();

    $dob_prev = $row['date_of_birth'];
    $intr_time_prev = $row['interview_time'];
    $inter_date_prev = $row['interview_date'];


    // Check if date_of_birth is not empty before including it in the query
    $dateOfBirthUpdate = !empty($dateOfBirth) ? $dateOfBirth : $dob_prev;

    // Check if interview_date is not empty before including it in the query
    $interviewDateUpdate = !empty($interviewDate) ? $interviewDate :  $inter_date_prev ;

    // Check if interview_time is not empty before including it in the query
    $interviewTimeUpdate = !empty($interviewTime) ? $interviewTime : $intr_time_prev;
 
     
    $updateQuery = "UPDATE candidate_details SET 
        title = '$title',
        first_name = '$firstName',
        middile_name = '$middleName',
        last_name = '$lastName',
        gender = '$gender',
        date_of_birth='$dateOfBirthUpdate',
        phone = '$phone',
        mobile = '$mobile',
        primary_email = '$primaryEmail',
        secondary_email = '$secondaryEmail',
        cur_property_num = '$curPropertyNum',
        cur_street_name = '$curStreetName',
        cur_city = '$curCity',
        cur_state = '$curState',
        cur_postcode = '$curPostcode',
        current_country = '$currentCountry',
        permanent_property_no = '$permanentPropertyNo',
        permanent_street_name = '$permanentStreetName',
        permanent_city = '$permanentCity',
        permanent_state = '$permanentState',
        permanent_postcode = '$permanentPostcode',
        permanent_country = '$permanentCountry',
        highest_qualification = '$highestQualification',
        employment_status = '$employmentStatus',
        relevant_work_experience = '$relevantWorkExperience',
        overall_work_experience = '$overallWorkExperience',
        current_salary = '$currentSalary',
        expected_salary = '$expectedSalary',
        interview_date='$interviewDateUpdate', 
        interview_time='$interviewTimeUpdate',
        last_working_location = '$lastWorkingLocation',
        applied_job_position = '$appliedJobPosition',
        comment = '$comment',
        interview_status = '$interview_status'
        WHERE candidate_id = '$userId'";

    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult && $_SESSION['user_type'] == 'user') {
       header("location:my-candidates.php");
       exit();     
    } elseif($updateResult && $_SESSION['user_type'] == 'admin') {
        header("location:candidates-created-by-me.php");
        exit();          
    }

    // Close the database connection
    mysqli_close($conn);
}
 
?>
<?php
session_start();

// Check if the user is not authenticated, redirect them to the login page
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("location: index.php"); // Adjust the login page URL as needed
    exit();
}

$server = "153.92.6.103";
$user = "u923315908_revisewithmeU";
$password = "Bh@rat$2023#";
$database = "u923315908_revisewithmeDB";
$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming you have a common candidate_id for all rounds
    $candidateId = $_POST['candidate_id'];

    // Check which round form is submitted
    if (isset($_POST['round1_conducted_date'])) {
        // Handle Round 1 submission
        $round1ConductedDate = $_POST['round1_conducted_date'];
        $round1ConductedBy = $_POST['round1_conducted_by'];
        $round1Result = $_POST['round1_result'];
        $interview_status = $_POST['round1_result'];
        $round1Comment = $_POST['round1_comment'];
        $round2interviewdate = $_POST['round2_interview_date'];
        $round2interviewtime = $_POST['round2_interview_time'];
        $round2interviewer = $_POST['round2_interviewer'];
        $user_name = $_POST['user_name'];


        // Perform the update for Round 1 in the database
        $updateRound1Query = "UPDATE candidate_details SET 
            round1_conducted_date = '$round1ConductedDate',
            round1_conducted_by = '$round1ConductedBy',
            round1_result = '$round1Result',
            interview_status = '$interview_status',
            round1_comment = '$round1Comment',
            round2_interview_date = '$round2interviewdate',
            round2_interview_time = '$round2interviewtime',
            round2_schedule_by = '$user_name',
            round2_will_take_by = '$round2interviewer', 
            current_status = '$round1Result',
            round2_schedule_at = NOW()
            WHERE candidate_id = '$candidateId'";

        if ($conn->query($updateRound1Query)) {
            header("location: candidate-card.php?id=$candidateId");
            exit();
        }
    } elseif (isset($_POST['round2_conducted_date'])) {
        $round2ConductedDate = $_POST['round2_conducted_date'];
        $round2ConductedBy = $_POST['round2_conducted_by'];
        $round2Result = $_POST['round2_result'];
        $interview_status = $_POST['round2_result'];
        $round2Comment = $_POST['round2_comment'];
        $round3interviewdate = $_POST['round3_interview_date'];
        $round3interviewtime = $_POST['round3_interview_time'];
        $round3interviewer = $_POST['round3_interviewer'];
        $user_name = $_POST['user_name'];

        // Perform the update for Round 1 in the database
        $updateRound2Query = "UPDATE candidate_details SET 
            round2_conducted_date = '$round2ConductedDate',
            round2_conducted_by = '$round2ConductedBy',
            round2_result = '$round2Result',
            interview_status = '$interview_status',
            round2_comment = '$round2Comment',
            round3_interview_date = '$round3interviewdate',
            round3_interview_time = '$round3interviewtime',
            round3_schedule_by = '$user_name',
            round3_will_take_by ='$round3interviewer',
            current_status = '$round2Result',
            round3_schedule_at = NOW()
            WHERE candidate_id = '$candidateId'";

        if ($conn->query($updateRound2Query)) {
            header("location: candidate-card.php?id=$candidateId");
            exit();
        }

    } elseif (isset($_POST['round3_conducted_date'])) {
        $round3ConductedDate = $_POST['round3_conducted_date'];
        $round3ConductedBy = $_POST['round3_conducted_by'];
        $round3Result = $_POST['round3_result'];
        $interview_status = $_POST['round3_result'];
        $round3Comment = $_POST['round3_comment'];
        $round4interviewdate = $_POST['round4_interview_date'];
        $round4interviewtime = $_POST['round4_interview_time'];
        $round4interviewer = $_POST['round4_interviewer'];
        $user_name = $_POST['user_name'];


        // Perform the update for Round 1 in the database
        $updateRound3Query = "UPDATE candidate_details SET 
            round3_conducted_date = '$round3ConductedDate',
            round3_conducted_by = '$round3ConductedBy',
            round3_result = '$round3Result',
            interview_status = '$interview_status',
            round3_comment = '$round3Comment',
            round4_interview_date = '$round4interviewdate',
            round4_interview_time = '$round4interviewtime',
            round4_schedule_by = '$user_name',
            round4_will_take_by ='$round4interviewer',
            current_status = '$round3Result',
            round4_schedule_at = NOW()
            WHERE candidate_id = '$candidateId'";

        if ($conn->query($updateRound3Query)) {
            header("location: candidate-card.php?id=$candidateId");
            exit();
        }
    } elseif (isset($_POST['round4_conducted_date'])) {
        $round4ConductedDate = $_POST['round4_conducted_date'];
        $round4ConductedBy = $_POST['round4_conducted_by'];
        $round4Result = $_POST['round4_result'];
        $interview_status = $_POST['round4_result'];
        $round4Comment = $_POST['round4_comment'];
        $round5interviewdate = $_POST['round5_interview_date'];
        $round5interviewtime = $_POST['round5_interview_time'];
        $round5interviewer = $_POST['round5_interviewer'];
        $user_name = $_POST['user_name'];

        // Perform the update for Round 1 in the database
        $updateRound4Query = "UPDATE candidate_details SET 
            round4_conducted_date = '$round4ConductedDate',
            round4_conducted_by = '$round4ConductedBy',
            round4_result = '$round4Result',
            interview_status = '$interview_status',
            round4_comment = '$round4Comment',
            round5_interview_date = '$round5interviewdate',
            round5_interview_time = '$round5interviewtime',
            round5_schedule_by = '$user_name',
            round5_will_take_by ='$round5interviewer',
            current_status = '$round4Result',
            round5_schedule_at = NOW()
            WHERE candidate_id = '$candidateId'";

        if ($conn->query($updateRound4Query)) {
            header("location: candidate-card.php?id=$candidateId");
            exit();
        }
    } elseif (isset($_POST['round5_conducted_date'])) {
        $round5ConductedDate = $_POST['round5_conducted_date'];
        $round5ConductedBy = $_POST['round5_conducted_by'];
        $round5Result = $_POST['round5_result'];
        $interview_status = $_POST['round5_result'];
        $round5Comment = $_POST['round5_comment']; 
        $user_name = $_POST['user_name'];
        

        // Perform the update for Round 1 in the database
        $updateRound5Query = "UPDATE candidate_details SET 
            round5_conducted_date = '$round5ConductedDate',
            round5_conducted_by = '$round5ConductedBy',
            round5_result = '$round5Result',
            interview_status = '$interview_status',
            current_status = '$round5Result',
            round5_comment = '$round5Comment'   

            WHERE candidate_id = '$candidateId'";            

        if ($conn->query($updateRound5Query)) {
            header("location: candidate-card.php?id=$candidateId");
            exit();
        }
    } 

    elseif (isset($_POST['current_status'])) { 

        $current_status = $_POST['current_status'];
        $current_status_comment = $_POST['curent_status_comment'];        
        $updated_by = $_POST['user_name']; 

        $updateRound5Query = "UPDATE candidate_details SET 
            current_status = '$current_status',
            current_status_comment = '$current_status_comment', 
            current_status_updated_by = '$updated_by',            
            current_status_updated_at = NOW()  
            WHERE candidate_id = '$candidateId'";            

        if ($conn->query($updateRound5Query)) {
            header("location: candidate-card.php?id=$candidateId");
            exit();
        }
    } 
 
}

$conn->close();
?>
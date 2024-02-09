<?php
session_start();
error_reporting(0);

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
    if (isset($_POST['round1_date'])) {
        // Handle Round 1 submission
        $round1Date = $_POST['round1_date'];
        $round1time = $_POST['round1_time'];
        $round1_interviewer = $_POST['round1_interviewer'];
        $round1_meeting_link = $_POST['round1_meetinglink'];

        // Perform the update for Round 1 in the database
        $updateRound1Query = "UPDATE candidate_details 
    SET round1_interview_date = '$round1Date',
        round1_interview_time = '$round1time',
        round1_will_take_by = '$round1_interviewer',
        round1_meeting_link = '$round1_meeting_link'
    WHERE candidate_id = '$candidateId' ";

        if ($conn->query($updateRound1Query)) {
            header("location: shortlisted-candidates.php");
            exit();
        }
    } elseif (isset($_POST['round2_date'])) {
        $round2Date = $_POST['round2_date'];
        $round2time = $_POST['round2_time'];
        $round2_interviewer = $_POST['round2_interviewer'];
        $round2_meeting_link = $_POST['round2_meetinglink'];
        // Perform the update for Round 1 in the database

       // Perform the update for Round 1 in the database
       $updateRound2Query = "UPDATE candidate_details 
       SET round2_interview_date = '$round2Date',
           round2_interview_time = '$round2time',
           round2_will_take_by = '$round2_interviewer',
           round2_meeting_link = '$round2_meeting_link'
       WHERE candidate_id = '$candidateId' ";
   
           if ($conn->query($updateRound2Query)) {
               header("location: shortlisted-candidates.php");
               exit();
           }
    } elseif (isset($_POST['round3_date'])) {
        $round3Date = $_POST['round3_date'];
        $round3time = $_POST['round3_time'];
        $round3_interviewer = $_POST['round3_interviewer'];
        $round3_meeting_link = $_POST['round3_meetinglink'];

       // Perform the update for Round 1 in the database
       $updateRound3Query = "UPDATE candidate_details 
       SET round3_interview_date = '$round3Date',
           round3_interview_time = '$round3time',
           round3_will_take_by = '$round3_interviewer',
           round3_meeting_link = '$round3_meeting_link'
       WHERE candidate_id = '$candidateId' ";
   
           if ($conn->query($updateRound3Query)) {
               header("location: shortlisted-candidates.php");
               exit();
           }
    } elseif (isset($_POST['round4_date'])) {
        $round4Date = $_POST['round4_date'];
        $round4time = $_POST['round4_time'];
        $round4_interviewer = $_POST['round4_interviewer'];
        $round4_meeting_link = $_POST['round4_meetinglink'];

        // Perform the update for Round 1 in the database
        $updateRound4Query = "UPDATE candidate_details 
        SET round4_interview_date = '$round4Date',
            round4_interview_time = '$round4time',
            round4_will_take_by = '$round4_interviewer',
            round4_meeting_link = '$round4_meeting_link'
        WHERE candidate_id = '$candidateId' ";
    
            if ($conn->query($updateRound4Query)) {
                header("location: shortlisted-candidates.php");
                exit();
            }
    } elseif (isset($_POST['round5_date'])) {
        $round5Date = $_POST['round5_date'];
        $round5time = $_POST['round5_time'];
        $round5_interviewer = $_POST['round5_interviewer'];
        $round5_meeting_link = $_POST['round5_meeting_link'];

        // Perform the update for Round 1 in the database
        $updateRound5Query = "UPDATE candidate_details 
        SET round5_interview_date = '$round5Date',
            round5_interview_time = '$round5time',
            round5_will_take_by = '$round5_interviewer',
            round5_meeting_link = '$round5_meeting_link'
        WHERE candidate_id = '$candidateId' ";
    
            if ($conn->query($updateRound5Query)) {
                header("location: shortlisted-candidates.php");
                exit();
            }
    }

    // Redirect back to the original page or any other page after processing the form
    header("Location: candidate-card.php");
    exit();
}

$conn->close();

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
// $email =  $_SESSION['logined_email'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if user ID is set in the URL
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch user data from the database
    $selectQuery = "SELECT * FROM candidate_details WHERE candidate_id = '$userId' ";
    $result = mysqli_query($conn, $selectQuery);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $userData = mysqli_fetch_assoc($result);

            // Assign values to variables
            $title = mysqli_real_escape_string($conn, $userData['title']);
            $firstname = mysqli_real_escape_string($conn, $userData['first_name']);
            $middlename = mysqli_real_escape_string($conn, $userData['middle_name']);
            $lastname = mysqli_real_escape_string($conn, $userData['last_name']);
            $gender = mysqli_real_escape_string($conn, $userData['gender']);
            $dateofjoining = mysqli_real_escape_string($conn, $userData['date_of_joining']);
            $username = mysqli_real_escape_string($conn, $userData['username']);
            $password = mysqli_real_escape_string($conn, $userData['password']);
            $confirmpassword = mysqli_real_escape_string($conn, $userData['confirm_password']);
            $type = mysqli_real_escape_string($conn, $userData['type']);
            $email = mysqli_real_escape_string($conn, $userData['email']);
            $mobile = mysqli_real_escape_string($conn, $userData['mobile']);
            $created_date = mysqli_real_escape_string($conn, $userData['created_date']);
            $dateofbirth = mysqli_real_escape_string($conn, $userData['date_of_birth']);
            $reportingto = mysqli_real_escape_string($conn, $userData['reporting_to']);
            $employee_id = mysqli_real_escape_string($conn, $userData['employee_id']);
            $status = mysqli_real_escape_string($conn, $userData['status']);
            $user_type = mysqli_real_escape_string($conn, $userData['user_type']);
            $designation = mysqli_real_escape_string($conn, $userData['designation']);
            $department = mysqli_real_escape_string($conn, $userData['department']);
            $role = mysqli_real_escape_string($conn, $userData['role']);

            $formattedDateOfBirth = date("d-m-Y", strtotime($dateofbirth));


            $interviewStatus = mysqli_real_escape_string($conn, $userData['interview_status']);

            $round1ConductedDate = mysqli_real_escape_string($conn, $userData['round1_conducted_date']);
            $round1ConductedBy = mysqli_real_escape_string($conn, $userData['round1_conducted_by']);
            $round1Result = mysqli_real_escape_string($conn, $userData['round1_result']);
            $round1Comment = mysqli_real_escape_string($conn, $userData['round1_comment']);
            $round2ConductedDate = mysqli_real_escape_string($conn, $userData['round2_conducted_date']);
            $round2ConductedBy = mysqli_real_escape_string($conn, $userData['round2_conducted_by']);
            $round2Result = mysqli_real_escape_string($conn, $userData['round2_result']);
            $round2Comment = mysqli_real_escape_string($conn, $userData['round2_comment']);
            $round3ConductedDate = mysqli_real_escape_string($conn, $userData['round3_conducted_date']);
            $round3ConductedBy = mysqli_real_escape_string($conn, $userData['round3_conducted_by']);
            $round3Result = mysqli_real_escape_string($conn, $userData['round3_result']);
            $round3Comment = mysqli_real_escape_string($conn, $userData['round3_comment']);
            $round4ConductedDate = mysqli_real_escape_string($conn, $userData['round4_conducted_date']);
            $round4ConductedBy = mysqli_real_escape_string($conn, $userData['round4_conducted_by']);
            $round4Result = mysqli_real_escape_string($conn, $userData['round4_result']);
            $round4Comment = mysqli_real_escape_string($conn, $userData['round4_comment']);
            $round5ConductedDate = mysqli_real_escape_string($conn, $userData['round5_conducted_date']);
            $round5ConductedBy = mysqli_real_escape_string($conn, $userData['round5_conducted_by']);
            $round5Result = mysqli_real_escape_string($conn, $userData['round5_result']);
            $round5Comment = mysqli_real_escape_string($conn, $userData['round5_comment']);
        } else {
            echo "User not found!";
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "User ID not provided!";
}

// Close the database connection
mysqli_close($conn);
?>

<!doctype html>
<html lang="en" class="light-theme">

<head>
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--plugins-->
    <link href="assets/vendor/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet" />
    <link href="assets/vendor/select2/css/select2-bootstrap4.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <title>RAR CRM - Create Department</title>
    <style>
        .custom-label {
            font-family: 'Franklin Gothic Medium', Arial, sans-serif;
            font-size: 16px;
        }
    </style>

</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar -->
        <?php include "includes/sidebar.php" ?>
        <!--end sidebar -->

        <!--start top header-->
        <?php include "includes/header.php" ?>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper" style="background: linear-gradient(to bottom, #ffff, #3D4044);">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Interview</div>

                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="dashboard.html"><ion-icon name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active text-dark" style="font-weight: 500;" aria-current="page"> Interview Status</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="container">
                    <div class="row">
                        <h2>Interview Status : <?php echo $interviewStatus ?> </h2>
                    </div>

                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 1 </h4>
                                    <h6 class="radius-10 P-2">Result : <?= !empty($round1Result) ? $round1Result : "No result to show"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?= !empty($round1ConductedBy) ? $round1ConductedBy : "None"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?= !empty($round1ConductedDate) ? $round1ConductedDate : "Not Conducted Yet"; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?= !empty($round1Comment) ? $round1Comment : "No Comments"; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 2 </h4>
                                    <h6 class="radius-10 P-2">Result : <?= !empty($round2Result) ? $round2Result : "No result to show"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?= !empty($round2ConductedBy) ? $round2ConductedBy : "None"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?= !empty($round2ConductedDate) ? $round2ConductedDate : "Not Conducted Yet"; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?= !empty($round2Comment) ? $round2Comment : "No Comments"; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 3 </h4>
                                    <h6 class="radius-10 P-2">Result : <?= !empty($round3Result) ? $round3Result : "No result to show"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?= !empty($round3ConductedBy) ? $round3ConductedBy : "None"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?= !empty($round3ConductedDate) ? $round3ConductedDate : "Not Conducted Yet"; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?= !empty($round3Comment) ? $round3Comment : "No Comments"; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 4 </h4>
                                    <h6 class="radius-10 P-2">Result : <?= !empty($round4Result) ? $round4Result : "No result to show"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?= !empty($round4ConductedBy) ? $round4ConductedBy : "None"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?= !empty($round4ConductedDate) ? $round4ConductedDate : "Not Conducted Yet"; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?= !empty($round4Comment) ? $round4Comment : "No Comments"; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 5 </h4>
                                    <h6 class="radius-10 P-2">Result : <?= !empty($round5Result) ? $round5Result : "No result to show"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?= !empty($round5ConductedBy) ? $round5ConductedBy : "None"; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?= !empty($round5ConductedDate) ? $round5ConductedDate : "Not Conducted Yet"; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?= !empty($round5Comment) ? $round5Comment : "No Comments"; ?></h6>
                                </div>
                            </div>
                        </div>


                        <!-- <div class="col-md-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 1 </h4>
                                    <h6 class="radius-10 P-2">Result : <?= !empty($round1Result) ? $round1Result : "No result to show"; ?>
                                    </h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?php echo $round1ConductedBy; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?php echo $round1ConductedDate; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?php echo $round1Comment; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 2 </h4>
                                    <h6 class="radius-10 P-2">Result : <?php echo $round2Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?php echo $round2ConductedBy; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?php echo $round2ConductedDate; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?php echo $round2Comment; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 3 </h4>
                                    <h6 class="radius-10 P-2">Result : <?php echo $round3Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?php echo $round3Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?php echo $round3Result; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?php echo $round3Result; ?></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 4 </h4>
                                    <h6 class="radius-10 P-2">Result : <?php echo $round4Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?php echo $round4Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?php echo $round4Result; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?php echo $round4Result; ?></h6>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="card radius-10">
                                <div class="card-body">
                                    <h4 class="card-title text-center mx-auto">Round 5 </h4>
                                    <h6 class="radius-10 P-2">Result : <?php echo $round5Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted By : <?php echo $round5Result; ?></h6>
                                    <h6 class="radius-10 P-2">Conducted Date : <?php echo $round5Result; ?></h6>
                                    <h6 class="radius-10 P-2">Comment : <?php echo $round5Result; ?></h6>
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>

                <!-- end page content-->
            </div>
            <!--Start Back To Top Button-->
            <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
            <!--End Back To Top Button-->


            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->

        </div>
        <!--end wrapper-->
        <!-- JS Files-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/vendor/metismenu/js/metisMenu.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <!--plugins-->
        <script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <script src="assets/vendor/select2/js/select2.min.js"></script>
        <script src="assets/js/form-select2.js"></script>
        <!-- Main JS-->
        <script src="assets/js/main.js"></script>



</body>

</html>
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
            $email = mysqli_real_escape_string($conn, $userData['primary_email']);
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
            $add1 = mysqli_real_escape_string($conn, $userData['cur_property_num']);
            $add2 = mysqli_real_escape_string($conn, $userData['cur_street_name']);
            $add3 = mysqli_real_escape_string($conn, $userData['cur_city']);
            $add4 = mysqli_real_escape_string($conn, $userData['cur_state']);
            $add5 = mysqli_real_escape_string($conn, $userData['cur_postcode']);
            $add6 = mysqli_real_escape_string($conn, $userData['current_country']);
            $highest_qulification = mysqli_real_escape_string($conn, $userData['highest_qualification']);
            $employment_status = mysqli_real_escape_string($conn, $userData['employment_status']);
            $relevant_work_experience = mysqli_real_escape_string($conn, $userData['relevant_work_experience']);
            $overall_work_experience = mysqli_real_escape_string($conn, $userData['overall_work_experience']);
            $current_salary = mysqli_real_escape_string($conn, $userData['current_salary']);
            $expected_salary = mysqli_real_escape_string($conn, $userData['expected_salary']);
            $last_working_location = mysqli_real_escape_string($conn, $userData['last_working_location']);
            $applied_job_position = mysqli_real_escape_string($conn, $userData['applied_job_position']);
            $round1_interview_date = mysqli_real_escape_string($conn, $userData['round1_interview_date']);
            $round1_interview_time = mysqli_real_escape_string($conn, $userData['round1_interview_time']);

            $round1_result = mysqli_real_escape_string($conn, $userData['round1_result']);
            $round2_result = mysqli_real_escape_string($conn, $userData['round2_result']);
            $round3_result = mysqli_real_escape_string($conn, $userData['round3_result']);
            $round4_result = mysqli_real_escape_string($conn, $userData['round4_result']);
            $round5_result = mysqli_real_escape_string($conn, $userData['round5_result']);

            $round1_comment = mysqli_real_escape_string($conn, $userData['round1_comment']);
            $round2_comment = mysqli_real_escape_string($conn, $userData['round2_comment']);
            $round3_comment = mysqli_real_escape_string($conn, $userData['round3_comment']);
            $round4_comment = mysqli_real_escape_string($conn, $userData['round4_comment']);
            $round5_comment = mysqli_real_escape_string($conn, $userData['round5_comment']);

            $interview_status = mysqli_real_escape_string($conn, $userData['interview_status']);




            $formattedDateOfBirth = date("d-m-Y", strtotime($dateofbirth));
        } else {
            echo "User not found!";
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
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
        <aside class="sidebar-wrapper" data-simplebar="true" style="background: linear-gradient(to bottom, #fff ,#fff,  #5B5E61  ); ">
            <div class="sidebar-header bg-dark">
                <div>
                    <img src="assets/images/logo.png" class="logo-icon" alt="Fastranking Logo">
                </div>
                <div>
                    <h4 class="logo-text text-white">FR - RECR.</h4>
                </div>
                <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="admin.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <!-- New Candidate -->
                <li>
                    <a href="create-user.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-calendar-plus"></i>
                        </div>
                        <div class="menu-title">Create New User</div>
                    </a>
                </li>

                <li>
                    <a href="all-candidates.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-chart"></i>
                        </div>
                        <div class="menu-title">See All Candidates</div>
                    </a>
                </li>


                <!-- My Interview -->
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <div class="menu-title">My Interviews</div>
                    </a>
                    <ul>
                        <li><a href="create-mail-form.html"><ion-icon name="ellipse-outline"></ion-icon>Scheduled</a>
                        </li>
                        <li><a href="my-mail-form.html"><ion-icon name="ellipse-outline"></ion-icon>Conducted</a>
                        </li>
                        <li><a href="all-mail-form.html"><ion-icon name="ellipse-outline"></ion-icon>Not Conducted</a>
                        </li>

                    </ul>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-calendar-plus"></i>
                        </div>
                        <div class="menu-title">My Hires</div>
                    </a>
                    <ul>
                        <li> <a href="create-meeting.html"><ion-icon name="ellipse-outline"></ion-icon>Offered</a>
                        </li>
                        <li> <a href="my-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>Training & Induction</a>
                        </li>
                        <li> <a href="all-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>Joind - Active</a>
                        </li>
                        <li> <a href="create-meeting.html"><ion-icon name="ellipse-outline"></ion-icon>Joind - InActive</a>
                        </li>
                        <li> <a href="my-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>Abscoding</a>
                        </li>
                        <li> <a href="all-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>Resigned</a>
                        </li>
                    </ul>
                </li>

                <li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-bell-plus"></i>
                        </div>
                        <div class="menu-title">Notifications </div>
                    </a>
                    <ul>
                        <li> <a href="todays-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>Today's Meeting</a>
                        </li>
                        <li> <a href="todays-followup.html"><ion-icon name="ellipse-outline"></ion-icon>Today's Follow Up</a>
                        </li>

                    </ul>
                </li>
                <!-- <li class="menu-label">Forms & Tables</li> -->
                <li>
                    <a href="meetings-calendar.html">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-calendar"></i>
                        </div>
                        <div class="menu-title">Meeting Calendar</div>
                    </a>

                </li>

            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        <!--start top header-->
        <header class="top-header" style="background: #111;">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button "><ion-icon name="menu-sharp"></ion-icon></div>

                <div class="mx-auto ps-5 text-white py-1">
                    <h2>FAST RANKING RECRUITMENT</h2>
                </div>

                <div class="top-navbar-right">

                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-large dropdown-apps">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <div class="">
                                    <ion-icon name="apps-sharp"></ion-icon>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                <div class="row row-cols-3 g-3 p-3">
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-purple text-white"><ion-icon name="cart-sharp"></ion-icon>
                                        </div>
                                        <div class="app-title">Sales</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-info text-white"><ion-icon name="people-sharp"></ion-icon>
                                        </div>
                                        <div class="app-title">Teams</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-success text-white"><ion-icon name="shield-checkmark-sharp"></ion-icon>
                                        </div>
                                        <div class="app-title">Tasks</div>
                                    </div>
                                    <div class="col text-center">
                                        <div class="app-box mx-auto bg-gradient-warning text-white"><ion-icon name="file-tray-sharp"></ion-icon>
                                        </div>
                                        <div class="app-title">Files</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <span class="notify-badge">3</span>
                                    <ion-icon name="notifications-sharp"></ion-icon>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <!-- <p class="msg-header-clear ms-auto">Marks all as read</p> -->
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-primary"><ion-icon name="checkmark-done-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Meetings <span class="msg-time float-end">2 min
                                                        ago</span></h6>
                                                <p class="msg-info">You have recived new meetings</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-danger"><ion-icon name="person-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Follow Up<span class="msg-time float-end">14 Sec
                                                        ago</span></h6>
                                                <p class="msg-info">5 new follow ups</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify text-danger"><ion-icon name="chatbox-ellipses-outline"></ion-icon>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">New customer comments recived</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                                <div class="user-setting">
                                    <img src="assets/images/avatars/06.png" class="user-img" alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex flex-row align-items-center gap-2">
                                            <img src="assets/images/avatars/06.png" alt="" class="rounded-circle" width="54" height="54">
                                            <div class="">
                                                <h6 class="mb-0 dropdown-user-name"><?php echo $_SESSION['logined_user']; ?></h6>
                                                <small class="mb-0 dropdown-user-designation text-secondary">User Designation</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-user-profile.html">
                                        <div class="d-flex align-items-center">
                                            <div class=""><ion-icon name="person-outline"></ion-icon></div>
                                            <div class="ms-3"><span>Profile</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class=""><ion-icon name="settings-outline"></ion-icon></div>
                                            <div class="ms-3"><span>Setting</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class=""><ion-icon name="wallet-outline"></ion-icon></div>
                                            <div class="ms-3"><span>Earnings</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class=""><ion-icon name="cloud-download-outline"></ion-icon></div>
                                            <div class="ms-3"><span>Downloads</span></div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="index.php">
                                        <div class="d-flex align-items-center">
                                            <div class=""><ion-icon name="log-out-outline"></ion-icon></div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </nav>
        </header>
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
                                <li class="breadcrumb-item active text-dark" style="font-weight: 500;" aria-current="page">Schedule Interview</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <h3 class="text-center mx-auto">[ Name : <?php echo $title . " " . $firstname . " " . $lastname; ?> | Candidate Id : <?php echo $userId; ?> ]</h3>
                <div class="row">
                    <div class="card radius-10" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <div class="card-body bg-white">
                            <div class="row">
                                <div class="col-md-6 my-3">
                                    <h6><span style="display: inline-block; min-width:  250px;">FULL NAME </span> <?php echo ":" . " " . $title . " " . $firstname . " " . $lastname; ?> </h6>

                                    <h6><span style="display: inline-block; min-width: 250px;">GENDER </span> <?php echo ":" . " " . $gender; ?> </h6>

                                    <h6><span style="display: inline-block; min-width: 250px;">DOB </span> <?php echo ":" . " " . $dateofbirth; ?></h6>


                                    <h6><span style="display: inline-block; min-width:  250px;">PHONE </span> <?php echo ":" . " " . $mobile; ?></h6>

                                    <h6><span style="display: inline-block; min-width:  250px;">EMAIL </span> <?php echo ":" . " " . $email; ?></h6>


                                    <h6><span style="display: inline-block; min-width:  250px;"> ADDRESS </span> <?php echo ":" . " " . $add1 . " " . $add2 . " " . $add5 . " " . $add6; ?></h6>

                                    <h6><span style="display: inline-block; min-width:  250px;">HIGHEST QUALIFICATION </span> <?php echo ":" . " " . $highest_qulification; ?></h6>
                                    <h6><span style="display: inline-block; min-width:250px;">EMPLOYMENT STATUS </span> <?php echo ":" . " " . $employment_status; ?></h6>

                                </div>


                                <div class="col-md-6  my-3">


                                    <h6><span style="display: inline-block; min-width:285px;"> RELEVANT WORK EXPERIENCE </span> <?php echo ":" . " " . $relevant_work_experience; ?> </h6>
                                    <h6><span style="display: inline-block; min-width:285px;"> OVERALL WORK EXPERIENCE </span> <?php echo ":" . " " . $overall_work_experience; ?></h6>


                                    <h6><span style="display: inline-block; min-width:285px;"> CURRENT SALARY </span> <?php echo ":" . " " . $current_salary; ?></h6>


                                    <h6><span style="display: inline-block; min-width:285px;">EXPECTED SALARY </span> <?php echo ":" . " " . $expected_salary; ?></h6>

                                    <h6><span style="display: inline-block; min-width:285px;">LAST WORKING LOCATION </span> <?php echo ":" . " " . $last_working_location; ?></h6>

                                    <h6><span style="display: inline-block; min-width:285px;">APPLIED JOB POSITION </span> <?php echo ":" . " " . $applied_job_position; ?></h6>
                                    <h6><span style="display: inline-block; min-width:285px;">ROUND 1 INTERVIEW DATE </span> <?php echo ":" . " " . date("d M Y", strtotime($round1_interview_date)); ?></h6>
                                    <h6><span style="display: inline-block; min-width:285px;">ROUND 1 INTERVIEW TIME </span> <?php echo ":" . " " . date("H:i", strtotime($round1_interview_time)); ?></h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-dark text-white py-4 px-2 radius-10 mx-2 mb-4 ">

                    <h4 class="text-center mx-auto mb-4">INTERVIEW STATUS : <?php echo $interview_status;  ?> </h4>

                    <div class="col-md-4">
                        <div class=" bg-white text-dark radius-10 p-2">
                            <P>ROUND 1 RESULT : <?php echo $round1_result;  ?> </P>
                            <P>ROUND 1 COMMENT : <?php echo $round1_comment;  ?> </P>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class=" bg-white text-dark radius-10 p-2">
                            <P>ROUND 2 RESULT : <?php echo $round2_result;  ?> </P>
                            <P>ROUND 2 COMMENT : <?php echo $round2_comment;  ?> </P>
                        </div>

                    </div>

                    <div class="col-md-4 ">
                        <div class=" bg-white text-dark radius-10 p-2">
                            <P>ROUND 3 RESULT : <?php echo $round3_result;  ?> </P>
                            <P>ROUND 3 COMMENT : <?php echo $round3_comment;  ?> </P>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <div class=" bg-white text-dark radius-10 p-2">
                            <P>ROUND 4 RESULT : <?php echo $round4_result;  ?> </P>
                            <P>ROUND 4 COMMENT : <?php echo $round4_comment;  ?> </P>
                        </div>
                    </div>

                    <div class="col-md-4 my-2">
                        <div class=" bg-white text-dark radius-10 p-2">
                            <P>ROUND 5 RESULT : <?php echo $round5_result;  ?> </P>
                            <P>ROUND 5 COMMENT : <?php echo $round5_comment;  ?> </P>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    $round_query = "SELECT * FROM candidate_details WHERE candidate_id ='$userId' ";
                    $send = $conn->query($round_query);

                    if ($send->num_rows > 0) {
                        $data = $send->fetch_assoc();
                        if ($data['interview_status'] == 'Passed to Round I' || $data['round1_result'] == 'On Hold') {
                            // Show ROUND 1 card only if round1_interview_date is not empty i want when i submit this form then new form popup for scheduling the next round interview in which input fields are  round 2 interview date , interview time , will take by
                    ?>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="p-4 radius-10" style="background-color: #898B8D;">
                                            <div class="card-title text-center mx-auto">
                                                <h1 class="text-white">ROUND : 1</h1>
                                            </div>
                                            <div class="row text-white radius-10 pt-3  pb-2  text-center mx-auto mt-3 mb-2" style="background-color: #000;">
                                                <div class="col-md-6">
                                                    <h4>SCHEDULED DATE : <?php echo $data['round1_interview_date'] ?> </h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>SCHEDULED TIME : [ <?php echo date('H:i:s', strtotime($data['round1_interview_time'])); ?> ]</h4>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-9 p-5 text-center mx-auto">
                                                <div class="card text-white radius-10" style="background-color: #121F1F;">
                                                    <div class="card-body">
                                                        <h4 class="text-center  radius-10 py-2 mx-auto text-white " style="background-color: #3F4246;">ROUND 1 STATUS</h4>

                                                        <form action="update-interview-status.php" method="post">
                                                            <div class="row p-3">
                                                                <input type="hidden" class="form-control" name="candidate_id" value="<?php echo $userId; ?>">
                                                                <input type="hidden" class="form-control" name="user_name" value="<?php echo $_SESSION['logined_user']; ?>">

                                                                <div class="col-md-4">
                                                                    <label class="form-label">Conducted Date <span class="error_msg">*</span></label>
                                                                    <input type="date" class="form-control" name="round1_conducted_date" value="<?php echo htmlspecialchars($data['round1_conducted_date']); ?>" required>
                                                                </div>
 
                                                                <div class="col-md-4">
                                                                    <label class="form-label ">Conducted By<span class="error_msg">*</span></label>
                                                                    <input type="text" class="form-control" name="round1_conducted_by" value="<?php echo $data['round1_conducted_by']; ?>"  required>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label class="form-label">Round 1 Result<span class="error_msg">*</span></label>
                                                                    <select class="form-select" name="round1_result" id="round1" required>
                                                                        <!-- <option value="" disabled selected>Select</option> -->
                                                                        <option value="<?php echo $data['round1_result']; ?>" class=" text-white" style="background-color: #3D4044;" ><?php echo $data['round1_result']; ?></option>
                                                                        <option value="Passed to Round II">Passed to Round II</option>
                                                                        <option value="Fail">Failed</option>
                                                                        <option value="On Hold">On Hold</option>
                                                                        <option value="Offered">Offered</option>
                                                                    </select>
                                                                </div>

                                                                <div class="hidden-fields " style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 2 Interview Date<span class="error_msg">*</span></label>
                                                                            <input type="date" class="form-control" name="round2_interview_date">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 2 Interview Time<span class="error_msg">*</span></label>
                                                                            <input type="time" class="form-control" name="round2_interview_time">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 2 Interviewer<span class="error_msg">*</span></label>
                                                                            <input type="text" class="form-control" name="round2_interviewer">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <label class="form-label mt-3">Add Comment<span class="error_msg">*</span></label>
                                                                <input type="text" class="form-control" name="round1_comment" required>

                                                                <button class="text-center mx-auto mt-5 button btn-dark px-5 py-2 radius-10" style="height: auto; width:auto; font-size:18px">SUBMIT</button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                            <script>
                                                document.getElementById('round1').addEventListener('change', function() {
                                                    var hiddenFields = document.querySelector('.hidden-fields');
                                                    var nextRoundDate = document.querySelector('[name="next_round_date"]');
                                                    var nextRoundTime = document.querySelector('[name="next_round_time"]');
                                                    var nextRoundInterviewer = document.querySelector('[name="next_round_interviewer"]');

                                                    if (this.value === 'Passed to Round II') {
                                                        hiddenFields.style.display = 'block';
                                                        nextRoundDate.setAttribute('required', true);
                                                        nextRoundTime.setAttribute('required', true);
                                                        nextRoundInterviewer.setAttribute('required', true);
                                                    } else {
                                                        hiddenFields.style.display = 'none';
                                                        nextRoundDate.removeAttribute('required');
                                                        nextRoundTime.removeAttribute('required');
                                                        nextRoundInterviewer.removeAttribute('required');
                                                    }
                                                });
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } elseif ($data['interview_status'] == 'Passed to Round II' || $data['round2_result'] == 'On Hold') {
                            // Show ROUND 2 card only if round2_interview_date is not empty
                        ?>
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="p-5 radius-10" style="background-color: #3F4246;">
                                            <div class="card-title text-center mx-auto">
                                                <h1 class="text-white">ROUND 2</h1>
                                            </div>
                                            <div class="row text-white radius-10 pt-3  pb-2  text-center mx-auto mt-3" style="background-color: #000;">
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE DATE : <?php echo $data['round2_interview_date'] ?> </h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE TIME : [ <?php echo date('H:i:s', strtotime($data['round2_interview_time'])); ?> ]</h4>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row ">
                                            <div class="col-md-9 p-5 text-center mx-auto">
                                                <div class="card text-white radius-10" style="background-color: #121F1F;">
                                                    <div class="card-body">
                                                        <h4 class="text-center  radius-10 py-2 mx-auto text-white " style="background-color: #3F4246;">ROUND 2 STATUS</h4>

                                                        <form action="update-interview-status.php" method="post">
                                                            <div class="row p-3">
                                                                <input type="hidden" class="form-control" name="candidate_id" value="<?php echo $userId; ?>">
                                                                <input type="hidden" class="form-control" name="user_name" value="<?php echo $_SESSION['logined_user']; ?>">
                                                                <div class="col-md-4">
                                                                    <label class="form-label">ROUND 2 Conducted Date <span class="error_msg">*</span></label>
                                                                    <input type="date" class="form-control" name="round2_conducted_date" value="<?php echo htmlspecialchars($data['round2_conducted_date']); ?>" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label ">ROUND 2 Conducted By<span class="error_msg">*</span></label>
                                                                    <input type="text" class="form-control" name="round2_conducted_by" value="<?php echo $data['round2_conducted_by']; ?>"  required>
                                                                    
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label class="form-label ">Round 2 Result<span class="error_msg">*</span></label>
                                                                    <select class="form-select" name="round2_result" id="round2" required>
                                                                        <!-- <option value="" disabled selected>Select</option> -->
                                                                        <option value="<?php echo $data['round2_result']; ?>" class=" text-white" style="background-color: #3D4044;" ><?php echo $data['round2_result']; ?></option>
                                                                        <option value="Passed to Round III">Passed to Round III</option>
                                                                        <option value="Fail">Failed</option>
                                                                        <option value="On Hold">On Hold</option>
                                                                        <option value="Offered">Offered</option>
                                                                    </select>
                                                                </div>



                                                                <div class="hidden-fields" style="display: none;">

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 3 Interview Date<span class="error_msg">*</span></label>
                                                                            <input type="date" class="form-control" name="round3_interview_date">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 3 Interview Time<span class="error_msg">*</span></label>
                                                                            <input type="time" class="form-control" name="round3_interview_time">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 3 Interviewer<span class="error_msg">*</span></label>
                                                                            <input type="text" class="form-control" name="round3_interviewer">
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                                <label class="form-label mt-3">Add Comment<span class="error_msg">*</span></label>
                                                                <input type="text" class="form-control" name="round2_comment" required>

                                                                <button class="text-center mx-auto mt-5 button btn-dark px-5 py-2 radius-10" style="height: auto; width:auto; font-size:18px">SUBMIT</button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                            <script>
                                                document.getElementById('round2').addEventListener('change', function() {
                                                    var hiddenFields = document.querySelector('.hidden-fields');
                                                    var nextRoundDate = document.querySelector('[name="next_round_date"]');
                                                    var nextRoundTime = document.querySelector('[name="next_round_time"]');
                                                    var nextRoundInterviewer = document.querySelector('[name="next_round_interviewer"]');

                                                    if (this.value === 'Passed to Round III') {
                                                        hiddenFields.style.display = 'block';
                                                        nextRoundDate.setAttribute('required', true);
                                                        nextRoundTime.setAttribute('required', true);
                                                        nextRoundInterviewer.setAttribute('required', true);
                                                    } else {
                                                        hiddenFields.style.display = 'none';
                                                        nextRoundDate.removeAttribute('required');
                                                        nextRoundTime.removeAttribute('required');
                                                        nextRoundInterviewer.removeAttribute('required');
                                                    }
                                                });
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } elseif ($data['interview_status'] == 'Passed to Round III' || $data['round3_result'] == 'On Hold') {
                            // Show ROUND 3 card only if round3_interview_date is not empty
                        ?>

                            <div class="row">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="p-5 radius-10" style="background-color: #3F4246;">
                                            <div class="card-title text-center mx-auto">
                                                <h1 class="text-white">ROUND 3</h1>
                                            </div>
                                            <div class="row text-white radius-10 pt-3  pb-2  text-center mx-auto mt-3" style="background-color: #000;">
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE DATE : <?php echo $data['round3_interview_date'] ?> </h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE TIME : [ <?php echo date('H:i:s', strtotime($data['round3_interview_time'])); ?> ]</h4>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row ">
                                            <div class="col-md-9 p-5 text-center mx-auto">
                                                <div class="card text-white radius-10" style="background-color: #121F1F;">
                                                    <div class="card-body">
                                                        <h4 class="text-center  radius-10 py-2 mx-auto text-white " style="background-color: #3F4246;">ROUND 3 STATUS</h4>

                                                        <form action="update-interview-status.php" method="post">
                                                            <div class="row p-3">
                                                                <input type="hidden" class="form-control" name="candidate_id" value="<?php echo $userId; ?>">
                                                                <input type="hidden" class="form-control" name="user_name" value="<?php echo $_SESSION['logined_user']; ?>">
                                                                <div class="col-md-4">
                                                                    <label class="form-label">ROUND 3 Conducted Date <span class="error_msg">*</span></label>
                                                                    <input type="date" class="form-control" name="round3_conducted_date" value="<?php echo htmlspecialchars($data['round3_conducted_date']); ?>" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label ">ROUND 3 Conducted By<span class="error_msg">*</span></label>
                                                                    <input type="text" class="form-control" name="round3_conducted_by" value="<?php echo $data['round3_conducted_by'] ; ?>" required>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label class="form-label ">Round 3 Result<span class="error_msg">*</span></label>
                                                                    <select class="form-select" name="round3_result" id="round3" required>
                                                                        <!-- <option value="" disabled selected>Select</option> -->
                                                                        <option value="<?php echo $data['round3_result']; ?>" class=" text-white" style="background-color: #3D4044;" ><?php echo $data['round3_result']; ?></option>
                                                                        <option value="Passed to Round IV">Passed to Round IV</option>
                                                                        <option value="Fail">Failed</option>
                                                                        <option value="On Hold">On Hold</option>
                                                                        <option value="Offered">Offered</option>
                                                                    </select>

                                                                </div>



                                                                <div class="hidden-fields " style="display: none;">

                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 4 Interview Date<span class="error_msg">*</span></label>
                                                                            <input type="date" class="form-control" name="round4_interview_date">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 4 Interview Time<span class="error_msg">*</span></label>
                                                                            <input type="time" class="form-control" name="round4_interview_time">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 4 Interviewer<span class="error_msg">*</span></label>
                                                                            <input type="text" class="form-control" name="round4_interviewer">
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                                <label class="form-label mt-3">Add Comment<span class="error_msg">*</span></label>
                                                                <input type="text" class="form-control" name="round3_comment" required>

                                                                <button class="text-center mx-auto mt-5 button btn-dark px-5 py-2 radius-10" style="height: auto; width:auto; font-size:18px">SUBMIT</button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                            <script>
                                                document.getElementById('round3').addEventListener('change', function() {
                                                    var hiddenFields = document.querySelector('.hidden-fields');
                                                    var nextRoundDate = document.querySelector('[name="next_round_date"]');
                                                    var nextRoundTime = document.querySelector('[name="next_round_time"]');
                                                    var nextRoundInterviewer = document.querySelector('[name="next_round_interviewer"]');

                                                    if (this.value === 'Passed to Round IV') {
                                                        hiddenFields.style.display = 'block';
                                                        nextRoundDate.setAttribute('required', true);
                                                        nextRoundTime.setAttribute('required', true);
                                                        nextRoundInterviewer.setAttribute('required', true);
                                                    } else {
                                                        hiddenFields.style.display = 'none';
                                                        nextRoundDate.removeAttribute('required');
                                                        nextRoundTime.removeAttribute('required');
                                                        nextRoundInterviewer.removeAttribute('required');
                                                    }
                                                });
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } elseif ($data['interview_status'] == 'Passed to Round IV' || $data['round4_result'] == 'On Hold') {
                            // Show ROUND 4 card only if round3_interview_date is not empty
                        ?>

                            <div class="row">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="p-5 radius-10" style="background-color: #3F4246;">
                                            <div class="card-title text-center mx-auto">
                                                <h1 class="text-white">ROUND 4</h1>
                                            </div>
                                            <div class="row text-white radius-10 pt-3  pb-2  text-center mx-auto mt-3" style="background-color: #000;">
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE DATE : <?php echo $data['round3_interview_date'] ?> </h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE TIME : [ <?php echo date('H:i:s', strtotime($data['round3_interview_time'])); ?> ]</h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-9 p-5 text-center mx-auto">
                                                <div class="card text-white radius-10" style="background-color: #121F1F;">
                                                    <div class="card-body">
                                                        <h4 class="text-center  radius-10 py-2 mx-auto text-white " style="background-color: #3F4246;">ROUND 4 STATUS</h4>

                                                        <form action="update-interview-status.php" method="post">
                                                            <div class="row p-3">
                                                                <input type="hidden" class="form-control" name="candidate_id" value="<?php echo $userId; ?>">
                                                                <input type="hidden" class="form-control" name="user_name" value="<?php echo $_SESSION['logined_user']; ?>">
                                                                <div class="col-md-4">
                                                                    <label class="form-label">ROUND 4 Conducted Date <span class="error_msg">*</span></label>
                                                                    <input type="date" class="form-control" name="round4_conducted_date" value="<?php echo htmlspecialchars($data['round4_conducted_date']); ?>" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label ">ROUND 4 Conducted By<span class="error_msg">*</span></label>
                                                                    <input type="text" class="form-control" name="round4_conducted_by" value="<?php echo $data['round4_conducted_by'] ; ?>" required>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label class="form-label ">Round 4 Result<span class="error_msg">*</span></label>
                                                                    <select class="form-select" name="round4_result" id="round4" required>
                                                                        <!-- <option value="" disabled selected>Select</option> -->
                                                                        <option value="<?php echo $data['round4_result']; ?>" class=" text-white" style="background-color: #3D4044;" ><?php echo $data['round4_result']; ?></option>
                                                                        <option value="Passed to Round V">Passed to Round V</option>
                                                                        <option value="Fail">Failed</option>
                                                                        <option value="On Hold">Hold</option>
                                                                        <option value="Offered">Offered</option>
                                                                    </select>
                                                                </div>



                                                                <div class="hidden-fields " style="display: none;">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 5 Interview Date<span class="error_msg">*</span></label>
                                                                            <input type="date" class="form-control" name="round5_interview_date">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 5 Interview Time<span class="error_msg">*</span></label>
                                                                            <input type="time" class="form-control" name="round5_interview_time">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label mt-3">Round 5 Interviewer<span class="error_msg">*</span></label>
                                                                            <input type="text" class="form-control" name="round5_interviewer">
                                                                        </div>
                                                                    </div>
                                                                </div> 

                                                                <label class="form-label mt-3">Add Comment<span class="error_msg">*</span></label>
                                                                <input type="text" class="form-control" name="round4_comment" required>

                                                                <button class="text-center mx-auto mt-5 button btn-dark px-5 py-2 radius-10" style="height: auto; width:auto; font-size:18px">SUBMIT</button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                            <script>
                                                document.getElementById('round4').addEventListener('change', function() {
                                                    var hiddenFields = document.querySelector('.hidden-fields');
                                                    var nextRoundDate = document.querySelector('[name="next_round_date"]');
                                                    var nextRoundTime = document.querySelector('[name="next_round_time"]');
                                                    var nextRoundInterviewer = document.querySelector('[name="next_round_interviewer"]');

                                                    if (this.value === 'Passed to Round V') {
                                                        hiddenFields.style.display = 'block';
                                                        nextRoundDate.setAttribute('required', true);
                                                        nextRoundTime.setAttribute('required', true);
                                                        nextRoundInterviewer.setAttribute('required', true);
                                                    } else {
                                                        hiddenFields.style.display = 'none';
                                                        nextRoundDate.removeAttribute('required');
                                                        nextRoundTime.removeAttribute('required');
                                                        nextRoundInterviewer.removeAttribute('required');
                                                    }
                                                });
                                            </script>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } elseif ($data['interview_status'] == 'Passed to Round V' || $data['round5_result'] == 'On Hold') {
                            // Show ROUND 3 card only if round3_interview_date is not empty
                        ?>

                            <div class="row">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="p-5 radius-10" style="background-color: #3F4246;">
                                            <div class="card-title text-center mx-auto">
                                                <h1 class="text-white">ROUND 5</h1>
                                            </div>
                                            <div class="row text-white radius-10 pt-3  pb-2  text-center mx-auto mt-3" style="background-color: #000;">
                                                <div class="col-md-6">
                                                    <h4>SCHEDULED DATE : <?php echo $data['round5_interview_date'] ?> </h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4>SCHEDULE TIME : [ <?php echo date('H:i:s', strtotime($data['round5_interview_time'])); ?> ]</h4>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-9 p-5 text-center mx-auto">
                                                <div class="card text-white radius-10" style="background-color: #121F1F;">
                                                    <div class="card-body">
                                                        <h4 class="text-center  radius-10 py-2 mx-auto text-white " style="background-color: #3F4246;">ROUND 5 STATUS</h4>

                                                        <form action="update-interview-status.php" method="post">
                                                            <div class="row p-3">
                                                                <input type="hidden" class="form-control" name="candidate_id" value="<?php echo $userId; ?>">
                                                                <input type="hidden" class="form-control" name="user_name" value="<?php echo $_SESSION['logined_user']; ?>">
                                                                <div class="col-md-4">
                                                                    <label class="form-label">ROUND 5 Conducted Date <span class="error_msg">*</span></label>
                                                                    <input type="date" class="form-control" name="round5_conducted_date" value="<?php echo htmlspecialchars($data['round5_conducted_date']); ?>" required>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label class="form-label ">ROUND 5 Conducted By<span class="error_msg">*</span></label>
                                                                    <input type="text" class="form-control" name="round5_conducted_by" value="<?php echo $data['round5_conducted_by']; ?>" required>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <label class="form-label ">Round 5 Result<span class="error_msg">*</span></label>
                                                                    <select class="form-select" name="round5_result" id="round5" required>
                                                                    <option value="<?php echo $data['round5_result']; ?>" class=" text-white" style="background-color: #3D4044;" ><?php echo $data['round5_result']; ?></option>
                                                                        <option value="Fail">Failed</option>
                                                                        <option value="On Hold">Hold</option>
                                                                        <option value="Offered">Offered</option>
                                                                    </select>
                                                                </div>

                                                                <label class="form-label mt-3">Add Comment<span class="error_msg">*</span></label>
                                                                <input type="text" class="form-control" name="round5_comment" required>

                                                                <button class="text-center mx-auto mt-5 button btn-dark px-5 py-2 radius-10" style="height: auto; width:auto; font-size:18px">SUBMIT</button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </div>



        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
        <!--End Back To Top Button-->


        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->

    </div>
    <!--end wrapper-->
    <script>
        document.getElementById('round1_result').addEventListener('change', function() {
            var hiddenFields = document.querySelector('.hidden-fields');
            var nextRoundDate = document.querySelector('[name="next_round_date"]');
            var nextRoundTime = document.querySelector('[name="next_round_time"]');
            var nextRoundInterviewer = document.querySelector('[name="next_round_interviewer"]');

            if (this.value === 'Passed to Round II') {
                hiddenFields.style.display = 'block';
                nextRoundDate.setAttribute('required', true);
                nextRoundTime.setAttribute('required', true);
                nextRoundInterviewer.setAttribute('required', true);
            } else {
                hiddenFields.style.display = 'none';
                nextRoundDate.removeAttribute('required');
                nextRoundTime.removeAttribute('required');
                nextRoundInterviewer.removeAttribute('required');
            }
        });
    </script>
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

<?php
mysqli_close($conn);
?>
<?php
session_start();
// error_reporting(0);

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
    $selectQuery = "SELECT * FROM candidate_details WHERE candidate_id = '$userId'";
    $result = mysqli_query($conn, $selectQuery);

    if ($result) {
        // Fetch data as an associative array
        $userData = mysqli_fetch_assoc($result);

        $date = mysqli_real_escape_string($conn, trim($userData['date']));
        $time = mysqli_real_escape_string($conn, trim($userData['time']));
        $createdBy = mysqli_real_escape_string($conn, trim($userData['created_by']));
        $title = mysqli_real_escape_string($conn, trim($userData['title']));
        $firstName = mysqli_real_escape_string($conn, trim($userData['first_name']));
        $middleName = mysqli_real_escape_string($conn, trim($userData['middile_name']));
        $lastName = mysqli_real_escape_string($conn, trim($userData['last_name']));
        $gender = mysqli_real_escape_string($conn, trim($userData['gender']));
        $dateOfBirth = mysqli_real_escape_string($conn, trim($userData['date_of_birth']));
        $primaryEmail = mysqli_real_escape_string($conn, trim($userData['primary_email']));
        $secondaryEmail = mysqli_real_escape_string($conn, trim($userData['secondary_email']));
        $phone = mysqli_real_escape_string($conn, trim($userData['phone']));
        $mobile = mysqli_real_escape_string($conn, trim($userData['mobile']));
        $curPropertyNum = mysqli_real_escape_string($conn, trim($userData['cur_property_num']));
        $curStreetName = mysqli_real_escape_string($conn, trim($userData['cur_street_name']));
        $curCity = mysqli_real_escape_string($conn, trim($userData['cur_city']));
        $curState = mysqli_real_escape_string($conn, trim($userData['cur_state']));
        $curPostcode = mysqli_real_escape_string($conn, trim($userData['cur_postcode']));
        $currentCountry = mysqli_real_escape_string($conn, trim($userData['current_country']));
        $permanentPropertyNo = mysqli_real_escape_string($conn, trim($userData['permanent_property_no']));
        $permanentStreetName = mysqli_real_escape_string($conn, trim($userData['permanent_street_name']));
        $permanentCity = mysqli_real_escape_string($conn, trim($userData['permanent_city']));
        $permanentState = mysqli_real_escape_string($conn, trim($userData['permanent_state']));
        $permanentPostcode = mysqli_real_escape_string($conn, trim($userData['permanent_postcode']));
        $permanentCountry = mysqli_real_escape_string($conn, trim($userData['permanent_country']));
        $highestQualification = mysqli_real_escape_string($conn, trim($userData['highest_qualification']));
        $employmentStatus = mysqli_real_escape_string($conn, trim($userData['employment_status']));
        $relevantWorkExperience = mysqli_real_escape_string($conn, trim($userData['relevant_work_experience']));
        $overallWorkExperience = mysqli_real_escape_string($conn, trim($userData['overall_work_experience']));
        $currentSalary = mysqli_real_escape_string($conn, trim($userData['current_salary']));
        $expectedSalary = mysqli_real_escape_string($conn, trim($userData['expected_salary']));
        $interviewDate = mysqli_real_escape_string($conn, trim($userData['interview_date']));
        $interviewTime = mysqli_real_escape_string($conn, trim($userData['interview_time']));
        $lastWorkingLocation = mysqli_real_escape_string($conn, trim($userData['last_working_location']));
        $appliedJobPosition = mysqli_real_escape_string($conn, trim($userData['applied_job_position']));
        $comment = mysqli_real_escape_string($conn, trim($userData['comment']));
        $interview_status = mysqli_real_escape_string($conn, trim($userData['interview_status']));
         
    }
    // Now you can use these variables to populate your form fields
} 
else 
{
    echo "Error retrieving candidate details: " . mysqli_error($conn);
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

</head>

<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo.png" class="logo-icon" alt="Fastranking Logo">
                </div>
                <div>
                    <h4 class="logo-text">FR-CRM </h4>


                </div>
                <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">

                <!-- Dashboard -->
                <li>
                    <a href="dashboard.html">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-home-alt"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <!-- New Candidate -->
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-calendar-plus"></i>
                        </div>
                        <div class="menu-title">New Candidate </div>
                    </a>
                    <ul>
                        <li> <a href="candidate-details.php"><ion-icon name="ellipse-outline"></ion-icon>New Candidate</a>
                        </li>
                    </ul>
                </li>



                <!-- My Candidate -->
                <li>
                    <a href="my-candidates.php">
                        <div class="parent-icon"><i class="fadeIn animated bx bx-chart"></i>
                        </div>
                        <div class="menu-title">My Candidates</div>
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
                        <li> <a href="create-meeting.html"><ion-icon name="ellipse-outline"></ion-icon>Create Meeting</a>
                        </li>
                        <li> <a href="my-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>My Meetings</a>
                        </li>
                        <li> <a href="all-meetings.html"><ion-icon name="ellipse-outline"></ion-icon>All Meetings</a>
                        </li>
                    </ul>
                </li>

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
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-menu-button"><ion-icon name="menu-sharp"></ion-icon></div>
                <form class="searchbar">
                    <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
                    <input class="form-control" type="text" placeholder="Search for anything">
                    <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div>
                </form>
                <div class="top-navbar-right ms-auto">
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
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">New Candidate</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="dashboard.html"><ion-icon name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Candidate Details</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">

                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <h6 class="mb-0 text-uppercase">Candidate Details</h6>
                                    <hr>
                                    <form action="update-candidate-details.php?id=<?php echo $userId; ?>" method="post">
                                        <div class="row g-3" id="customer-container">
                                            <!-- starting -->
                                            <div class="d-grid col-2">
                                                <label class="form-label">Title <span class="error_msg">*</span></label>
                                                <select class="form-select" name="title">
                                                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">First Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name" value=" <?php echo $firstName; ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label"> Middle Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="middlename" placeholder="Middle  Name" value=" <?php echo $middleName; ?>">
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label">Last Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value=" <?php echo $lastName; ?>">
                                            </div>

                                            <div class="d-grid col-2">
                                                <label class="form-label">Select Gender <span class="error_msg">*</span></label>
                                                <select class="form-select" name="gender">
                                                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-2">
                                                <label class="form-label">Set DOB<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" placeholder="Date Of Joining" value=" <?php echo $dateOfBirth; ?>">
                                            </div>

                                            <div class="d-grid col-2">
                                                <label class="form-label">Update DOB<span class="error_msg">*</span></label>
                                                <input type="date" class="form-control" name="dateofbirth" placeholder="Date Of Joining" value="<?php echo date("d-m-Y", strtotime($dateOfBirth)); ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Phone<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="phone" placeholder="Mobile" value=" <?php echo $phone; ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Mobile<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value=" <?php echo $mobile; ?>">
                                            </div>

                                            <div class="d-grid col-6">
                                                <label class="form-label">Primary Email <span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="primary_email" placeholder="Email Id" value=" <?php echo $primaryEmail; ?>">
                                            </div>

                                            <div class="d-grid col-6">
                                                <label class="form-label">Secondary Email <span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="Secondary_email" placeholder="Email Id" value=" <?php echo $secondaryEmail; ?>">
                                            </div>


                                            <div class="row mt-3">
                                                <div class="col-md-6  ">
                                                    <h6 class="my-3  ">Current Address</h6>
                                                    <br>
                                                    <div class="row">
                                                        <!-- Current Address Fields -->
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Property No <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_property_no" placeholder="Property No" value=" <?php echo $curPropertyNum; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Street Name <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_street_name" placeholder="Street Name" value=" <?php echo $curStreetName; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">City <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_city" placeholder="City" value=" <?php echo $curCity; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">State <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_state" placeholder="State" value=" <?php echo $curState; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Postcode <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_postcode" placeholder="Postcode" value=" <?php echo $curPostcode; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Country <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_country" placeholder="Country" value=" <?php echo $currentCountry; ?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h6 class="my-3 text-cenetr mx-auto">Permanent Address</h6>
                                                    <div class="row">
                                                        <!-- Permanent Address Fields -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" id="sameAsCurrent" onchange="toggleAddress()">
                                                            <label class="form-check-label" for="sameAsCurrent">
                                                                Same as Current Address
                                                            </label>
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Property No <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_property_no" placeholder="Property No" value=" <?php echo $permanentPropertyNo; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Street Name <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_street_name" placeholder="Street Name" value=" <?php echo $permanentStreetName; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">City <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_city" placeholder="City" value=" <?php echo $permanentCity; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">State <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_state" placeholder="State" value=" <?php echo $permanentState; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Postcode <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_postcode" placeholder="Postcode" value=" <?php echo $permanentPostcode; ?>">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Country <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_country" placeholder="Country" value=" <?php echo $permanentCountry; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>
                                            <h5>Professional Details</h5>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Highest Qualification<span class="error_msg">*</span></label>
                                                <select class="form-select" name="highest_qualification">
                                                    <option value="<?php echo $highestQualification; ?>"><?php echo $highestQualification; ?></option>
                                                    <option value="Phd">Phd</option>
                                                    <option value="Mtech">Mtech</option>
                                                    <option value="MCA">MCA</option>
                                                    <option value="MBA">MBA</option>
                                                    <option value="Btech">Btech</option>
                                                    <option value="BCA">BCA</option>
                                                    <option value="BBA">BBA</option>
                                                    <option value="BSC">BSC</option>
                                                    <option value="BA">BA</option>
                                                    <option value="12th_Pass">12th Pass</option>
                                                    <option value="10th_Pass">10th Pass</option>
                                                    <option value="other">other</option>
                                                </select>
                                            </div>


                                            <div class="d-grid col-3">
                                                <label class="form-label">Employment Status<span class="error_msg">*</span></label>
                                                <select class="form-select" name="employment_status" id="employment_status">
                                                    <option value="<?php echo $employmentStatus; ?>"><?php echo $employmentStatus; ?></option>
                                                    <option value="Fresher">Fresher</option>
                                                    <option value="Working">Working</option>
                                                    <option value="Service Notice">Service Notice</option>
                                                    <option value="Not Working">Not Working</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Relevant Work Experiencee<span class="error_msg">*</span></label>
                                                <select class="form-select" name="relevant_experience" required>
                                                    <option value="<?php echo $relevantWorkExperience; ?>"><?php echo $relevantWorkExperience; ?></option>
                                                    <option value="Fresher">Fresher</option>
                                                    <option value="Below 6 months">
                                                        < .5 Year</option>
                                                    <option value="Betwwn 6 to 12 months">.5 - 1 Year</option>
                                                    <option value="1 to 2 Years">1 - 2 Years</option>
                                                    <option value="2 to 3 Years">2 - 3 Years</option>
                                                    <option value="3 to 4 Years">3 - 4 Years</option>
                                                    <option value="4 to 5 Years">4 - 5 Years</option>
                                                    <option value="5+ Years">5+ Years</option>
                                                </select>
                                            </div>


                                            <!-- Interview Status -->
                                            <div class="d-grid col-3">
                                                <label class="form-label">Overall Work Experience<span class="error_msg">*</span></label>
                                                <select class="form-select" name="overall_experience">
                                                    <option value="<?php echo $overallWorkExperience; ?>"><?php echo $overallWorkExperience; ?></option>

                                                    <option value="Fresher">Fresher</option>
                                                    <option value="Below 6 months">
                                                        < .5 Year</option>
                                                    <option value="Betwwn 6 to 12 months">.5 - 1 Year</option>
                                                    <option value="1 to 2 Years">1 - 2 Years</option>
                                                    <option value="2 to 3 Years">2 - 3 Years</option>
                                                    <option value="3 to 4 Years">3 - 4 Years</option>
                                                    <option value="4 to 5 Years">4 - 5 Years</option>
                                                    <option value="5+ Years">5+ Years</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label">Current Salary<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="current_salary" placeholder="per month" value=" <?php echo $currentSalary; ?>">
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label">Expected Salary<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="expected_salary" placeholder="per month" value=" <?php echo $expectedSalary; ?>">
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label">Last Working Location<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="last_working_location" placeholder="location" value=" <?php echo $lastWorkingLocation; ?>">
                                            </div>
                                            <br>
                                            <hr>

                                            <h5>Interview Details</h5>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Set Interview Date<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control"   placeholder="Mobile" value=" <?php echo $interviewDate; ?>">
                                            </div>
                                            <div class="d-grid col-3">
                                                <label class="form-label">Update Interview Date<span class="error_msg">*</span></label>
                                                <input type="date" class="form-control" name="interview_date" placeholder="Mobile" value="<?php echo date("d-m-Y", strtotime($interviewDate)); ?>" >
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Set Interview Time<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" placeholder="Set Interview Time" value=" <?php echo $interviewTime; ?>">
                                            </div>
                                            <div class="d-grid col-3">
                                                <label class="form-label">Update Interview Time<span class="error_msg">*</span></label>
                                                <input type="time" class="form-control" name="interview_time" placeholder="Set Interview Time" value=" <?php echo $interviewTime; ?>">
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label">Applied Job Position<span class="error_msg">*</span></label>
                                                <select class="form-select" name="job_applied_for">
                                                    <option value="<?php echo $appliedJobPosition; ?>"><?php echo $appliedJobPosition; ?></option>
                                                    <!-- <option value="Chief Executive Officer (CEO)">Chief Executive Officer (CEO)</option>
                                                    <option value="Chief Operations Officer (COO)">Chief Operations Officer (COO)</option>
                                                    <option value="Chief Financial Officer (CFO)">Chief Financial Officer (CFO)</option>
                                                    <option value="Chief Marketing Officer (CMO)">Chief Marketing Officer (CMO)</option>
                                                    <option value="Chief Technology Officer (CTO)">Chief Technology Officer (CTO)</option>
                                                    <option value="Operations Manager">Operations Manager</option>
                                                    <option value="Sales Manager">Sales Manager</option>
                                                    <option value="Customer Service Manager">Customer Service Manager</option> -->
                                                    <option value="Digital Marketing Manager">Digital Marketing Manager</option>
                                                    <option value="Lead Generation Manager">Lead Generation Manager</option>
                                                    <!-- <option value="Quality Assurance Manager">Quality Assurance Manager</option>
                                                    <option value="Human Resources Manager">Human Resources Manager</option>
                                                    <option value="Training and Development Manager">Training and Development Manager</option>
                                                    <option value="Finance Manager">Finance Manager</option>
                                                    <option value="IT Manager">IT Manager</option>
                                                    <option value="Client Relationship Manager">Client Relationship Manager</option> -->
                                                    <option value="Team Leader">Team Leader</option>
                                                    <option value="Sales Executive">Sales Executive</option>
                                                    <!-- <option value="Customer Service Representative">Customer Service Representative</option>
                                                    <option value="Technical Support Representative">Technical Support Representative</option>
                                                    <option value="Chat Support Agent">Chat Support Agent</option>
                                                    <option value="Data Entry Operator">Data Entry Operator</option> -->
                                                    <option value="Lead Generation Specialist">Lead Generation Specialist</option>
                                                    <!-- <option value="Quality Assurance Analyst">Quality Assurance Analyst</option>
                                                    <option value="Training Coordinator">Training Coordinator</option>
                                                    <option value="Finance Analyst">Finance Analyst</option>
                                                    <option value="IT Support Specialist">IT Support Specialist</option> -->
                                                    <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                                                    <option value="Content Writer">Content Writer</option>
                                                    <option value="SEO Specialist">SEO Specialist</option>
                                                    <option value="PPC Specialist">PPC Specialist</option>
                                                    <option value="Social Media Manager">Social Media Manager</option>
                                                    <option value="Graphic Designer">Graphic Designer</option>
                                                    <option value="Web Developer">Web Developer</option>
                                                    <!-- <option value="Administrative Assistant">Administrative Assistant</option>
                                                    <option value="Recruitment Specialist">Recruitment Specialist</option>
                                                    <option value="Facilities Manager">Facilities Manager</option>
                                                    <option value="Legal Advisor">Legal Advisor</option>
                                                    <option value="Compliance Officer">Compliance Officer</option>
                                                    <option value="Business Analyst">Business Analyst</option> -->
                                                </select>
                                            </div> 

                                            <div class="d-grid col-4">
                                                <label class="form-label">Interview Status<span class="error_msg">*</span></label>
                                                <select class="form-select" name="interview_status"> 
                                                    <option value="<?php echo $interview_status; ?>"><?php echo $interview_status; ?></option>
                                                    <option value="Screening">Screening</option> 
                                                    <option value="shortlist">Shortlist</option>
                                                    <option value="interview_scheduled">Interview Sceduled</option> 
                                                </select>
                                            </div>


                                            <div class="d-grid col-8">
                                                <label class="form-label">Comment If Any<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="comment" placeholder="Your Comment" value=" <?php echo $comment; ?>">
                                            </div> 
                                        </div>


                                        <div class="col-5 text-center mx-auto py-2" style="margin-top: 20px;">
                                            <div class="row">
                                                <div class="d-grid col-12">
                                                    <button type="submit" class="btn btn-primary">Submit Details</button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
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
    <script>
        function toggleAddress() {
            // Get current address values
            var currentPropertyNo = document.querySelector('input[name="current_property_no"]').value;
            var currentStreetName = document.querySelector('input[name="current_street_name"]').value;
            var currentCity = document.querySelector('input[name="current_city"]').value;
            var currentState = document.querySelector('input[name="current_state"]').value;
            var currentPostcode = document.querySelector('input[name="current_postcode"]').value;
            var currentCountry = document.querySelector('input[name="current_country"]').value;

            // Get permanent address values
            var permanentPropertyNo = document.querySelector('input[name="permanent_property_no"]');
            var permanentStreetName = document.querySelector('input[name="permanent_street_name"]');
            var permanentCity = document.querySelector('input[name="permanent_city"]');
            var permanentState = document.querySelector('input[name="permanent_state"]');
            var permanentPostcode = document.querySelector('input[name="permanent_postcode"]');
            var permanentCountry = document.querySelector('input[name="permanent_country"]');

            // Get the radio button
            var sameAsCurrentCheckbox = document.getElementById('sameAsCurrent');

            // Check if the radio button is checked
            if (sameAsCurrentCheckbox.checked) {
                // Set permanent address values
                permanentPropertyNo.value = currentPropertyNo;
                permanentStreetName.value = currentStreetName;
                permanentCity.value = currentCity;
                permanentState.value = currentState;
                permanentPostcode.value = currentPostcode;
                permanentCountry.value = currentCountry;
            } else {
                // Clear permanent address values
                permanentPropertyNo.value = '';
                permanentStreetName.value = '';
                permanentCity.value = '';
                permanentState.value = '';
                permanentPostcode.value = '';
                permanentCountry.value = '';
            }
        }
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


    <script>
        $(document).ready(function() {
            $("#add-customer").click(function(e) {
                e.preventDefault(); // Prevent the default behavior
                // Create a new customer section
                var newCustomerSection = `
                  <div class="customer-section">
                      <!-- Add your customer input fields here -->
                      <div class="row g-3">
                        <h6 class="mb-0 text-uppercase ">Authorized Person Details</h6>
                        <div class="closeBTNMain">
                          <div class="remove-customer closeBTN">X</div>
                          </div>
                        
                      <hr>
                      <div class="d-grid col-3">
                        <label class="form-label">Ttile <span class="error_msg">*</span></label>
                        <select class="form-select" name=""  required>
                          <option selected disabled value="">Select Tile</option>
                          <option>Mr.</option>
                        </select>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">First Name <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="First Name" required>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">Middle Name </label>
                      <input type="text" class="form-control" name="" placeholder="Middle Name" required>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">Last Name <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="Last Name" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Designation <span class="error_msg">*</span></label>
                        <select class="form-select" name=""  required>
                            <option selected disabled value="">Select Designation</option>
                            <option>Designation1</option>
                            <option>Designation2</option>
                          </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Gender <span class="error_msg">*</span></label>
                        <select class="form-select" name=""  required>
                            <option selected disabled value="">Select Gender</option>
                            <option>M</option>
                            <option>F</option>
                          </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Date of birth <span class="error_msg">*</span></label>
                        <input type="date" name="" class="form-control">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Primary Email <span class="error_msg">*</span></label>
                      <input type="email" class="form-control" name="" placeholder="Email Id" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Secondary Email </label>
                      <input type="email" class="form-control" name="" placeholder="Secondary Email" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Phone </label>
                      <input type="number" class="form-control" name="" placeholder="Phone" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Mobile Number <span class="error_msg">*</span></label>
                      <input type="number" class="form-control" name="" placeholder="Mobile Number" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Alt Contact Number <span class="error_msg">*</span></label>
                      <input type="number" class="form-control" name="" placeholder="Alt Contact Number" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Property No <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="Property No" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Street Name <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="Street Name" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">City <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="City" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">State <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="State" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Postcode <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="Postcode" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Country <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="" placeholder="Country" required>
                      </div>
                    </div>
                      </div>
                  </div>
              `;
                // Append the new section to the container
                $("#customer-container").append(newCustomerSection);

                // Add a click event to remove the customer section
                $(".remove-customer").click(function() {
                    $(this).closest(".customer-section").remove();
                });
            });
        });
    </script>

</body>

</html>
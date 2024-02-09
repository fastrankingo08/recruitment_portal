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
    $selectQuery = "SELECT * FROM reqruitment_process WHERE id = $userId";
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
                    <div class="breadcrumb-title pe-3">Update</div>

                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="dashboard.html"><ion-icon name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active text-dark" style="font-weight: 500;" aria-current="page">Update User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <h6 class="mb-0 text-uppercase" style="font-weight: 500;">User Details</h6>
                                    <hr>
                                    <form action="update-user-action.php?id=<?php echo $userId; ?>" method="post">
                                        <div class="row g-3" id="customer-container">

                                            <div class="d-grid col-2">
                                                <label class="form-label custom-label">Title <span class="error_msg">*</span></label>
                                                <select class="form-select" name="title">
                                                    <option value="<?php echo $title; ?>"><?php echo $title; ?></option>
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Ms</option>
                                                    <option>Dr</option>
                                                    <option>Prof</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">First Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name" value=" <?php echo $firstname; ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label"> Middle Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="middlename" placeholder="Middle  Name" value=" <?php echo $middlename; ?>">
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label custom-label">Last Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value=" <?php echo $lastname; ?>">
                                            </div>

                                            <style>
                                                /* Style for the submenu */
                                                .submenu {
                                                    display: none;
                                                }

                                                /* Show the submenu when hovering over the "Female" option */
                                                .form-select:hover .submenu {
                                                    display: block;
                                                }
                                            </style>

                                            <div class="d-grid col-2">
                                                <label class="form-label custom-label">Select Gender <span class="error_msg">*</span></label>
                                                <select class="form-select" name="gender">
                                                    <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <div class="submenu">
                                                        <option value="Female-Option-1">Option 1</option>
                                                        <option value="Female-Option-2">Option 2</option>
                                                    </div>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>


                                            <div class="d-grid col-5">
                                                <label class="form-label custom-label">Date Of Birth<span class="error_msg">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="DOB" value="<?php echo date("d-m-Y", strtotime($dateofbirth)); ?>" readonly>
                                                    <input type="date" class="form-control d-none" name="dateofbirth" placeholder="DOB">
                                                    <button type="button" class="btn btn-secondary" onclick="toggleDateField('dateofbirth')">Update Date</button>
                                                </div>
                                            </div>


                                            <div class="d-grid col-5">
                                                <label class="form-label custom-label">Date Of Joining<span class="error_msg">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Date Of Joining" value="<?php echo date("d-m-Y", strtotime($dateofjoining)); ?>" readonly>
                                                    <input type="date" class="form-control d-none" name="dateofjoining" placeholder="Date Of Joining">
                                                    <button type="button" class="btn btn-secondary" onclick="toggleDateField('dateofjoining')">Update Date</button>

                                                </div>
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label custom-label">Email ID<span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="emailid" placeholder="Email Id" value=" <?php echo $email; ?>">
                                            </div>

                                            <div class="d-grid col-2">
                                                <label class="form-label custom-label">User Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="username" placeholder="User Name" value=" <?php echo $username; ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Password<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="password" placeholder="Password" value=" <?php echo $password; ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Confirm Password<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password" value=" <?php echo $confirmpassword; ?>">
                                            </div>

                                            <div class="d-grid col-2 ">
                                                <label class="form-label custom-label">User Type<span class="error_msg">*</span></label>
                                                <select class="form-select" name="type">
                                                    <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                                    <option value="admin">Super Admin</option>
                                                    <option value="admin">Administrator</option>
                                                    <option value="user">User</option>
                                                    <option value="restricteduser">Restricted User</option> 
                                                </select>
                                            </div>



                                            <div class="d-grid col-2">
                                                <label class="form-label custom-label">Mobile<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value=" <?php echo $mobile; ?>">
                                            </div>






                                            <script>
                                                function toggleDateField(fieldName) {
                                                    var dateDisplay = document.querySelector('.input-group input[name="' + fieldName + '"]');
                                                    var datePicker = document.querySelector('.input-group input[name="' + fieldName + '_update"]');

                                                    if (dateDisplay.classList.contains('d-none')) {
                                                        dateDisplay.classList.remove('d-none');
                                                        datePicker.classList.add('d-none');
                                                    } else {
                                                        dateDisplay.classList.add('d-none');
                                                        datePicker.classList.remove('d-none');
                                                    }
                                                }
                                            </script>


                                            <div class="d-grid col-2">
                                                <label class="form-label custom-label">Reporting to<span class="error_msg">*</span></label>
                                                <!-- <input type="text" class="form-control" name="reportingto" placeholder="Reporting to"  > -->
                                                <select class="form-select" name="reportingto">
                                                    <option value="<?php echo $reportingto; ?>"><?php echo $reportingto; ?></option> 
                                                    <option value="HR Director">HR Director</option>
                                                    <option value="HR Manager">HR Manager</option>
                                                    <option value="Team Leader">Team Leader</option>
                                                    <option value="Supervisor">Super Visor</option>
                                                    <option value="Sr. Recruiter">Sr. Recruiter</option>
                                                    <option value="Recruiter">Recruiter</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Employee ID<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="employee_id" placeholder="Employee ID" value=" <?php echo $employee_id; ?>">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Status<span class="error_msg">*</span></label>
                                                <select class="form-select" name="status">
                                                    <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>

                                            <!-- <div class="d-grid col-3">
                                                <label class="form-label">Created Date<span class="error_msg">*</span></label>
                                                <input type="date" class="form-control" name="created_date" placeholder="Craeted Date"  >
                                            </div> -->

                                            <!-- <div class="d-grid col-4">
                                                <label class="form-label custom-label">User Type<span class="error_msg">*</span></label>

                                                <select class="form-select" name="user_type">
                                                    <option value="<?php echo $user_type; ?>"><?php echo $user_type; ?></option>
                                                    <option value="fresher">Fresher</option>
                                                    <option value="experienced">Experienced</option>
                                                </select>
                                            </div> -->


                                            <div class="d-grid col-4">
                                                <label class="form-label custom-label">Deapartment<span class="error_msg">*</span></label>

                                                <select class="form-select" name="department">
                                                    <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                                                    <option value="Human Resource">Human Resource</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-4">
                                                <label class="form-label custom-label">Role<span class="error_msg">*</span></label>
                                                <!-- <input type="text" class="form-control" name="role" placeholder="Role"> -->

                                                <select class="form-select" name="role">
                                                    <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                                                    <option value="HR Director">HR Director</option>
                                                    <option value="HR Manager">HR Manager</option>
                                                    <option value="Team Leader">Team Leader</option>
                                                    <option value="Supervisor">Super Visor</option>
                                                    <option value="Sr. Recruiter">Sr. Recruiter</option>
                                                    <option value="Recruiter">Recruiter</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-12" style="margin-top: 20px;">
                                            <div class="row  ">
                                                <div class="d-grid col-6 text-center mx-auto">
                                                    <button type="submit" style="background-color: #E9ECEF; color: #212529; padding: 10px 20px; border: none; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); font-weight: 500; transition: box-shadow 0.3s ease, color 0.3s ease, font-weight 0.3s ease;" onmouseover="this.style.boxShadow='0 0 20px rgba(0, 0, 0, 0.5)'; this.style.color='#212529'; this.style.fontWeight='500';" onmouseout="this.style.boxShadow='0 0 10px rgba(0, 0, 0, 0.1)'; this.style.color='#343A40'; this.style.fontWeight='400';">
                                                        UPDATE USER
                                                    </button> 
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
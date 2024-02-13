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
        } else {
            echo "User not found!";
        }

        // Free result set
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
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
        <div class="page-content-wrapper">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <div class="card-body bg-white">
                                <div class="card-title" style="font-weight: 500;">
                                    <h5>Round Details</h5>
                                </div>

                                <!-- Round 1 Form -->
                                <form action="schedule-interview-action.php" method="post">
                                    <div class="row m-3 p-3 my-3 radius-10 schedule-intrv-box">
                                         <h4 class="text-center mx-auto text-dark" style="font-weight: 500;">ROUND 1</h4>
                                        <input type="hidden" name="candidate_id" id="" value="<?php echo $userId; ?>" >
                                        
                                        <hr>
                                        
                                        <div class="col-md-2  ">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 1 Date:</h6>
                                                <input type="date" class="form-control" id="round1Date" name="round1_date" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 1 Time:</h6>
                                                <input type="time" class="form-control" id="round1Date" name="round1_time" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Interviewer:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round1_interviewer" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Meeting Link:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round1_meetinglink" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-2">
                                            <div class="mb-3 mx-auto text-center">
                                                <h6 class="text-dark ">SCHEDULE</h6>
                                                <button class="  radius-10 px-5 py-1 button btn-success text-black" style="font-size: 16px; font-weight:500;">Schedule</button>
                                            </div>
                                        </div>
                                    </div>


                                </form>

                                 <!-- Round 2 Form -->
                                <form action="schedule-interview-action.php" method="post">
                                    <div class="row m-3 p-3 my-3 radius-10 schedule-intrv-box">

                                        <h4 class="text-center mx-auto text-dark" style="font-weight: 500;">ROUND 2</h4>
                                        <hr>
                                        <input type="hidden" name="candidate_id" id="" value="<?php echo $userId; ?>" >

                                        <div class="col-md-2  ">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 2 Date:</h6>
                                                <input type="date" class="form-control" id="round1Date" name="round2_date" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 2 Time:</h6>
                                                <input type="time" class="form-control" id="round1Date" name="round2_time" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Interviewer:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round2_interviewer" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Meeting Link:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round2_meetinglink" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3 mx-auto text-center">
                                                <h6 class="text-dark ">SCHEDULE</h6>
                                                <button class="  radius-10 px-5 py-1 button btn-success text-black" style="font-size: 16px; font-weight:500;">Schedule</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Round 3 Form -->
                                <form action="schedule-interview-action.php" method="post">
                                    <div class="row m-3 p-3 my-3 radius-10 schedule-intrv-box">

                                        <h4 class="text-center mx-auto text-dark" style="font-weight: 500;">ROUND 3</h4>
                                        <hr>
                                        <input type="hidden" name="candidate_id" id="" value="<?php echo $userId; ?>" >

                                        <div class="col-md-2  ">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 3 Date:</h6>
                                                <input type="date" class="form-control" id="round1Date" name="round3_date" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 3 Time:</h6>
                                                <input type="time" class="form-control" id="round1Date" name="round3_time" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Interviewer:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round3_interviewer" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Meeting Link:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round3_meetinglink" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3 mx-auto text-center">
                                                <h6 class="text-dark ">SCHEDULE</h6>
                                                <button class="radius-10 px-5 py-1 button btn-success text-black" style="font-size: 16px; font-weight:500;">Schedule</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!-- Round 4 Form -->
                                <form action="schedule-interview-action.php" method="post">
                                    <div class="row m-3 p-3 my-3 radius-10 schedule-intrv-box">

                                        <h4 class="text-center mx-auto text-dark" style="font-weight: 500;">ROUND 4</h4>
                                        <hr>
                                        <input type="hidden" name="candidate_id" id="" value="<?php echo $userId; ?>" >

                                        <div class="col-md-2  ">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 4 Date:</h6>
                                                <input type="date" class="form-control" id="round1Date" name="round4_date" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 4 Time:</h6>
                                                <input type="time" class="form-control" id="round1Date" name="round4_time" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Interviewer:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round4_interviewer" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Meeting Link:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round4_meetinglink" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3 mx-auto text-center">
                                                <h6 class="text-dark ">SCHEDULE</h6>
                                                <button class="  radius-10 px-5 py-1 button btn-success" style="font-size: 16px; font-weight:500;">Schedule</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                 <!-- Round 5 Form -->
                                <form action="schedule-interview-action.php" method="post">
                                    <div class="row m-3 p-3 my-3 radius-10 schedule-intrv-box">

                                        <h4 class="text-center mx-auto text-dark" style="font-weight: 500;">ROUND 5</h4>
                                        <hr>
                                        <input type="hidden" name="candidate_id" id="" value="<?php echo $userId; ?>" >

                                        <div class="col-md-2  ">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 5 Date:</h6>
                                                <input type="date" class="form-control" id="round1Date" name="round5_date" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Round 5 Time:</h6>
                                                <input type="time" class="form-control" id="round1Date" name="round5_time" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Interviewer:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round5_interviewer" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <h6 class="text-dark mx-auto">Meeting Link:</h6>
                                                <input type="text" class="form-control" id="round1Date" name="round5_meeting_link" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="mb-3 mx-auto text-center">
                                                <h6 class="text-dark ">SCHEDULE</h6>
                                                <button class="  radius-10 px-5 py-1 button btn-success"  style="font-size: 16px; font-weight:500;">Schedule</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- End Round Form -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page content-->
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
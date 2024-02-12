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
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <h6 class="mb-0 text-uppercase" style="font-weight: 500;">User Details</h6>
                                    <hr>
                                    <form action="update-user-action.php?id=<?php echo $userId; ?>" method="post">
                                        <div class="row g-3" id="customer-container">

                                            <div class="d-grid col-3">
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

                                            <div class="d-grid col-3">
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

                                            <div class="d-grid col-3">
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


                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Date Of Birth<span class="error_msg">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="DOB" value="<?php echo date("d-m-Y", strtotime($dateofbirth)); ?>" readonly>
                                                    <input type="date" class="form-control d-none" name="dateofbirth" placeholder="DOB">
                                                    <button type="button" class="btn btn-secondary" onclick="toggleDateField('dateofbirth')">Update Date</button>
                                                </div>
                                            </div>


                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Date Of Joining<span class="error_msg">*</span></label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Date Of Joining" value="<?php echo date("d-m-Y", strtotime($dateofjoining)); ?>" readonly>
                                                    <input type="date" class="form-control d-none" name="dateofjoining" placeholder="Date Of Joining">
                                                    <button type="button" class="btn btn-secondary" onclick="toggleDateField('dateofjoining')">Update Date</button>

                                                </div>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Email ID<span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="emailid" placeholder="Email Id" value=" <?php echo $email; ?>">
                                            </div>

                                            <div class="d-grid col-3">
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

                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">User Type<span class="error_msg">*</span></label>
                                                <select class="form-select" name="type">
                                                    <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                                                    <option value="admin">Super Admin</option>
                                                    <option value="admin">Administrator</option>
                                                    <option value="user">User</option>
                                                    <option value="restricteduser">Restricted User</option> 
                                                </select>
                                            </div>
 
                                            <div class="d-grid col-3">
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


                                            <div class="d-grid col-3">
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


                                            <div class="d-grid col-3">
                                                <label class="form-label custom-label">Deapartment<span class="error_msg">*</span></label>

                                                <select class="form-select" name="department">
                                                    <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
                                                    <option value="Human Resource">Human Resource</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
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
                                           <button type="submit" class="btn btn-success"> UPDATE USER  </button> 
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
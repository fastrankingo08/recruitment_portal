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
                    <div class="breadcrumb-title pe-3">New User</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="dashboard.html"><ion-icon name="home-outline"></ion-icon></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create New User</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">

                    </div>
                </div>
                <!--end breadcrumb-->


                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <h6 class="mb-0 text-uppercase">User Details</h6>
                                    <hr>
                                    <form action="user-action.php" method="post">
                                        <div class="row g-3" id="customer-container">
                                            <div class="d-grid col-3">
                                                <label class="form-label">Title <span class="error_msg">*</span></label>
                                                <select class="form-select" name="title">
                                                    <option>Mr</option>
                                                    <option>Mrs</option>
                                                    <option>Ms</option>
                                                    <option>Dr</option>
                                                    <option>Prof</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">First Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label"> Middle Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="middlename" placeholder="Middle  Name">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Last Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Select Gender <span class="error_msg">*</span></label>
                                                <select class="form-select" name="gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Date Of Birth<span class="error_msg">*</span></label>
                                                <input type="date" class="form-control" name="dateofbirth" placeholder="DOB">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Date Of Joining<span class="error_msg">*</span></label>
                                                <input type="date" class="form-control" name="dateofjoining" placeholder="Date Of Joining">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Email ID<span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="emailid" placeholder="Email Id">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Mobile<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Mobile">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">User Name<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="username" placeholder="User Name">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Password<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="password" placeholder="Password">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Confirm Password<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm Password">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">User Type<span class="error_msg">*</span></label>
                                                <select class="form-select" name="type">
                                                    <option value="admin">Super Admin</option>
                                                    <option value="admin">Administrator</option>
                                                    <option value="user">User</option>
                                                    <option value="restricteduser">Restricted User</option>
                                                    
                                                </select>
                                            </div>
 
                                            <div class="d-grid col-3">
                                                <label class="form-label">Reporting to<span class="error_msg">*</span></label>
                                                <!-- <input type="text" class="form-control" name="reportingto" placeholder="Reporting to"  > -->
                                                <select class="form-select" name="reportingto">
                                                    <option value="HR Director">HR Director</option>
                                                    <option value="HR Manager">HR Manager</option>
                                                    <option value="Team Leader">Team Leader</option>
                                                    <option value="Supervisor">Super Visor</option>
                                                    <option value="Sr. Recruiter">Sr. Recruiter</option>
                                                    <option value="Recruiter">Recruiter</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Employee ID<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="employee_id" placeholder="Employee ID">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Status<span class="error_msg">*</span></label>
                                                <select class="form-select" name="status">
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
 

                                            <div class="d-grid col-3">
                                                <label class="form-label">User Type<span class="error_msg">*</span></label>

                                                <select class="form-select" name="user_type">
                                                    <option value="fresher">Fresher</option>
                                                    <option value="experienced">Experienced</option>
                                                </select>
                                            </div>
  

                                            <div class="d-grid col-3">
                                                <label class="form-label">Deapartment<span class="error_msg">*</span></label>

                                                <select class="form-select" name="department">
                                                    <option value="Human Resource">Human Resource</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Role<span class="error_msg">*</span></label>
                                                <!-- <input type="text" class="form-control" name="role" placeholder="Role"> -->

                                                <select class="form-select" name="role">
                                                <option value="HR Director">HR Director</option>
                                                    <option value="HR Manager">HR Manager</option>
                                                    <option value="Team Leader">Team Leader</option>
                                                    <option value="Supervisor">Super Visor</option>
                                                    <option value="Sr. Recruiter">Sr. Recruiter</option>
                                                    <option value="Recruiter">Recruiter</option>
                                                </select>
                                            </div>
                                        </div>
                                          <div class="mt-3">
                                             <button type="submit" class="btn btn-success">Create User</button>
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
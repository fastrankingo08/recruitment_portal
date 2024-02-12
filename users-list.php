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
    <link href="assets/vendor/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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
                    <div class="breadcrumb-title pe-3">All Users</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="dashboard.html">
                                        <ion-icon name="home-outline"></ion-icon>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Users List</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <?php
                $sql = "SELECT * FROM reqruitment_process";
                $send = $conn->query($sql);
                ?>

                <div class="row ">
                    <div class="col-xl-12  ">
                        <div class="card">
                            <div class="card-body">
                                <table class='table p-2' id="datatable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">S.NO</th>
                                            <th>Full Name</th>
                                            <th>User Name</th>
                                            <th>Status</th>
                                            <th>DOJ</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                $s = 1;
                                if ($send->num_rows > 0) {
                                    while ($data = $send->fetch_assoc()) {
                                ?>
                                        <tr class=" ">
                                            <td class="text-center"><?php echo $s; ?></td>
                                            <td><?php echo $data['first_name'] . " " . $data['middle_name'] . " " . $data['last_name']; ?>
                                            </td>
                                            <td><?php echo $data['username']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td><?php echo $data['date_of_joining']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['mobile']; ?></td>
                                            <td><?php echo $data['role']; ?></td>
                                            <td>
                                                <div class="table-btn-wrapper">
                                                  <a href="update-user.php?id=<?php echo $data['id']; ?> " class="table-btn edit">
                                                      <i class="fa-regular fa-pen-to-square"></i> 
                                                  </a>
                                                  <a href="Delete-user.php?id=<?php echo $data['id']; ?> "  class="table-btn delete">
                                                      <i class="fa-solid fa-trash"></i> 
                                                  </a>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <?php $s++; } }
                                ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end page content-->
        </div>
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
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
    <script src="assets/vendor/datatable/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
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
<?php
session_start();   
error_reporting(0);

// Check if the user is not authenticated, redirect them to the login page
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
  header("location: index.php"); // Adjust the login page URL as needed
  exit();
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
                    <div class="col-xl-12 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <h6 class="mb-0 text-uppercase">Candidate Details</h6>
                                    <hr>
                                    <form action="candidate-details-action.php" method="post">
                                        <div class="row g-3" id="customer-container">
                                            <!-- starting -->
                                            <div class="d-grid col-3">
                                                <label class="form-label">Title <span class="error_msg">*</span></label>
                                                <select class="form-select" name="title">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Prof">Prof</option>
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
                                                <input type="date" class="form-control" name="dateofbirth" placeholder="Date Of Joining">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Phone<span class="error_msg">*</span></label>
                                                <input type="tel" class="form-control" name="phone" placeholder="Mobile" pattern="(\+91)?[0-9]{10}" required>
                                                <!-- <input type="tel" class="form-control" name="phone" placeholder="Phone" pattern="(\+91)?[0-9]{10}" required> -->

                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Mobile<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="Mobile" pattern="(\+91)?[0-9]{10}">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Primary Email <span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="primary_email" placeholder="Email Id">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Secondary Email <span class="error_msg">*</span></label>
                                                <input type="email" class="form-control" name="Secondary_email" placeholder="Email Id">
                                            </div>


                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <h5 class="my-3">Current Address</h5>
                                                    <br>
                                                    <div class="row">
                                                        <!-- Current Address Fields -->
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Property No <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_property_no" placeholder="Property No">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Street Name <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_street_name" placeholder="Street Name">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">City <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_city" placeholder="City">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">State <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_state" placeholder="State">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Postcode <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_postcode" placeholder="Postcode">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Country <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="current_country" placeholder="Country">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <h5 class="my-3 text-cenetr mx-auto">Permanent Address</h5>
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
                                                            <input type="text" class="form-control" name="permanent_property_no" placeholder="Property No">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Street Name <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_street_name" placeholder="Street Name">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">City <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_city" placeholder="City">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">State <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_state" placeholder="State">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Postcode <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_postcode" placeholder="Postcode">
                                                        </div>
                                                        <div class="d-grid col-4">
                                                            <label class="form-label">Country <span class="error_msg">*</span></label>
                                                            <input type="text" class="form-control" name="permanent_country" placeholder="Country">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <hr>
                                            <h5>Professional Details</h5>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Highest Qualification<span class="error_msg">*</span></label>
                                                <select class="form-select" name="highest_qualification">
                                                    <option selected disabled value="">Select </option>
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
                                                    <!-- <option selected disabled value="">Select </option> -->
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
                                                    <!-- <option selected disabled value="">Select </option> -->

                                                    <option value="Fresher">Fresher</option>
                                                    <option value="Below 6 months">  < .5 Year</option>
                                                    <option value="Betwwn 6 to 12 months">.5 - 1 Year</option>
                                                    <option value="1 to 2 Years">1 - 2 Years</option>
                                                    <option value="2 to 3 Years">2 - 3 Years</option>
                                                    <option value="3 to 4 Years">3 - 4 Years</option>
                                                    <option value="4 to 5 Years">4 - 5 Years</option>
                                                    <option value="5+ Years">5+ Years</option>
                                                </select>
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Current Salary<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="current_salary" placeholder="per month">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Expected Salary<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="expected_salary" placeholder="per month">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Last Wroking Location<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="last_working_location" placeholder="location">
                                            </div>
                                            <br>
                                            <hr>

                                            <h5>Interview Details</h5>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Interview Date<span class="error_msg">*</span></label>
                                                <input type="date" class="form-control" name="interview_date" placeholder="Mobile">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Interview Time<span class="error_msg">*</span></label>
                                                <input type="time" class="form-control" name="interview_time" placeholder="Set Interview Time">
                                            </div>

                                            <div class="d-grid col-3">
                                                <label class="form-label">Applied Job Position<span class="error_msg">*</span></label>
                                                <select class="form-select" name="job_applied_for">
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
                                            <div class="d-grid col-3">
                                                <label class="form-label">Interview Status<span class="error_msg">*</span></label>
                                                <select class="form-select" name="interview_status"> 
                                                    <option value="Screening">Screening</option> 
                                                    <option value="shortlist">Shortlist</option>
                                                    <option value="inteview_scheduled">Interview Sceduled</option> 
                                                </select>
                                            </div>



                                            <div class="d-grid col-6">
                                                <label class="form-label">Comment If Any<span class="error_msg">*</span></label>
                                                <input type="text" class="form-control" name="comment" placeholder="Your Comment">
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
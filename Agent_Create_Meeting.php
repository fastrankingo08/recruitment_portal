<?php
//fetching email from previous page
$mailId = $_GET['mail'];
require 'server_con.php';
$userdata = "SELECT * FROM fr_user_details WHERE User_Name = '$mailId' ";
$userquery = mysqli_query($conn, $userdata);
$getuser = mysqli_fetch_assoc($userquery);
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

  <!-- INPUT RESTRICTION PLUGIN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="assets\kbhit.js"></script> -->

  <title>RAR CRM - Create Agent Lead</title>

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
          <h4 class="logo-text">FR-CRM</h4>
        </div>
        <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="Agent_Dashboard.php?mail=<?php echo $mailId; ?>">
            <div class="parent-icon"><i class="fadeIn animated bx bx-home-alt"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>
        </li>


        <li>
          <a href="#">
            <div class="parent-icon"><i class="fadeIn animated bx bx-chart"></i>
            </div>
            <div class="menu-title">Performance</div>
          </a>
        </li>

        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="menu-title">Email Form </div>
          </a>
          <ul>
            <li><a href="Agent_Create_Mail.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Mail Form</a>
            </li>
            <li><a href="Agent_My_Mail.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Mail Form</a>
            </li>

          </ul>
        </li>
        <!-- <li class="menu-label">UI Elements</li> -->
        <li>
          <a href="javascript:;" class="has-arrow">
            <div class="parent-icon"><i class="fadeIn animated bx bx-recycle"></i>
            </div>
            <div class="menu-title">Follow Up Management</div>
          </a>
          <ul>
            <li> <a href="Agent_Create_Followup.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Follow Up</a>
            </li>
            <li> <a href="Agent_View_Followup.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Follow Up</a>
            </li>
          </ul>
        </li>

        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="fadeIn animated bx bx-calendar-plus"></i>
            </div>
            <div class="menu-title">Meeting Management</div>
          </a>
          <ul>
            <li> <a href="Agent_Create_Meeting.php?mail=<?php echo $mailId ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Meeting</a>
            </li>
            <li> <a href="Agent_View_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Meetings</a>
            </li>

          </ul>
        </li>

        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="fadeIn animated bx bx-calendar-plus"></i>
            </div>
            <div class="menu-title">Interview (ABC)</div>
          </a>
          <ul>
            <li> <a href="interview-form.php"><ion-icon name="ellipse-outline"></ion-icon>NewCandidate</a>
            </li>
            <li> <a href="Agent_View_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>In Process</a>
            </li>
            <li> <a href="Agent_View_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Crate Interview</a>
            </li> 
          </ul>
        </li>

        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="fadeIn animated bx bx-calendar-plus"></i>
            </div>
            <div class="menu-title">Candidate Follow Up</div>
          </a>
          <ul>
            <li> <a href="Agent_Create_Meeting.php?mail=<?php echo $mailId ?>"><ion-icon name="ellipse-outline"></ion-icon>NewCandidate</a>
            </li>
            <li> <a href="Agent_View_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>In Process</a>
            </li>
            <li> <a href="Agent_View_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Crate Interview</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="has-arrow" href="javascript:;">
            <div class="parent-icon"><i class="fadeIn animated bx bx-bell-plus"></i>
            </div>
            <div class="menu-title">Notifications</div>
          </a>
          <ul>
            <li> <a href="Agent_Today_Followup.php?mail=<?php echo $mailId ?>"><ion-icon name="ellipse-outline"></ion-icon>Today's Followup</a>
            </li>
            <li> <a href="Agent_Today_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Today's Meeting</a>
            </li>
          </ul>
        </li>

        <!-- <li class="menu-label">Forms & Tables</li> -->
        <li>
          <a href="meetings-calendar.php">
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
        <!-- <form class="searchbar">
              <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
              <input class="form-control" type="text" placeholder="Search for anything">
              <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div>
           </form> -->
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
                        <h6 class="mb-0 dropdown-user-name"><?php echo $getuser['First_Name'] . "&nbsp;" . $getuser['Last_Name']; ?></h6>
                        <small class="mb-0 dropdown-user-designation text-secondary"><?php echo $getuser['Designation']; ?></small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="pages-user-profile.php">
                    <div class="d-flex align-items-center">
                      <div class=""><ion-icon name="person-outline"></ion-icon></div>
                      <div class="ms-3"><span><?php echo $getuser['User_Type']; ?></span></div>
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
                <li class="breadcrumb-item"><a href="dashboard.php"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create Meeting</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">

          </div>
        </div>
        <!--end breadcrumb-->


        <div class="row">
          <div class="col-xl-8 mx-auto">

            <div class="card">
              <div class="card-body">
                <div class="border p-3 rounded">
                  <h6 class="mb-0 text-uppercase">Candidate Details</h6>
                  <hr>
                  <!-- Form Start -->
                  <form class="" action="Agent_Create_Meeting_Action.php" method="post" onsubmit="return validateForm()">
                    <div class="row g-3" id="customer-container">
                      <div class="d-grid col-4">
                        <label class="form-label">Candidate Name <span class="error_msg">*</span></label>
                        <input type="text" class="form-control" name="businessname" placeholder="Business Name" id="bn" required>
                      </div>

                      <div class="d-grid col-4">
                        <label class="form-label">Category </label>
                        <select class="form-select" name="category">
                          <option selected disabled value="">Select Category</option>
                          <option value="Bakery">Bakery</option>
                          <option value="Electricians">Electricians</option>
                          <option value="Builders">Builders</option>
                          <option value="Dentists">Dentists</option>
                          <option value="Taxi Servie">Taxi Servie</option>
                          <option value="Cafe">Cafe</option>
                          <option value="Plumbing & Heating">Plumbing & Heating</option>
                          <option value="Restaurant">Restaurant</option>
                          <option value="Doors and Widnows">Doors and Widnows</option>
                          <option value="Plumbing and Heating">Plumbing and Heating</option>
                          <option value="Repair Service">Repair Service</option>
                          <option value="Travellers">Travellers</option>
                          <option value="Holiday Accommodation and Parks">Holiday Accommodation and Parks</option>
                          <option value="Event Management">Event Management</option>
                          <option value="English Restaurants">English Restaurants</option>
                          <option value="Cafes and Coffee Shops">Cafes and Coffee Shops</option>
                          <option value="Locksmiths">Locksmiths</option>
                          <option value="Self Catering Holiday Accommodation">Self Catering Holiday Accommodation</option>
                          <option value="Taxis and Private Hire Vehicles">Taxis and Private Hire Vehicles</option>
                          <option value="Florists">Florists</option>
                          <option value="Chauffeur Services">Chauffeur Services</option>
                          <option value="Bakeries">Bakeries</option>
                          <option value="Chauffeur Driven Car Hire">Chauffeur Driven Car Hire</option>
                          <option value="Granite Suppliers">Granite Suppliers</option>
                          <option value="Travel Agents & Services">Travel Agents & Services</option>
                          <option value="Headstones">Headstones</option>
                          <option value="Plumbers">Plumbers</option>
                          <option value="Commercial Flooring">Commercial Flooring</option>
                          <option value="Kitchen Tiling">Kitchen Tiling</option>
                          <option value="Tilers">Tilers</option>
                          <option value="Coffee Machines and Supplies">Coffee Machines and Supplies</option>
                          <option value="Monumental Masons and Memorials">Monumental Masons and Memorials</option>
                          <option value="Italian Restaurants">Italian Restaurants</option>
                          <option value="Fireplaces">Fireplaces</option>
                          <option value="Indian Restaurants">Indian Restaurants</option>
                          <option value="Pub Restaurants">Pub Restaurants</option>
                          <option value="Floor Sanding and Polishing">Floor Sanding and Polishing</option>
                          <option value="Fish and Chip Shops and Restaurants">Fish and Chip Shops and Restaurants</option>
                          <option value="Airport Transfers">Airport Transfers</option>
                          <option value="Painters and Decorators">Painters and Decorators</option>
                          <option value="Tile Suppliers">Tile Suppliers</option>
                          <option value="Steakhouse Restaurants">Steakhouse Restaurants</option>
                          <option value="Welders">Welders</option>
                          <option value="Party & Event Planning">Party & Event Planning</option>
                          <option value="Flooring Services">Flooring Services</option>
                          <option value="MiniBus Hire">MiniBus Hire</option>
                          <option value="Chinese Restaurants">Chinese Restaurants</option>
                          <option value="Nepalese Restaurants">Nepalese Restaurants</option>
                          <option value="Coach Hire">Coach Hire</option>
                          <option value="Carpet Shops">Carpet Shops</option>
                          <option value="Gas Fires">Gas Fires</option>
                          <option value="Caribbean Restaurants">Caribbean Restaurants</option>
                          <option value="Thai Restaurants">Thai Restaurants</option>
                          <option value="Handyman Services">Handyman Services</option>
                          <option value="Landscapers">Landscapers</option>
                          <option value="Pizza Delivery and Takeaway">Pizza Delivery and Takeaway</option>
                          <option value="Fishing Lake">Fishing Lake</option>
                          <option value="DJs">DJs</option>
                          <option value="Pubs">Pubs</option>
                          <option value="Dentures">Dentures</option>
                          <option value="Bathroom Design and Installation">Bathroom Design and Installation</option>
                          <option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
                          <option value="Granite Worktops">Granite Worktops</option>
                          <option value="Coach Holidays">Coach Holidays</option>
                          <option value="Holiday Cottages">Holiday Cottages</option>
                          <option value="Laminate Floor Fitters">Laminate Floor Fitters</option>
                          <option value="Caravan Parks">Caravan Parks</option>
                          <option value="Hotels">Hotels</option>
                          <option value="Static Caravan Parks">Static Caravan Parks</option>
                          <option value="Mini Buses">Mini Buses</option>
                          <option value="Patio Cleaning">Patio Cleaning</option>
                          <option value="Hotel Restaurants">Hotel Restaurants</option>
                          <option value="Tea and Coffee Specialist Shops">Tea and Coffee Specialist Shops</option>
                          <option value="Partitioning Services and Equipment">Partitioning Services and Equipment</option>
                          <option value="Greek Restaurants">Greek Restaurants</option>
                          <option value="Tapas Restaurants">Tapas Restaurants</option>
                          <option value="Soft Drink Suppliers">Soft Drink Suppliers</option>
                          <option value="Tours and Sightseeing">Tours and Sightseeing</option>
                          <option value="Traditional Restaurants">Traditional Restaurants</option>
                          <option value="Video to DVD Transfer">Video to DVD Transfer</option>
                          <option value="Paving and Driveways">Paving and Driveways</option>
                          <option value="Takeaway Food">Takeaway Food</option>
                          <option value="Function Rooms and Banqueting">Function Rooms and Banqueting</option>
                          <option value="Carpet and Upholstery Cleaners">Carpet and Upholstery Cleaners</option>
                          <option value="Underfloor Heating">Underfloor Heating</option>
                          <option value="Marble Services">Marble Services</option>
                          <option value="Tourist Attractions">Tourist Attractions</option>
                          <option value="Antique Restoration">Antique Restoration</option>
                          <option value="Chinese Takeaways">Chinese Takeaways</option>
                          <option value="Pizzerias">Pizzerias</option>
                          <option value="Mediterranean Restaurants">Mediterranean Restaurants</option>
                          <option value="Orthodontists">Orthodontists</option>
                          <option value="Wedding Flowers">Wedding Flowers</option>
                          <option value="Worktops">Worktops</option>
                          <option value="Party Venues">Party Venues</option>
                          <option value="Camp Sites">Camp Sites</option>
                          <option value="Wedding Cakes">Wedding Cakes</option>
                          <option value="Quarries">Quarries</option>
                          <option value="Seafood Restaurants">Seafood Restaurants</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>

                      <div class="d-grid col-4">
                        <label class="form-label" for="phone">Phone <span class="error_msg" id="">*</span></label>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone" id="" pattern="[1-689][0-9]{9}" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Website </label>
                        <input type="text" class="form-control" name="website" placeholder="Website" id="web">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Email Id <span class="error_msg">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Email Id" id="email1" oninput="strCpy()" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Please enter a vallied email address" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Business Address 1 </label>
                        <input type="text" class="form-control" name="businessaddress1" placeholder="Business Address 1">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Business Address 2 </label>
                        <input type="text" class="form-control" name="businessaddress2" placeholder="Business Address 2">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="city" placeholder="City">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" name="state" placeholder="State">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Postcode</label>
                        <input type="text" class="form-control" name="postcode" placeholder="Postcode">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" placeholder="Country">
                      </div>
                      <br /><br>
                      <!-- Authrised Person Details Start -->
                      <h6 class="mb-0 text-uppercase ">Authorized Person Details</h6>
                      <hr>
                      <div class="d-grid col-3">
                        <label class="form-label">Ttile <span class="error_msg">*</span></label>
                        <select class="form-select" name="authtitle[]" required>
                          <option selected disabled value="">Select Tile</option>
                          <option selected disabled value="">Select Tile</option>
                          <option value="Mr.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="MS.">MS.</option>
                          <option value="Dr.">Dr.</option>
                          <option value="Prof.">Prof.</option>
                        </select>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">First Name <span class="error_msg">*</span></label>
                        <input type="text" class="form-control" name="authfname[]" placeholder="First Name" required>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">Middle Name </label>
                        <input type="text" class="form-control" name="authmname[]" placeholder="Middle Name">
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">Last Name <span class="error_msg">*</span></label>
                        <input type="text" class="form-control" name="authlname[]" placeholder="Last Name" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Designation <span class="error_msg">*</span></label>
                        <select class="form-select" name="authdesignation[]" required>
                          <option selected disabled value="">Select Designation</option>
                          <option value="Owner/Director/Partner">Owner/Director/Partner</option>
                          <option value="Manager">Manager</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Gender</label>
                        <select class="form-select" name="authgender[]">
                          <option selected disabled value="">Select Gender</option>
                          <option value="M">M</option>
                          <option value="F">F</option>
                        </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Date of birth</label>
                        <input type="date" name="authdob[]" class="form-control">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Primary Email <span class="error_msg">*</span></label>
                        <input type="email" class="form-control" name="authprimaryemail[]" placeholder="Email Id" id="email2" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Please enter a vallied email address" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Secondary Email </label>
                        <input type="email" class="form-control" name="authsecondaryemail[]" placeholder="Secondary Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" title="Please enter a vallied email address">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Phone </label><span style="color: red;" id="error1"></span>
                        <input type="tel" class="form-control" name="authphone[]" placeholder="Phone" id="phone" pattern="[1-689][0-9]{9}">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label" for="mobileNumber">Mobile Number <span style="color: red;" id="error2"></span></label>
                        <input type="tel" class="form-control" id="mobileNumber" name="authmobile[]" placeholder="Mobile Number" pattern="7[0-9]{9}">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Alt Contact Number</label>
                        <input type="tel" class="form-control" name="authaltcontact[]" placeholder="Alt Contact Number" pattern="[0-9]{10}" title="Please enter only numerical digits.">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Property No </label>
                        <input type="text" class="form-control" name="authpropertyno[]" placeholder="Property No">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Street Name </label>
                        <input type="text" class="form-control" name="authstreetname[]" placeholder="Street Name">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" name="authcity[]" placeholder="City">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" name="authstate[]" placeholder="State">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Postcode</label>
                        <input type="text" class="form-control" name="authpostcode[]" placeholder="Postcode">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Country</label>
                        <input type="text" class="form-control" name="authcountry[]" placeholder="Country">
                      </div>

                      <div class="d-grid col-4">
                        <!-- <button id="newsectionbtn" class="btn btn-primary">Add Authorized Person</button> -->
                        <!-- <input type="button" class="btn btn-primary" onclick="addnewauthperson()" value="+ Authorized Person"> -->
                        <span id="add-customer" class="btn btn-primary pt-3" type="button">+ Authorized Person</span>
                      </div>
                    </div>

                    <div class="row g-3">
                      <div class="d-grid col-8">
                      </div>
                    </div><br>
                    <h6 class="mb-0 text-uppercase">Meeting Details</h6>
                    <hr>
                    <div class="row">
                      <div class="d-grid col-4">
                        <label class="form-label">Lead Source <span class="error_msg">*</span></label>
                        <select class="form-select" name="authleadsource" required>
                          <option selected disabled value="">Select Source</option>
                          <option value="Auto-Dialer">Auto-Dialer</option>
                          <option value="Manully Dialed">Manully Dialed</option>
                          <option value="Website">Website</option>
                          <option value="Email">Email</option>
                          <option value="Inbound Call">Inbound Call</option>
                          <option value="Social Media">Social Media</option>
                          <option value="WhatsApp Campaign">WhatsApp Campaign</option>
                          <option value="Email Campaign">Email Campaign</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Meeting Date <span class="error_msg">*</span></label>
                        <input type="date" name="meetingdate" class="form-control" id="dateInput">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Meeting Time <span class="error_msg">*</span></label>
                        <input type="time" name="meetingtime" class="form-control">
                      </div>
                      <div class="col-12">
                        <label class="form-label">Agent Comments <span class="error_msg">*</span></label>
                        <textarea class="form-control" name="authagentcomments" rows="4" cols="4" placeholder="Agent Comments..." required></textarea>
                      </div><br>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="col-12" style="margin-top: 20px;">
                  <div class="row">
                    <div class="d-grid col-6">
                      <button type="submit" class="btn btn-primary" name="create">Create</button>
                    </div>
                    <div class="d-grid col-6">
                      <span class="btn btn-dark" onclick="history.back()">Back</span>
                    </div>
                  </div>
                  <input type="text" value="<?php echo $mailId ?>" name="mail" style="display: none;">


                  </form>
                  <!-- Form End -->
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
    function strCpy() {
      var mail1 = document.getElementById('email1').value;
      document.getElementById('email2').value = mail1;
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
                        <select class="form-select" name="authtitle[]"  required>
                          <option selected disabled value="">Select Tile</option>
                          <option value="Mr.">Mr.</option>
                          <option value="Mrs.">Mrs.</option>
                          <option value="MS.">MS.</option>
                          <option value="Dr.">Dr.</option>
                          <option value="Prof.">Prof.</option>
                        </select>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">First Name <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="authfname[]" placeholder="First Name" required>
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">Middle Name </label>
                      <input type="text" class="form-control" name="authmname[]" placeholder="Middle Name">
                      </div>
                      <div class="d-grid col-3">
                        <label class="form-label">Last Name <span class="error_msg">*</span></label>
                      <input type="text" class="form-control" name="authlname[]" placeholder="Last Name" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Designation <span class="error_msg">*</span></label>
                        <select class="form-select" name="authdesignation[]" required>
                            <option selected disabled value="">Select Designation</option>
                            <option value="Owner/Director/Partner">Owner/Director/Partner</option>
                            <option value="Manager">Manager</option>
                            <option value="Other">Other</option>
                          </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Gender </label>
                        <select class="form-select" name="authgender[]">
                            <option selected disabled value="">Select Gender</option>
                            <option value="M">M</option>
                            <option value="F">F</option>
                          </select>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Date of birth </label>
                        <input type="date" name="authdob[]" class="form-control">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Primary Email <span class="error_msg">*</span></label>
                      <input type="email" class="form-control" name="authprimaryemail[]" placeholder="Email Id" id="email2" required>
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Secondary Email </label>
                      <input type="email" class="form-control" name="authsecondaryemail[]" placeholder="Secondary Email">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Phone </label>
                      <input type="text" class="form-control" name="authphone[]" placeholder="Phone">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Mobile Number </label>
                      <input type="text" class="form-control" name="authmobile[]" placeholder="Mobile Number">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Alt Contact Number</label>
                      <input type="text" class="form-control" name="authaltcontact[]" placeholder="Alt Contact Number">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Property No </label>
                      <input type="text" class="form-control" name="authpropertyno[]" placeholder="Property No">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Street Name</label>
                      <input type="text" class="form-control" name="authstreetname[]" placeholder="Street Name">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">City </label>
                      <input type="text" class="form-control" name="authcity[]" placeholder="City">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">State </label>
                      <input type="text" class="form-control" name="authstate[]" placeholder="State">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Postcode</label>
                      <input type="text" class="form-control" name="authpostcode[]" placeholder="Postcode">
                      </div>
                      <div class="d-grid col-4">
                        <label class="form-label">Country </label>
                      <input type="text" class="form-control" name="authcountry[]" placeholder="Country">
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

  <script>
    function validateForm() {
      var phone = document.getElementById('phone').value;
      var mobile = document.getElementById('mobileNumber').value;

      var error1 = document.getElementById('error1');
      var error2 = document.getElementById('error2');

      // Reset error message
      error1.innerHTML = '';
      error2.innerHTML = '';

      // Phone or Mobile is required
      if (!phone && !mobile) {
        error2.innerHTML = 'Phone or Mobile is required.';
        return false;
      }

      // Validate phone number
      if (phone) {
        if (!/^[1-689][0-9]{9}$/.test(phone)) {
          error1.innerHTML = 'Invalid phone number.';
          return false;
        }
      }

      // Validate mobile number
      if (mobile) {
        if (!/^7[0-9]{9}$/.test(mobile)) {
          error2.innerHTML = 'Invalid mobile number.';
          return false;
        }
      }

      return true;
    }
  </script>

  <script>
    // Get the current date in the format YYYY-MM-DD
    function getCurrentDate() {
      const now = new Date();
      const year = now.getFullYear();
      const month = (now.getMonth() + 1).toString().padStart(2, '0');
      const day = now.getDate().toString().padStart(2, '0');
      return `${year}-${month}-${day}`;
    }
    document.getElementById('dateInput').min = getCurrentDate();
  </script>
</body>

</html>
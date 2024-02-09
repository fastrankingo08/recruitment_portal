<?php
//fetching email from previous page
  $mailId = $_GET['mail'];
?>
<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--plugins-->
    <link href="assets/vendor/metismenu/css/metisMenu.min.css" rel="stylesheet" />
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
            <h4 class="logo-text">FR-CRM</h4>
          </div>
          <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="dashboard.php?mail=<?php echo $mailId; ?>">
              <div class="parent-icon"><i class="fadeIn animated bx bx-home-alt"></i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="fadeIn animated bx bx-recycle"></i>
              </div>
              <div class="menu-title">Organization</div>
            </a>
            <ul>
              <li> <a href="create-department.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Department</a>
              </li>
              <li> <a href="view-departments.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>View Departments</a>
              </li>
              <li> <a href="create-designation.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Designation</a>
              </li>
              <li> <a href="view-designation.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>View Designation</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;" class="has-arrow">
              <div class="parent-icon"><i class="fadeIn animated bx bx-recycle"></i>
              </div>
              <div class="menu-title">User Management</div>
            </a>
            <ul>
              <li> <a href="type-of-user.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Type Of User</a>
              </li>
              <li> <a href="role-of-user.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Role Of User</a>
              </li>
              <li> <a href="create-user.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create User</a>
              </li>
              <li> <a href="view-users.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>View Users</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="performance.php">
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
              <li><a href="create-mail-form.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Mail Form</a>
              </li>
              <li><a href="my-mail-form.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Mail Form</a>
              </li>
              <li><a href="all-mail-form.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>All Mail Form</a>
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
              <li> <a href="create-follow-up.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Follow Up</a>
              </li>
              <li> <a href="my-follow-up.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Follow Up</a>
              </li>
              <li> <a href="all-follow-up.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>All Follow Up</a>
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
              <li> <a href="create-meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Meeting</a>
              </li>
              <li> <a href="my-meetings.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Meetings</a>
              </li>
              <li> <a href="all-meetings.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>All Meetings</a>
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
              <li> <a href="todays-meetings.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Today's Meeting</a>
              </li>
              <li> <a href="todays-followup.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Today's Follow Up</a>
              </li>
              
            </ul>
          </li>
          <!-- <li class="menu-label">Forms & Tables</li> -->
          <li>
            <a href="meetings-calendar.php?mail=<?php echo $mailId; ?>">
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
                            <h6 class="mb-0 dropdown-user-name">User Name</h6>
                            <small class="mb-0 dropdown-user-designation text-secondary">User Designation</small>
                          </div>
                       </div>
                     </a>
                   </li>
                   <li><hr class="dropdown-divider"></li>
                   <li>
                      <a class="dropdown-item" href="pages-user-profile.php">
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
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="login.php">
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
            <div class="breadcrumb-title pe-3">Follow Up Management</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="dashboard.php"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">View My Follow Up</li>
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
                  <h6 class="mb-0 text-uppercase">View My Follow Up</h6>
                  <hr>
                  <form class="row g-3">
                    <table class="table mb-0 table-striped">
                        <!-- <thead>
                          <tr>
                            <th scope="col">Tile</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead> -->
                        <tbody>
                          <tr>
                            <th scope="row">Meeting ID</th>
                            <td>:</td>
                            <td>Mr.</td>
                          </tr>
                          <tr>
                            <th scope="row">Meeting Status</th>
                            <td>:</td>
                            <td>XYZ</td>
                          </tr>
                          <tr>
                            <th scope="row">Agent Name</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>

                          <tr>
                            <th scope="row">Created Date</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Business Name</th>
                            <td>:</td>
                            <td >m</td>
                          </tr>
                          <tr>
                            <th scope="row">Website</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Title</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">First Name</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Last Name</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Designation </th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Phone</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Mobile</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Email ID</th>
                            <td>:</td>
                            <td >abcabcabcabcabcabcabcabcabca</td>
                          </tr>

                          <tr>
                            <th scope="row">Meeting Date</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Meeting Time</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Service(S) Interested In</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          <tr>
                            <th scope="row">Lead Source</th>
                            <td>:</td>
                            <td >abc</td>
                          </tr>
                          
                          
                        </tbody>
                      </table>
                    
                    <div class="col-12">
                      <div class="row">
                        <div class="d-grid col-6">
                          <button type="submit" class="btn btn-primary">View QA Report</button>
                        </div>
                        <!-- <div class="d-grid col-4">
                            <button type="submit" class="btn btn-info">Reset Password</button>
                          </div> -->
                        <div class="d-grid col-6">
                          <button type="submit" class="btn btn-dark">Back</button>
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

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>
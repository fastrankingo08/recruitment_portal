<?php
//server connectivity
  require 'server_con.php';
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
    <link href="assets/vendor/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
            <a href="Sales_Dashboard.php?mail=<?php echo $mailId; ?>">
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
              <li> <a href="Agent_Create_Followup.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Follow Up</a>
              </li>
              <li> <a href="my-follow-up.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>My Follow Up</a>
              </li>
              <li> <a href="All_Followup_View.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>All Follow Up</a>
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
              <li> <a href="Sales_Meeting.php?mail=<?php echo $mailId; ?>"><ion-icon name="ellipse-outline"></ion-icon>Create Meeting</a>
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
            <div class="breadcrumb-title pe-3">Meeting Management</div>
            <div class="ps-3">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                  <li class="breadcrumb-item"><a href="dashboard.php?mail=<?php echo $mailId; ?>"><ion-icon name="home-outline"></ion-icon></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">My Meetings</li>
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
                        <div class="row">
                            <div class="col-5"></div>
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-4"> 
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span>From:</span> 
                                            </div>
                                            <input type="date" name="" class="form-control">
                                          </div>
                                        </div>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span>To:</span> 
                                            </div>
                                            <input type="date" name="" class="form-control">
                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-primary px-2"><i class="lni lni-plus"></i>Create Meeting</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 mx-auto">
                <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Action</th>
										<th>Meeting Id</th>
										<th>Created Date</th>
										<th>Status</th>
										<th>Created By</th>
										<th>Business Name</th>
                                        <th>Email</th>
									</tr>
								</thead>
								<tbody>
                <!-- Adding PHP Data Fetching Code -->
                <?php 
                //data fetching query
                 $query = "SELECT * FROM fr_meeting_details";
                 $result = mysqli_query($conn, $query);
                 $row = mysqli_num_rows($result);
                  if($row > 0)
                  {
                    while($data = mysqli_fetch_assoc($result))
                    {
                ?>
									<tr>
                  <td></td>
										<td><?php echo $data['Id'] ?></td>
										<td><?php echo $data['Meeting_date'] ?></td>
										<td><span class="badge bg-primary statusFollowUp">Follow Up</span></td>
										<td><?php echo $mailId ?></td>
										<td><?php echo $data['Mode_Of_Payments'] ?></td>
                    <td class="emailtextonly"><?php echo $data['Conducted_By'] ?></td>
									</tr>
									<?php
                    }
                  }
                  //ending php code activity
									?>
								</tbody>
							</table>
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

    <script src="assets/vendor/datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/table-datatable.js"></script>
    <!-- Main JS-->
    <script src="assets/js/main.js"></script>
  

  </body>
</html>
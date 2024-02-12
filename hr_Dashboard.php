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
<html lang="en" class="">

<head>
  <link rel="icon" type="image/png" href="assets/images/logo.png">
  <title>RAR CRM - Dashboard</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

  <!--plugins-->
  <!-- <link href="assets/vendor/simplebar/css/simplebar.css" rel="stylesheet" /> -->
  <link href="assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
  <link href="assets/vendor/metismenu/css/metisMenu.min.css" rel="stylesheet" />
  <link href="assets/vendor/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

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
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Team Meetings</li>
              </ol>
            </nav>
          </div>
          <!-- <div class="ms-auto">
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Settings</button>
                <button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                  <a class="dropdown-item" href="javascript:;">Another action</a>
                  <a class="dropdown-item" href="javascript:;">Something else here</a>
                  <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
              </div>
            </div> -->
        </div>
        <!--end breadcrumb-->

        <!-- Start Team Meeting Data Section -->
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5"><ion-icon name="person-add-outline"></ion-icon></div>
                  <div>
                    <p class="mb-0">Total Meeting</p>
                  </div>
                  <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp"></ion-icon></div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0"><?php echo $row2; ?></h5>
                  </div>
                  <!-- <div class="ms-auto" id="chart4"></div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5"><ion-icon name="heart-outline"></ion-icon></div>
                  <div>
                    <p class="mb-0">QA Approved</p>
                  </div>
                  <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp"></ion-icon></div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0"><?php echo $row; ?></h5>
                  </div>
                  <!-- <div class="ms-auto" id="chart5"></div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5"><ion-icon name="chatbox-outline"></ion-icon></div>
                  <div>
                    <p class="mb-0">QA Hold</p>
                  </div>
                  <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp"></ion-icon></div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0"><?php echo $row; ?></h5>
                  </div>
                  <!-- <div class="ms-auto" id="chart6"></div> -->
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5"><ion-icon name="mail-outline"></ion-icon></div>
                  <div>
                    <p class="mb-0">QA Re-Work Required</p>
                  </div>
                  <div class="fs-5 ms-auto"><ion-icon name="ellipsis-horizontal-sharp"></ion-icon></div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0"><?php echo $row; ?></h5>
                  </div>
                  <!-- <div class="ms-auto" id="chart7"></div> -->
                </div>
              </div>
            </div>
          </div>
        </div><!--end row-->
        <!-- End Team Meeting Data Section -->

        <div class="row">
          <div class="col-12 col-lg-4 col-xl-4">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                  <div>
                    <p class="mb-2">Total Sales</p>
                    <h4 class="mb-0"><?php echo $row; ?> <span class="ms-1 font-13 text-success">+36%</span></h4>
                  </div>
                  <div class="fs-5">
                    <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                  </div>
                </div>
                <div class="mt-3" id="chart1"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-4">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                  <div>
                    <p class="mb-2">Total Meetings</p>
                    <h4 class="mb-0"><?php echo $row2; ?> <span class="ms-1 font-13 text-danger">-4.5%</span></h4>
                  </div>
                  <div class="fs-5">
                    <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                  </div>
                </div>
                <div class="mt-3" id="chart2"></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-4">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                  <div>
                    <p class="mb-2">Total Followup</p>
                    <h4 class="mb-0"><?php echo $row3; ?> <span class="ms-1 font-13 text-success">+5.6%</span></h4>
                  </div>
                  <div class="fs-5">
                    <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                  </div>
                </div>
                <div class="mt-3" id="chart3"></div>
              </div>
            </div>
          </div>
        </div><!--end row-->
        <!-- start datatable -->
        <!-- <h6 class="mb-0 text-uppercase">DataTable Heading</h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tiger Nixon</td>
										<td>System Architect</td>
										<td>Edinburgh</td>
										<td>61</td>
										<td>2011/04/25</td>
										<td>$320,800</td>
									</tr>
									<tr>
										<td>Garrett Winters</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>63</td>
										<td>2011/07/25</td>
										<td>$170,750</td>
									</tr>
									<tr>
										<td>Ashton Cox</td>
										<td>Junior Technical Author</td>
										<td>San Francisco</td>
										<td>66</td>
										<td>2009/01/12</td>
										<td>$86,000</td>
									</tr>
									<tr>
										<td>Cedric Kelly</td>
										<td>Senior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2012/03/29</td>
										<td>$433,060</td>
									</tr>
									<tr>
										<td>Airi Satou</td>
										<td>Accountant</td>
										<td>Tokyo</td>
										<td>33</td>
										<td>2008/11/28</td>
										<td>$162,700</td>
									</tr>
									<tr>
										<td>Brielle Williamson</td>
										<td>Integration Specialist</td>
										<td>New York</td>
										<td>61</td>
										<td>2012/12/02</td>
										<td>$372,000</td>
									</tr>
									<tr>
										<td>Herrod Chandler</td>
										<td>Sales Assistant</td>
										<td>San Francisco</td>
										<td>59</td>
										<td>2012/08/06</td>
										<td>$137,500</td>
									</tr>
									<tr>
										<td>Rhona Davidson</td>
										<td>Integration Specialist</td>
										<td>Tokyo</td>
										<td>55</td>
										<td>2010/10/14</td>
										<td>$327,900</td>
									</tr>
									<tr>
										<td>Colleen Hurst</td>
										<td>Javascript Developer</td>
										<td>San Francisco</td>
										<td>39</td>
										<td>2009/09/15</td>
										<td>$205,500</td>
									</tr>
									<tr>
										<td>Sonya Frost</td>
										<td>Software Engineer</td>
										<td>Edinburgh</td>
										<td>23</td>
										<td>2008/12/13</td>
										<td>$103,600</td>
									</tr>
									<tr>
										<td>Jena Gaines</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>30</td>
										<td>2008/12/19</td>
										<td>$90,560</td>
									</tr>
									<tr>
										<td>Quinn Flynn</td>
										<td>Support Lead</td>
										<td>Edinburgh</td>
										<td>22</td>
										<td>2013/03/03</td>
										<td>$342,000</td>
									</tr>
									<tr>
										<td>Charde Marshall</td>
										<td>Regional Director</td>
										<td>San Francisco</td>
										<td>36</td>
										<td>2008/10/16</td>
										<td>$470,600</td>
									</tr>
									<tr>
										<td>Haley Kennedy</td>
										<td>Senior Marketing Designer</td>
										<td>London</td>
										<td>43</td>
										<td>2012/12/18</td>
										<td>$313,500</td>
									</tr>
									<tr>
										<td>Tatyana Fitzpatrick</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>19</td>
										<td>2010/03/17</td>
										<td>$385,750</td>
									</tr>
									<tr>
										<td>Michael Silva</td>
										<td>Marketing Designer</td>
										<td>London</td>
										<td>66</td>
										<td>2012/11/27</td>
										<td>$198,500</td>
									</tr>
									<tr>
										<td>Paul Byrd</td>
										<td>Chief Financial Officer (CFO)</td>
										<td>New York</td>
										<td>64</td>
										<td>2010/06/09</td>
										<td>$725,000</td>
									</tr>
									<tr>
										<td>Gloria Little</td>
										<td>Systems Administrator</td>
										<td>New York</td>
										<td>59</td>
										<td>2009/04/10</td>
										<td>$237,500</td>
									</tr>
									<tr>
										<td>Bradley Greer</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>41</td>
										<td>2012/10/13</td>
										<td>$132,000</td>
									</tr>
									<tr>
										<td>Dai Rios</td>
										<td>Personnel Lead</td>
										<td>Edinburgh</td>
										<td>35</td>
										<td>2012/09/26</td>
										<td>$217,500</td>
									</tr>
									<tr>
										<td>Jenette Caldwell</td>
										<td>Development Lead</td>
										<td>New York</td>
										<td>30</td>
										<td>2011/09/03</td>
										<td>$345,000</td>
									</tr>
									<tr>
										<td>Yuri Berry</td>
										<td>Chief Marketing Officer (CMO)</td>
										<td>New York</td>
										<td>40</td>
										<td>2009/06/25</td>
										<td>$675,000</td>
									</tr>
									<tr>
										<td>Caesar Vance</td>
										<td>Pre-Sales Support</td>
										<td>New York</td>
										<td>21</td>
										<td>2011/12/12</td>
										<td>$106,450</td>
									</tr>
									<tr>
										<td>Doris Wilder</td>
										<td>Sales Assistant</td>
										<td>Sydney</td>
										<td>23</td>
										<td>2010/09/20</td>
										<td>$85,600</td>
									</tr>
									<tr>
										<td>Angelica Ramos</td>
										<td>Chief Executive Officer (CEO)</td>
										<td>London</td>
										<td>47</td>
										<td>2009/10/09</td>
										<td>$1,200,000</td>
									</tr>
									<tr>
										<td>Gavin Joyce</td>
										<td>Developer</td>
										<td>Edinburgh</td>
										<td>42</td>
										<td>2010/12/22</td>
										<td>$92,575</td>
									</tr>
									<tr>
										<td>Jennifer Chang</td>
										<td>Regional Director</td>
										<td>Singapore</td>
										<td>28</td>
										<td>2010/11/14</td>
										<td>$357,650</td>
									</tr>
									<tr>
										<td>Brenden Wagner</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>28</td>
										<td>2011/06/07</td>
										<td>$206,850</td>
									</tr>
									<tr>
										<td>Fiona Green</td>
										<td>Chief Operating Officer (COO)</td>
										<td>San Francisco</td>
										<td>48</td>
										<td>2010/03/11</td>
										<td>$850,000</td>
									</tr>
									<tr>
										<td>Shou Itou</td>
										<td>Regional Marketing</td>
										<td>Tokyo</td>
										<td>20</td>
										<td>2011/08/14</td>
										<td>$163,000</td>
									</tr>
									<tr>
										<td>Michelle House</td>
										<td>Integration Specialist</td>
										<td>Sydney</td>
										<td>37</td>
										<td>2011/06/02</td>
										<td>$95,400</td>
									</tr>
									<tr>
										<td>Suki Burks</td>
										<td>Developer</td>
										<td>London</td>
										<td>53</td>
										<td>2009/10/22</td>
										<td>$114,500</td>
									</tr>
									<tr>
										<td>Prescott Bartlett</td>
										<td>Technical Author</td>
										<td>London</td>
										<td>27</td>
										<td>2011/05/07</td>
										<td>$145,000</td>
									</tr>
									<tr>
										<td>Gavin Cortez</td>
										<td>Team Leader</td>
										<td>San Francisco</td>
										<td>22</td>
										<td>2008/10/26</td>
										<td>$235,500</td>
									</tr>
									<tr>
										<td>Martena Mccray</td>
										<td>Post-Sales support</td>
										<td>Edinburgh</td>
										<td>46</td>
										<td>2011/03/09</td>
										<td>$324,050</td>
									</tr>
									<tr>
										<td>Unity Butler</td>
										<td>Marketing Designer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/12/09</td>
										<td>$85,675</td>
									</tr>
									<tr>
										<td>Howard Hatfield</td>
										<td>Office Manager</td>
										<td>San Francisco</td>
										<td>51</td>
										<td>2008/12/16</td>
										<td>$164,500</td>
									</tr>
									<tr>
										<td>Hope Fuentes</td>
										<td>Secretary</td>
										<td>San Francisco</td>
										<td>41</td>
										<td>2010/02/12</td>
										<td>$109,850</td>
									</tr>
									<tr>
										<td>Vivian Harrell</td>
										<td>Financial Controller</td>
										<td>San Francisco</td>
										<td>62</td>
										<td>2009/02/14</td>
										<td>$452,500</td>
									</tr>
									<tr>
										<td>Timothy Mooney</td>
										<td>Office Manager</td>
										<td>London</td>
										<td>37</td>
										<td>2008/12/11</td>
										<td>$136,200</td>
									</tr>
									<tr>
										<td>Jackson Bradshaw</td>
										<td>Director</td>
										<td>New York</td>
										<td>65</td>
										<td>2008/09/26</td>
										<td>$645,750</td>
									</tr>
									<tr>
										<td>Olivia Liang</td>
										<td>Support Engineer</td>
										<td>Singapore</td>
										<td>64</td>
										<td>2011/02/03</td>
										<td>$234,500</td>
									</tr>
									<tr>
										<td>Bruno Nash</td>
										<td>Software Engineer</td>
										<td>London</td>
										<td>38</td>
										<td>2011/05/03</td>
										<td>$163,500</td>
									</tr>
									<tr>
										<td>Sakura Yamamoto</td>
										<td>Support Engineer</td>
										<td>Tokyo</td>
										<td>37</td>
										<td>2009/08/19</td>
										<td>$139,575</td>
									</tr>
									<tr>
										<td>Thor Walton</td>
										<td>Developer</td>
										<td>New York</td>
										<td>61</td>
										<td>2013/08/11</td>
										<td>$98,540</td>
									</tr>
									<tr>
										<td>Finn Camacho</td>
										<td>Support Engineer</td>
										<td>San Francisco</td>
										<td>47</td>
										<td>2009/07/07</td>
										<td>$87,500</td>
									</tr>
									<tr>
										<td>Serge Baldwin</td>
										<td>Data Coordinator</td>
										<td>Singapore</td>
										<td>64</td>
										<td>2012/04/09</td>
										<td>$138,575</td>
									</tr>
									<tr>
										<td>Zenaida Frank</td>
										<td>Software Engineer</td>
										<td>New York</td>
										<td>63</td>
										<td>2010/01/04</td>
										<td>$125,250</td>
									</tr>
									<tr>
										<td>Zorita Serrano</td>
										<td>Software Engineer</td>
										<td>San Francisco</td>
										<td>56</td>
										<td>2012/06/01</td>
										<td>$115,000</td>
									</tr>
									<tr>
										<td>Jennifer Acosta</td>
										<td>Junior Javascript Developer</td>
										<td>Edinburgh</td>
										<td>43</td>
										<td>2013/02/01</td>
										<td>$75,650</td>
									</tr>
									<tr>
										<td>Cara Stevens</td>
										<td>Sales Assistant</td>
										<td>New York</td>
										<td>46</td>
										<td>2011/12/06</td>
										<td>$145,600</td>
									</tr>
									<tr>
										<td>Hermione Butler</td>
										<td>Regional Director</td>
										<td>London</td>
										<td>47</td>
										<td>2011/03/21</td>
										<td>$356,250</td>
									</tr>
									<tr>
										<td>Lael Greer</td>
										<td>Systems Administrator</td>
										<td>London</td>
										<td>21</td>
										<td>2009/02/27</td>
										<td>$103,500</td>
									</tr>
									<tr>
										<td>Jonas Alexander</td>
										<td>Developer</td>
										<td>San Francisco</td>
										<td>30</td>
										<td>2010/07/14</td>
										<td>$86,500</td>
									</tr>
									<tr>
										<td>Shad Decker</td>
										<td>Regional Director</td>
										<td>Edinburgh</td>
										<td>51</td>
										<td>2008/11/13</td>
										<td>$183,000</td>
									</tr>
									<tr>
										<td>Michael Bruce</td>
										<td>Javascript Developer</td>
										<td>Singapore</td>
										<td>29</td>
										<td>2011/06/27</td>
										<td>$183,000</td>
									</tr>
									<tr>
										<td>Donna Snider</td>
										<td>Customer Support</td>
										<td>New York</td>
										<td>27</td>
										<td>2011/01/25</td>
										<td>$112,000</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>Name</th>
										<th>Position</th>
										<th>Office</th>
										<th>Age</th>
										<th>Start date</th>
										<th>Salary</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div> -->
        <!-- end datatable -->

        <div class="row">
          <div class="col-12 col-lg-8 col-xl-8 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Sales Status Metrics</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 g-3 justify-content-start align-items-center mb-3">
                  <div class="col">
                    <h5 class="mb-0">974 <span class="text-success font-13">56% <ion-icon name="arrow-up-outline"></ion-icon></span></h5>
                    <p class="mb-0">Avg. Session</p>
                  </div>
                  <div class="col">
                    <h5 class="mb-0">1,218 <span class="text-success font-13">34% <ion-icon name="arrow-up-outline"></ion-icon></span></h5>
                    <p class="mb-0">Conversion. Rate</p>
                  </div>
                  <div class="col">
                    <h5 class="mb-0">10,317 <span class="text-success font-13">22% <ion-icon name="arrow-up-outline"></ion-icon></span></h5>
                    <p class="mb-0">Avg. Session Duration</p>
                  </div>
                </div><!--end row-->

                <div class="chart-container7">
                  <canvas id="chart4"></canvas>
                </div>

              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-4 d-flex">
            <div class="card radius-10 overflow-hidden w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Sessions By Call</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container6">
                  <div class="piechart-legend">
                    <h2 class="mb-1">8,452</h2>
                    <h6 class="mb-0">Total Sessions</h6>
                  </div>
                  <canvas id="chart5"></canvas>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                  Agent1
                  <span class="badge bg-tiffany rounded-pill">558</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Agent2
                  <span class="badge bg-success rounded-pill">204</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Agent3
                  <span class="badge bg-danger rounded-pill">108</span>
                </li>
              </ul>
            </div>
          </div>
        </div><!--end row-->

        <div class="row row-cols-1 row-cols-xl-3">
          <div class="col d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Top 5/10 Agents</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container4">
                  <canvas id="chart6"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Weekly Status</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container4">
                  <canvas id="chart7"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex">
            <div class="card radius-10 overflow-hidden w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Sales Status</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container4">
                  <canvas id="chart8"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div><!--end row-->

      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    <footer class="footer">
      <div class="footer-text">
        Copyright © 2023. All right reserved. Powered By Fastranking.
      </div>
    </footer>
    <!--end footer-->

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
  <!-- <script src="assets/vendor/simplebar/js/simplebar.min.js"></script> -->
  <script src="assets/vendor/metismenu/js/metisMenu.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="assets/vendor/chartjs/chart.min.js"></script>
  <script src="assets/vendor/apexcharts-bundle/js/apexcharts.min.js"></script>
  <script src="assets/vendor/datatable/js/jquery.dataTables.min.js"></script>
  <script src="assets/vendor/datatable/js/dataTables.bootstrap5.min.js"></script>
  <script src="assets/js/table-datatable.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <!-- Main JS-->
  <script src="assets/js/main.js"></script>


</body>

</html>
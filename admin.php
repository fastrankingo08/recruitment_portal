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

    <!-- loader-->
    <!-- <link href="assets/css/pace.min.css" rel="stylesheet" />
	  <script src="assets/js/pace.min.js"></script> -->

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body>


    <!--start wrapper-->
    <div class="wrapper">
        <!--start sidebar -->
        <?php include "includes/sidebar.php" ?>
        <!--end sidebar -->

        <!--start top header-->
        <?php include "includes/header.php"; ?>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
            <!-- start page content-->
            <div class="page-content">

                <!--start breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center  justify-content-between">
                    <div class="ps-3 d-flex">
                        <div class="breadcrumb-title pe-1">Dashboard</div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0 align-items-center">
                                <li class="breadcrumb-item"><a href="javascript:;">
                                        <ion-icon name="home-outline"></ion-icon>
                                    </a>
                                </li>
                            </ol>
                        </nav>

                    </div>
                    <div class="ps-3">
                        <div class="date-search">
                            <div class="form-group">
                                <label for="from">From</label>
                                <input type="date" class="search-control">
                            </div>
                            <div class="form-group">
                                <label for="from">To</label>
                                <input type="date" class="search-control">
                            </div>
                            <div class="searc-btn">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->

                <!-- Start Team Meeting Data Section -->
                <div class="row">
                    <div class="box-grid">
                        <div class="main-box">
                            <div class="main-box-top-cont">
                                <div class="top-cont-icon">
                                    <span><i class="fa fa-users"></i></span>
                                    <div class="box-top-detail">
                                        <a href="">
                                            <h6>Details</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="main-box-middle">
                                    <span>Total Candidates</span>
                                </div>
                                <div class="main-box-bottom">
                                    <div class="total-counting">
                                        <h4>150</h4>
                                        <span class="badge-status red d-none">2%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-box">
                            <div class="main-box-top-cont">
                                <div class="top-cont-icon">
                                    <span><i class="fa-regular fa-clipboard"></i></span>
                                    <div class="box-top-detail">
                                        <h6>Details</h6>
                                    </div>
                                </div>
                                <div class="main-box-middle">
                                    <span>Interviews Scheduled</span>
                                </div>
                                <div class="main-box-bottom">
                                    <div class="total-counting">
                                        <h4>480</h4>
                                        <div class="box-badge">
                                            <span class="badge-status blue d-none">11%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-box">
                            <div class="main-box-top-cont">
                                <div class="top-cont-icon">
                                    <span><img src="assets/images/quality.png" alt=""></span>
                                    <div class="box-top-detail">
                                        <h6>Details</h6>
                                    </div>
                                </div>
                                <div class="main-box-middle">
                                    <span>Offered</span>
                                </div>
                                <div class="main-box-bottom">
                                    <div class="total-counting">
                                        <h4>320</h4>
                                        <span class="badge-status red d-none">7%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-box">
                            <div class="main-box-top-cont">
                                <div class="top-cont-icon">
                                    <span style="color:#06cd32"><i class="fa-solid fa-user"></i></span>
                                    <div class="box-top-detail">
                                        <h6>Details</h6>
                                    </div>
                                </div>
                                <div class="main-box-middle">
                                    <span>Joined (Active)</span>
                                </div>
                                <div class="main-box-bottom">
                                    <div class="total-counting">
                                        <h4>480</h4>
                                        <span class="badge-status blue d-none">18%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-box">
                            <div class="main-box-top-cont">
                                <div class="top-cont-icon">
                                    <span class="text-danger"><i class="fa-solid fa-user"></i></span>
                                    <div class="box-top-detail">
                                        <h6>Details</h6>
                                    </div>
                                </div>
                                <div class="main-box-middle">
                                    <span>Joined (Inactive)</span>
                                </div>
                                <div class="main-box-bottom">
                                    <div class="total-counting">
                                        <h4>480</h4>
                                        <div class="box-badge">
                                            <span class="badge-status red d-none">2%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <!-- End Team Meeting Data Section -->

                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <div class="interview-title d-flex ">
                                    <h6>Performance Overview</h6>
                                    <ul class="applicant-chart-status">
                                        <li><span class="interview"></span> Interview</li>
                                        <li style="color:#b3ef42"><span class="offer"></span> Offered</li>
                                    </ul>
                                    <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                        aria-label="ellipsis horizontal sharp"></ion-icon>
                                </div>
                                <div class="chart-container7ss">
                                   <div id="perFormance"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card radius-10 overflow-hidden w-100">
                            <div class="card-body">
                                <div class="interview-box">
                                    <div class="interview-title d-flex ">
                                        <h6>Today's Interviews</h6>
                                        <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                            aria-label="ellipsis horizontal sharp"></ion-icon>
                                    </div>
                                    <div class="interview-timing-content">
                                        <div class="left-interview-content">
                                            <span class="intv-cercle"></span>
                                            <div class="candidate-name">
                                                <h6>Jane Cooper</h6>
                                                <span>Sales Advisor</span>
                                            </div>
                                        </div>
                                        <div class="right-interview-content">
                                            <span class="interview-badge ontime">HH:MM</span>
                                        </div>
                                    </div>
                                    <div class="interview-timing-content">
                                        <div class="left-interview-content">
                                            <span class="intv-cercle"></span>
                                            <div class="candidate-name">
                                                <h6>Jane Cooper</h6>
                                                <span>Sales Advisor</span>
                                            </div>
                                        </div>
                                        <div class="right-interview-content">
                                            <span class="interview-badge late">Late</span>
                                        </div>
                                    </div>
                                    <div class="interview-timing-content">
                                        <div class="left-interview-content">
                                            <span class="intv-cercle"></span>
                                            <div class="candidate-name">
                                                <h6>Jane Cooper</h6>
                                                <span>Sales Advisor</span>
                                            </div>
                                        </div>
                                        <div class="right-interview-content">
                                            <span class="interview-badge ontime">Present</span>
                                        </div>
                                    </div>
                                    <div class="interview-timing-content">
                                        <div class="left-interview-content">
                                            <span class="intv-cercle"></span>
                                            <div class="candidate-name">
                                                <h6>Jane Cooper</h6>
                                                <span>Sales Advisor</span>
                                            </div>
                                        </div>
                                        <div class="right-interview-content">
                                            <span class="interview-badge late">Late</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 col-xl-4 d-flex">
                        <div class="card radius-10 overflow-hidden w-100">
                            <div class="card-body">
                                <div class="interview-title d-flex ">
                                    <h6>Applicant Statistics</h6>
                                    <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                        aria-label="ellipsis horizontal sharp"></ion-icon>
                                </div>
                                <div class="chart-container6">
                                    <div class="piechart-legend">
                                        <h2 class="mb-1">130</h2>
                                        <h6 class="mb-0">Applicant</h6>
                                    </div>
                                    <canvas id="chart5" width="450px"></canvas>
                                </div>
                            </div>
                            <ul class="applicant-chart-status">
                                <li><span class="screen"></span> Screen</li>
                                <li><span class="interview"></span> Interview</li>
                                <li><span class="onboard"></span> Onboard</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-8 d-flex">
                        <div class="card radius-10 overflow-hidden w-100">
                            <div class="card-body">
                                <div class="interview-box">
                                    <div class="interview-title d-flex ">
                                        <h6>Candidate List</h6>
                                        <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                                            aria-label="ellipsis horizontal sharp"></ion-icon>
                                    </div>
                                    <div class="custom-table">
                                        <table class="comman-table">
                                            <thead>
                                                <tr>
                                                    <th width="25%">Candidate</th>
                                                    <th>Step</th>
                                                    <th>Date Applied</th>
                                                    <th>Resume</th>
                                                    <th width="15%">Job Applied</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>
                                                    <div class="c-cercle d-flex">
                                                        <span></span>
                                                        <div class="table-name">Jaydon Siphron</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-badge offer">Offer</div>
                                                </td>
                                                <td>08/22/2024</td>
                                                <td>
                                                    <span class=""><i class="fa-regular fa-file file-icon"></i>
                                                        resume.pdf</span>
                                                </td>
                                                <td><span class="designation">UI Design</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="c-cercle d-flex">
                                                        <span></span>
                                                        <div class="table-name">Syaiful Rijal</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-badge interview">Interview</div>
                                                </td>
                                                <td>08/22/2024</td>
                                                <td>
                                                    <span class=""><i class="fa-regular fa-file file-icon"></i>
                                                        resume.pdf</span>
                                                </td>
                                                <td><span class="designation">UX Research</span></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="c-cercle d-flex">
                                                        <span></span>
                                                        <div class="table-name">Jane Cooper</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-badge screen">Screen</div>
                                                </td>
                                                <td>08/22/2024</td>
                                                <td>
                                                    <span class=""><i class="fa-regular fa-file file-icon"></i>
                                                        resume.pdf</span>
                                                </td>
                                                <td><span class="designation">Product Design</span></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-8 col-xl-8 d-none">
                        <div class="card radius-10 w-100">
                            <div class="card-body">
                                <!--end row-->
                                <div class="chart-container7">
                                    <canvas id="chart4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->



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
        <a href="javaScript:;" class="back-to-top">
            <ion-icon name="arrow-up-outline"></ion-icon>
        </a>
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
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
 
    <script src="assets/js/dashboard.js"></script>
    <!-- Main JS-->
    <script src="assets/js/main.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Options for the chart
        var options = {
            series: [
            {
                name: "On Time",
                data: [28, 16, 33, 36, 40, 20, 33,20,20,45]
            },
            {
                name: "On Late",
                data: [12, 30, 14, 18, 30, 13, 13,32,16,25]
            }],
            chart: {
                height: 260,
                type: 'line',
                dropShadow: {
                    enabled: true,
                    color: '#000',
                    top: 18,
                    left: 7,
                    blur: 10,
                    opacity: 0.2
                },
                toolbar: {
                    show: false
                }
            },
            colors: ['#001687', '#b3ef42'],
            dataLabels: {
                enabled: true,
            },
            stroke: {
                curve: 'smooth',
                
            },
         
            grid: {
                borderColor: '#e7e7e7',
                row: {
                    colors: ['#f3f3f3', 'transparent'],
                    opacity: 0.5
                },
            },
            markers: {
                size: 1
            },
            xaxis: {
                categories: ['10am', '11am', '12am', '01am', '02pm', '03pm', '04pm','05pm','06pm','07pm'],
                },
         
            legend: {
                position: 'top',
                horizontalAlign: 'right',
                floating: true,
                offsetY: -25,
                offsetX: -5
            }
        };

        // Initialize the chart
        var chart = new ApexCharts(document.querySelector("#perFormance"), options);
        chart.render();
    });
  </script>

</body>

</html>
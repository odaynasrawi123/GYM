<?php

require('./DatabaseManagers/UsersDBManager.php');
session_start();
$usersDBManager = new UsersDBManager();

$userId = $_SESSION['userId'];
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin Dashboard</title>

    <!-- Custom fonts for this page-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this page-->
    <link rel="stylesheet" href="./style/sb-admin-2.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> <span style="color: white;"> SB User <sup>2</sup></div></span>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: white;">User Dashboard</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Club.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: white;">HomePage</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">





        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>

                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> User Dashboard</h1>
                        <a href="./signin.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Logout</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Id</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);
                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['id'] . '</td>';
                                                                          } ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                username</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);

                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['username'] . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                password
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);
                                                                                    while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                                      echo '<td>' . $row['password'] . '</td>';
                                                                                    }  ?>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                email</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);

                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['email'] . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                goal</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);

                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['goal'] . '<br>' . '<a href=goal.php?change=true>' . 'change goal' . '</a>'  . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                trainerName</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);

                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['trainerName'] . '<br>' . '<a href=trainers.php?change=true>' . 'change trainer' . '</a>'  . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                trainerId</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);

                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['trainerId'] . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                service</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);
                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['service'] . '<br>' . '<a href=services.php?change=true>' . 'change service' . '</a>' . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                serviceDay</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);
                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['serviceDay'] . '<br>' . '<a href=x.php?change=true>' . 'change serviceDay' . '</a>' . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                serviceTime</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);

                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['serviceTime'] . '</td>';
                                                                          }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                startDate</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);
                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['startDate'] . '</td>';
                                                                          } ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                endDate</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $usersDBManager->GetUserDetails($userId);
                                                                          while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                            echo '<td>' . $row['endDate'] . '</td>';
                                                                          } ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                    .oday {
                        overflow: auto;
                    }
                    </style>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Train</h6>
                                </div>
                                <div class="card-body">
                                    <style>
                                    table,
                                    th,
                                    td {
                                        border: 1px solid black;

                                    }

                                    table {
                                        width: 100%;
                                    }
                                    </style>

                                    <?php
                  echo '<table>';
                  echo '<tr>';
                  echo '<th>' . 'ProjectName'  . '</th>';
                  echo '<th>' . 'Start Date'  . '</th>';
                  echo '<th>' . 'Due Date'  . '</th>';
                  echo '<th>' . 'Status'  . '</th>';
                  echo '</tr>';
                  $users = $usersDBManager->GetUserDetails($userId);
                  while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                    //Fetch each user and place its html row  

                    echo '<tr>';
                    echo '<td>' . $row['goal'] . '</td>';
                    echo '<td>' . $row['startDate'] . '</td>';
                    echo '<td>' . $row['endDate'] . '</td>';
                    echo '<td>' . 'work in Progress' . '</td>';
                    echo '</tr>';
                  }
                  echo '</table>';
                  ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">

                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">service</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">

                                    </div>
                                    <div> <?php
                        echo '<table>';

                        echo '<tr>';
                        echo '<th>' . 'ProjectName'  . '</th>';
                        echo '<th>' . 'Day'  . '</th>';
                        echo '<th>' . 'Time'  . '</th>';
                        echo '<th>' . 'Status'  . '</th>';
                        echo '</tr>';
                        $users = $usersDBManager->GetUserDetails($userId);
                        while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                          //Fetch each user and place its html row  

                          echo '<tr>';
                          echo '<td>' . $row['service'] . '</td>';
                          echo '<td>' . $row['serviceDay'] . '</td>';
                          echo '<td>' . $row['serviceTime'] . '</td>';
                          echo '<td>' . 'work in Progress' . '</td>';
                          echo '</tr>';
                        }

                        echo '</table>';

                        ?> </div>
                                </div>
                            </div>
                            <style>
                            p {
                                text-align: center;
                                font-size: 60px;
                                margin-top: 0px;
                            }
                            </style>
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> MemberShip Is over in</h6>
                                </div>
                                <div>
                                    <p id="demo"></p>
                                </div>
                                <script>
                                // Set the date we're counting down to
                                var countDownDate = new Date("oct 10, 2022 15:37:25").getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                    // Get today's date and time
                                    var now = new Date().getTime();

                                    // Find the distance between now and the count down date
                                    var distance = countDownDate - now;

                                    // Time calculations for days, hours, minutes and seconds
                                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 *
                                        60));
                                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                    // Output the result in an element with id="demo"
                                    document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                                        minutes + "m " + seconds + "s ";

                                    // If the count down is over, write some text
                                    if (distance < 0) {
                                        clearInterval(x);
                                        document.getElementById("demo").innerHTML = "EXPIRED";
                                    }
                                }, 1000);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

</html>
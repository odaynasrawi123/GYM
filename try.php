<?php

require('./DatabaseManagers/adminDbManager.php');

$adminDBmanager = new adminDbManager();
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
                <div class="sidebar-brand-text mx-3"> <span style="color: white;"> SB Admin <sup>2</sup></div></span>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="try.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: white;">Dashboard</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin</span>

                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="./Admin.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                                TotalUsers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $adminDBmanager->getUsers();
                                                                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['username'] . '</td>';
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
                                                MostBusyDay</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $adminDBmanager->getMostDay();

                                                                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['serviceday'] . '</td>';
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
                                                MostTrainerUsed
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php $users = $adminDBmanager->getMostTrainer();

                                                                                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                                                                    echo '<td>' . $row['trainerName'] . '</td>';
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
                                                MostUsedService</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $users = $adminDBmanager->getMostService();

                                                                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['service'] . '</td>';
                                                                                                }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <!-- <div class="row">

                        <!- Area Chart -->
                    <!-- <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4"> -->
                    <!-- Card Header - Dropdown -->
                    <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Users Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        </a>

                                    </div>
                                </div> -->
                    <!-- Card Body -->
                    <!-- <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>  -->

                    <!-- Pie Chart -->
                    <!-- <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4"> -->
                    <!-- Card Header - Dropdown -->
                    <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">


                                    </div>
                                </div> -->
                    <!-- Card Body -->
                    <!-- <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i>Soccer
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i>BasketBall
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i>Tennis
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
                                    <h6 class="m-0 font-weight-bold text-primary">All users</h6>
                                </div>
                                <div class="card-body">


                                    <?php
                                    if (isset($_POST['deleteUser'])) {
                                        $userId = $_POST['deleteUser'];
                                        //geting removeUser function from adminDbmanager
                                        $adminDBmanager->removeUser($userId);
                                    }

                                    echo '<table>';

                                    echo '<tr>';
                                    echo '<th>' . 'id'  . '</th>';
                                    echo '<th>' . 'username'  . '</th>';
                                    echo '<th>' . 'email'  . '</th>';
                                    echo '<th>' . 'deleteUser'  . '</th>';

                                    echo '</tr>';



                                    //geting getAllUsers function from adminDbmanager
                                    $users = $adminDBmanager->getAllUsers();

                                    //loop that print  all the details for each user in the Club
                                    while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                        //Fetch each user and place its html row  
                                        echo '<form  method=post>';
                                        echo '<tr>';
                                        echo '<td>' . $row['id'] . '</td>';
                                        echo '<td>' . $row['username'] . '</td>';
                                        echo '<td>' . $row['email'] . '</td>';
                                        echo '<td>' . '<button type=submit class="deleteUser" value=' . $row['id'] . '  name="deleteUser">' . 'deleteUser' . '</button>' . '</td>';
                                        echo '</tr>';
                                        echo '</form>';
                                    }
                                    echo '</table>';

                                    ?>

                                </div>
                            </div>
                        </div>

                        <!-- Color System -->
                        <div class="row">

                            <div class="col-lg-6 mb-4">
                                <div class="card bg-primary text-white shadow">
                                    <div class="card-body">
                                        Yoga
                                        <div><?php $users = $adminDBmanager->Yoga();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-success text-white shadow">
                                    <div class="card-body">
                                        Soccer
                                        <div><?php $users = $adminDBmanager->Soccer();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-info text-white shadow">
                                    <div class="card-body">
                                        BasketBall
                                        <div><?php $users = $adminDBmanager->Basketball();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-warning text-white shadow">
                                    <div class="card-body">
                                        volleyBall
                                        <div><?php $users = $adminDBmanager->VolleyBall();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-danger text-white shadow">
                                    <div class="card-body">
                                        Zumba
                                        <div><?php $users = $adminDBmanager->Zumba();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-secondary text-white shadow">
                                    <div class="card-body">
                                        Tennis
                                        <div><?php $users = $adminDBmanager->Tennis();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-light text-black shadow">
                                    <div class="card-body">
                                        Cycling
                                        <div><?php $users = $adminDBmanager->Cycling();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="card bg-dark text-white shadow">
                                    <div class="card-body">
                                        Pilates
                                        <div><?php $users = $adminDBmanager->Pilates();
                                                while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                                    echo '<td>' . $row['id'] . '</td>';
                                                }  ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mb-4">

                        <!-- Illustrations -->
                        <div class="card shadow mb-4">

                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">UsersMasseges</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <div> masseges</div>
                                </div>
                                <div><?php $users = $adminDBmanager->getAllMasseges();

                                        echo '<table>';

                                        echo '<tr>';
                                        echo '<th>' . 'id'  . '</th>';
                                        echo '<th>' . 'username'  . '</th>';
                                        echo '<th>' . 'email'  . '</th>';

                                        echo '<th>' . 'adminMessage'  . '</th>';


                                        echo '</tr>';
                                        while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                            echo '<tr>';
                                            echo '<td>' . $row['id'] . '</td>';
                                            echo '<td>' . $row['username'] . '</td>';
                                            echo '<td>' . $row['email'] . '</td>';

                                            echo '<td>' . $row['adminMessage'] . '</td>';
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                        ?> </div>
                            </div>
                        </div>

                        <!-- Approach -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Trainer masseges</h6>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <div> masseges</div>
                                </div>
                                <div><?php $users = $adminDBmanager->getAllMasseges();

                                        echo '<table>';

                                        echo '<tr>';
                                        echo '<th>' . 'id'  . '</th>';
                                        echo '<th>' . 'username'  . '</th>';
                                        echo '<th>' . 'email'  . '</th>';
                                        echo '<th>' . 'trainerMessage'  . '</th>';


                                        echo '</tr>';
                                        while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                                            echo '<tr>';
                                            echo '<td>' . $row['id'] . '</td>';
                                            echo '<td>' . $row['username'] . '</td>';
                                            echo '<td>' . $row['email'] . '</td>';
                                            echo '<td>' . $row['trainerMessage'] . '</td>';
                                            echo '</tr>';
                                        }
                                        echo '</table>';
                                        ?> </div>

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
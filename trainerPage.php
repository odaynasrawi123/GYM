<?php

require('./DatabaseManagers/trainerDBmanger.php');

$trainerDBmanager = new trainerDBmanger();
session_start();
$trainerPass = $_SESSION['trainerId'];
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> trainer Dashboard</title>

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
                <div class="sidebar-brand-text mx-3"> <span style="color: white;"> SB Trainer <sup>2</sup></div></span>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span style="color: white;">Trainer Dashboard</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Trainer</span>

                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"> Trainer Dashboard</h1>
                        <a href="./trainer.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                                                Name</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $trainer = $trainerDBmanager->GetTrainerDetails($trainerPass);
                                                                                                while ($row = $trainer->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['trainerName'] . '</td>';
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
                                                Password</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $trainer = $trainerDBmanager->GetTrainerDetails($trainerPass);

                                                                                                while ($row = $trainer->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['trainerPass'] . '</td>';
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
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                phoneNumber</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $trainer = $trainerDBmanager->GetTrainerDetails($trainerPass);

                                                                                                while ($row = $trainer->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['phoneNumber'] . '</td>';
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
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                email</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php $trainer = $trainerDBmanager->GetTrainerDetails($trainerPass);

                                                                                                while ($row = $trainer->fetch(PDO::FETCH_ASSOC)) {
                                                                                                    echo '<td>' . $row['email'] . '</td>';
                                                                                                }  ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
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
                                    <h6 class="m-0 font-weight-bold text-primary">messages from Users</h6>
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
                                    $trainerPass = $_SESSION['trainerId'];
                                    echo '<table>';

                                    echo '<tr>';
                                    echo '<th>' . 'id'  . '</th>';
                                    echo '<th>' . 'username'  . '</th>';
                                    echo '<th>' . 'trainerMessage'  . '</th>';
                                    echo '<th>' . 'trainerId'  . '</th>';

                                    echo '</tr>';
                                    $trainer = $trainerDBmanager->getTrainerMasseges($trainerPass);
                                    while ($row = $trainer->fetch(PDO::FETCH_ASSOC)) {
                                        //Fetch each user and place its html row  

                                        echo '<tr>';
                                        echo '<td>' . $row['id'] . '</td>';
                                        echo '<td>' . $row['username']  . '</td>';
                                        echo '<td>' . $row['trainerMessage']  . '</td>';
                                        echo '<td>' . $row['trainerId']  . '</td>';
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
                                    <h6 class="m-0 font-weight-bold text-primary">all members who are associated with
                                        trainer </h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">

                                    </div>
                                    <div> <?php



                                            echo '<table>';

                                            echo '<tr>';
                                            echo '<th>' . 'id'  . '</th>';
                                            echo '<th>' . 'username'  . '</th>';
                                            echo '<th>' . 'email'   . '</th>';
                                            echo '<th>' . 'goal' . '</th>';
                                            echo '</tr>';
                                            $trainer = $trainerDBmanager->getTrainer($_SESSION['trainerId']);
                                            while ($row = $trainer->fetch(PDO::FETCH_ASSOC)) {
                                                //Fetch each user and place its html row  

                                                echo '<tr>';
                                                echo '<td>' . $row['id'] . '</td>';
                                                echo '<td>' . $row['username'] . '</td>';
                                                echo '<td>' . $row['email'] . '</td>';
                                                echo '<td>' .  $row['goal'] . '</td>';
                                                echo '</tr>';
                                            }

                                            echo '</table>';

                                            ?> </div>
                                </div>
                            </div>

                            <!-- Approach -->
                            <!-- <div class="card shadow mb-4">
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
              </div> -->

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
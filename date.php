<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">




    <link rel="stylesheet" href="style/classic.css">
    <link rel="stylesheet" href="style/classic.date.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="style/style.css">

    <title>Calendar</title>
</head>

<body>
    <a href="Club.php">HomePage</a>

    <div class="content">

        <div class="container text-left">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2 class="mb-5 text-center">Select Range for training</h2>
                    <form action="#" class="row" method="post">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input_from">From</label>
                                <input type="text" value="start date" name="startDate" class="form-control"
                                    id="input_from" placeholder="Start Date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input_to">To</label>
                                <input type="text" value="end date" name="endDate" class="form-control" id="input_to"
                                    placeholder="End Date">
                            </div>
                        </div>
                        <div class="containerx">
                            <button type="submit" name="click"> continue</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <?php
  //UsersDBManager is required to use the functions
  require('./DatabaseManagers/UsersDBManager.php');
  $usersDBManager = new UsersDBManager();

  //start session
  session_start();

  $userId = $_SESSION['userId'];
  $startDate = "";
  $endDate = "";



  if (isset($_POST['click'])) {


    $startDate = $_POST['startDate'];
    //echo ($startDate);

    $endDate = $_POST['endDate'];
    //echo ($endDate);



    $usersDBManager->assignEndDate($userId, $endDate);
    $usersDBManager->assignStartDate($userId, $startDate);

    header('location: services.php');
  }


  ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/picker.js"></script>
    <script src="js/picker.date.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
<!--=======AdminManager is required to handle login=====-->
<?php include('ServerManagers/trainerManager.php');



?>

<!DOCTYPE html>

<head>

    <title>Document</title>
    <link rel="stylesheet" href="style/form.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>



<body>
    <header>


        <ul>
            <li><a href="index.php"> <b>Sport</b> </a></li>
            <li> <a href="soccer.php"><b> Soccer</b></a></li>
            <li> <a href="basketball.php"> <b> BasketBall</b></a></li>
            <li> <a href="tennis.php"> <b> Tennis</b></a></li>
            <li> <a href="gym.php"> <b> Gym</b></a></li>
            <li> <a href="trainer.php"><b> trainer</b></a></li>
            <li> <a href="Admin.php"><b> Admin </b></a></li>
            <li> <a href="signin.php"> <b> sign-in</b></a></li>
            <li> <a href="signup.php"><b> signUp</b></a></li>
        </ul>

    </header>


    <main>
        <h2>
            login trainer
        </h2>

        <?php

        session_start();
        if (isset($_POST['signin'])) {
            $_SESSION['trainerName'] = $_POST['trainerName'];
        }
        ?>

        <!--=======Login form=========-->
        <form class="form_view" method="post">

            <!--=======Display errors here=========-->
            <?php include('errors.php'); ?>

            <div class="input-group">
                <label>Email</label>
                <input type="text" name="trainerName">
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="trainerPass">
            </div>

            <div class="input-group">
                <Button type="submit" name="signin" class="btn">Login</Button>
            </div>
        </form>



    </main>
</body>

</html>
<!--=======UserManager is required to handle login=====-->
<?php include('ServerManagers/UserManager.php');

?>

<!DOCTYPE html>

<head>

    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style/form.css">
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
            signin user
        </h2>
        <!--=======Login form=========-->
        <form class="form_view" method="post">

            <!--=======Display errors here=========-->
            <?php include('errors.php'); ?>

            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>

            <div class="input-group">
                <Button type="submit" name="login" class="btn">Login</Button>
            </div>

            <!--=======Register button=========-->
            <p>
                not yet a member ? <a href="signup.php">Sign Up</a>
            </p>

        </form>
    </main>
</body>

</html>
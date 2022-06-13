<!--=======UserManager is required to handle login=====-->
<?php include('ServerManagers/UserManager.php');

?>
<!DOCTYPE html>
<html lang="en">

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
            signup user
        </h2>
        <!--===========Registration form===========-->
        <form class="form_view" method="post">

            <!--=======Display errors here=========-->
            <?php include('errors.php'); ?>

            <div class="input-group">
                <label>Full Name</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="text" name="email">
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>

            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2">
            </div>

            <div class="input-group">
                <Button type="submit" name="register" class="btn">Register</Button>
            </div>

            <!--=======Login button=========-->
            <p>
                Already a member? <a href="signin.php">Sign in</a>
            </p>
        </form>
    </main>
</body>

</html>
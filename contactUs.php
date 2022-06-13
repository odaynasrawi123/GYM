<html>

<style>
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);

body {
    background: grey;
    color: white;
    font-weight: 400;
    font-size: 1em;
    font-family: 'Lato', Arial, sans-serif;
    margin: 0;
    padding: 0;
    padding-bottom: 60px;
}

.ccheader {
    margin: 0 auto;
    padding: 2em;
    text-align: center;
}

.ccheader h1 {
    margin: 0;
    font-weight: 300;
    font-size: 2.5em;
    line-height: 1.3;
}

.ccheader {
    margin: 0 auto;
    padding: 2em;
    text-align: center;
}

.ccheader h1 {
    margin: 0;
    font-weight: 300;
    font-size: 2.5em;
    line-height: 1.3;
}

/* Form CSS*/
.ccform {
    margin: 0 auto;
    width: 800px;
}

.ccfield-prepend {
    margin-bottom: 10px;
    width: 100%;
}

.ccform-addon {
    color: black;
    float: left;
    padding: 8px;
    width: 8%;
    background: #FFFFFF;
    text-align: center;
}

.ccformfield {
    color: #000000;
    background: #FFFFFF;
    border: none;
    padding: 15.5px;
    width: 91.9%;
    display: block;
    font-family: 'Lato', Arial, sans-serif;
    font-size: 14px;
}

.ccformfield {
    font-family: 'Lato', Arial, sans-serif;
}

.ccbtn {
    display: block;
    border: none;
    background: black;
    color: #FFFFFF;
    padding: 12px 25px;
    cursor: pointer;
    text-decoration: none;
    font-weight: bold;
}

.ccbtn:hover {
    background: #d8850e;

}
</style>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<header class="ccheader">
    <h1>send to us a Message </h1>
</header>

<a href="Club.php">HomePage</a>
<div class="wrapper">
    <form method="post" action="" class="ccform">
        <div class="ccfield-prepend">
            <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
            <input class="ccformfield" type="text" placeholder="Full Name">
        </div>
        <div class="ccfield-prepend">
            <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
            <input class="ccformfield" type="text" placeholder="Email">
        </div>
        <div class="ccfield-prepend">
            <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
            <input class="ccformfield" type="text" placeholder="Phone">
        </div>
        <div class="ccfield-prepend">
            <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
            <input class="ccformfield" type="text" placeholder="subject">
        </div>

        <div class="ccfield-prepend">
            <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
            <textarea class="ccformfield" name="comments" rows="8" placeholder="Message to manager"></textarea>
        </div>
        <div class="ccfield-prepend">
            <input class="ccbtn" type="submit" name="submit" value="Submit">
        </div>
        <div class="ccfield-prepend">
            <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
            <textarea class="ccformfield" name="commentsTrainer" rows="8" placeholder="Message to trainer"></textarea>
        </div>
        <div class="ccfield-prepend">
            <input class="ccbtn" type="submit" name="submitTrainer" value="Submit">
        </div>

    </form>
</div>

</html>
<?php

include_once './DatabaseManagers/adminDbManager.php';
include_once './DatabaseManagers/UsersDBManager.php';



session_start();
$usersDBManager = new UsersDBManager();
$adminDBmanager = new adminDbManager();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['userId'];

    $admin = $_POST['comments'];
    $trainer = $_POST['commentsTrainer'];

    if (isset($_POST['submit'])) {
        $usersDBManager->getMessage($userId, $admin);
    }
    if (isset($_POST['submitTrainer'])) {
        $usersDBManager->getTrainerMessage($userId, $trainer);
    }
}

?>
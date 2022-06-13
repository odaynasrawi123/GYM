<?php
require("DatabaseManagers/trainerDBmanger.php");

// $admindbManager = new adminDbManager();
$trainerdbManager = new trainerDBmanger();


session_start();
$username = "";
$password = "";
$errors = array();


//==================Login================
//If login is requested then log user in
if (isset($_POST['signin'])) {
    //Get post new properties
    $username = $_POST['trainerName'];
    $password = $_POST['trainerPass'];

    // ensure that form fields are filled properly
    if (empty($username)) {
        array_push($errors, "please enter username");
    }
    if (empty($password)) {
        array_push($errors, "password is required");
    }

    if (count($errors) == 0) {
        //Get user properties
        $userResult = $trainerdbManager->loginTrainer($username, $password);

        if ($userResult) {
            //Set user properties to session
            $_SESSION['admin'] = true;
            $_SESSION['trainerId'] = $password;
            //Set login successfull
            $_SESSION['success'] = "you are logged in ";
            //Go to adminPage page
            header('location: trainerPage.php'); //redirect to trainerPage 

        } else {
            array_push($errors, "wrong username/password combination ");
        }
    }
}
<?php
require("DatabaseManagers/adminDbManager.php");

$admindbManager = new adminDbManager();


session_start();
$username = "";
$password = "";
$errors = array();



//==================Login================
//If login is requested then log user in
if (isset($_POST['signin'])) {
  //Get post new properties
  $username = $_POST['AdminName'];
  $password = $_POST['AdminPassword'];

  // ensure that form fields are filled properly
  if (empty($username)) {
    array_push($errors, "please enter username");
  }
  if (empty($password)) {
    array_push($errors, "password is required");
  }

  if (count($errors) == 0) {
    //Get user properties
    $userResult = $admindbManager->loginAdmin($username, $password);
    if ($userResult) {
      //Set user properties to session
      $_SESSION['admin'] = true;
      //Set login successfull
      $_SESSION['success'] = "you are logged in ";
      //Go to adminPage page
      header('location: try.php'); //redirect to adminPage 

    } else {
      array_push($errors, "wrong username/password combination ");
    }
  }
}
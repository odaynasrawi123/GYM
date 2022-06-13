<?php
    require_once("DatabaseManagers/UsersDBManager.php");

    $userDBManager = new UsersDBManager();

    session_start();
    $username="";
    $email="";
    $errors=array();

    //==================Register================
    //If register is requested then register user
    if(isset($_POST['register'])) {
        //Get post new properties
        $username = $_POST['username'];
        $email =    $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        // ensure that form fields are filled properly
        if(empty($username)) array_push($errors,"Full Name is required");
        if(empty($email)) array_push($errors,"Email is required");
        if(empty($password_1)) array_push($errors,"Password is required");
        if($password_1 != $password_2) array_push($errors,"the two passwords dont match");
        
        //Check if user exist then set error
        if($userDBManager->userExists($email))
            array_push($errors,"Email already exists");

        // if there are no errors, save user to database
        if(count($errors)==0) {
            //Create user
            $userId = $userDBManager->registerUser($username, $email, $password_1);
            //if($userId){
            //Set user properties to session
           // $_SESSION['userId'] = $userId;
            $_SESSION['username']=$username;
            $_SESSION['success']=$userId? "you are logged in " : "error";
            //Go to signin page
            header('location: signin.php');
        }else
        array_push($errors,"server error try again");
        }
  

    //==================Login================
    //If login is requested then log user in
    if(isset($_POST['login']))
    {
        //Get post new properties
        $email = $_POST['email'];
        $password = $_POST['password'];
      

        // ensure that form fields are filled properly
        if(empty($email)){
            array_push($errors,"please enter email");
        }
        if(empty($password)){
            array_push($errors,"password is required");
        }

        // if there are no errors, save user to database
        if(count($errors)==0){
            //Get user properties
            $userResult = $userDBManager->loginUser($email,$password);
            //Check if user exists
            if($userResult!=null) {
                //Set user properties to session
                $_SESSION['userId'] = $userResult['id'];
                $_SESSION['username'] = $userResult['username'];
                //Set login successfull
                $_SESSION['success'] = "you are logged in ";
                //Go to Club page
                 header('location: Club.php'); //redirect to home page
           
                $userResult = $userDBManager->setActive($_SESSION['userId']);
            } else {
                array_push($errors,"wrong username/password combination ");
               
            }
        }
    }

    //logout
    if(isset($_POST['logout'])){
        //Destroy session
        session_destroy();
        //Remove user properties from session
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
   
    $userResult = $userDBManager->setNotActive($_SESSION['userId']);
 //Go to login page
        header('location: signin.php');
        //to make the user not active after the logout
       

    }
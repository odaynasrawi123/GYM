<?php
ob_start();

?>
<html>
<head>
    <title> Trainers</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">


    <a href="Club.php"> HomePage</a>
    <header>
        <div class="div"> <strong>Choose a Trainer</div>
    </header>

<body>
    <a href="trainersInfo.php"> click here to see info about every trainer</a>
    <form method="POST">
        <div class="trainersBlock">
            <div class="trainer1">
                <button type="submit" name="trainer" value="1" value="arnold shayto"> <img src="./images/trainer1.jpg"
                        alt="train">
                    <p> arnold shayto </p>
            </div>
            <div class="trainer2">
                <button type="submit" name="trainer" value="2" value="jack kuo"> <img src="./images/trainer2.jpg"
                        alt="train">
                    <p> jack kuo</p>
            </div>
            <div class="trainer3">
                <button type="submit" name="trainer" value="3" value="robert danial"> <img src="./images/trainer3.jpg"
                        alt="train">
                    <p>robert danial</p>
            </div>
            <div class="trainer4">
                <button type="submit" name="trainer" value="4" value="sam smith"> <img src="./images/trianer4.jpg"
                        alt="train">
                    <p> sam smith </p>
            </div>
            <div class="trainer5">
                <button type="submit" name="trainer" value="5" value="david smith"> <img src="./images/trainers2.jpg"
                        alt="train">
                    <p> david smith</p>
            </div>
            <div class="trainer6">
                <button type="submit" name="trainer" value="6" value="kate robinson"> <img src="./images/trainer6.jpg"
                        alt="train">
                    <p> kate robinson </p>
            </div>
            <div class="trainer7">
                <button type="submit" name="trainer" value="7" value="wade thompson"> <img src="./images/trainer7.jpg"
                        alt="train">
                    <p>wade thompson</p>
            </div>
            <div class="trainer8">
                <button type="submit" name="trainer" value="8" value="don curry"> <img src="./images/trainer8.jpg"
                        alt="train">
                    <p> don curry </p>
            </div>
            <div class="trainer9">
                <button type="submit" name="trainer" value="9" value="harry jibson"> <img src="./images/trainer9.jpg"
                        alt="train">
                    <p> harry jibson</p>
            </div>
            <div class="trainer10">
                <button type="submit" name="trainer" value="10" value="fabian kuik"> <img src="./images/trainer10.jpg"
                        alt="train">
                    <p> fabian kuik </p>
            </div>
            <div class="trainer11">
                <button type="submit" name="trainer" value="11" value="carol fujo"> <img src="./images/trainer11.jpg"
                        alt="train">
                    <p> carol fujo </p>
            </div>
            <div class="trainer12">
                <button type="submit" name="trainer" value="12" value="Alma curry"> <img src="./images/trainer12.jpg"
                        alt="train">
                    <p> Alma curry</p>
            </div>
            <div class="trainer13">
                <button type="submit" name="trainer" value="13" value="Carla Lin"> <img src="./images/trainer13.jpg"
                        alt="train">
                    <p> Carla Lin </p>
            </div>
            <div class="trainer14">
                <button type="submit" name="trainer" value="14" value="Cassandra Carrie"> <img
                        src="./images/trainer14.jpg" alt="train">
                    <p> Cassandra Carrie </p>
            </div>
        </div>
    </form>
</body>
</head>

</html>
<?php

//UsersDBManager is required to use the functions
include_once 'UsersDBManager.php';

//start session
session_start();

$usersDBManager = new UsersDBManager();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_SESSION['userId'];

  switch ($_POST["trainer"]) {
      //geting the functions(assignTrainerId,assignTrainerName)  from UsersDBManager
    case '1': {
        $usersDBManager->assignTrainerId($userId, "1");
        $usersDBManager->assignTrainerName($userId, "arnold shayto");
      }
      break;
    case '2': {
        $usersDBManager->assignTrainerId($userId, "2");
        $usersDBManager->assignTrainerName($userId, "jack kuo");
      }
      break;
    case '3': {
        $usersDBManager->assignTrainerId($userId, "3");
        $usersDBManager->assignTrainerName($userId, "robert danial");
      }
      break;
    case '4': {
        $usersDBManager->assignTrainerId($userId, "4");
        $usersDBManager->assignTrainerName($userId, "sam smith");
      }
      break;
    case '5': {
        $usersDBManager->assignTrainerId($userId, "5");
        $usersDBManager->assignTrainerName($userId, "david smith");
      }
      break;
    case '6': {
        $usersDBManager->assignTrainerId($userId, "6");
        $usersDBManager->assignTrainerName($userId, "kate robinson");
      }
      break;
    case '7': {
        $usersDBManager->assignTrainerId($userId, "7");
        $usersDBManager->assignTrainerName($userId, "wade thompson");
      }
      break;
    case '8': {
        $usersDBManager->assignTrainerId($userId, "8");
        $usersDBManager->assignTrainerName($userId, "don curry");
      }
      break;
    case '9': {
        $usersDBManager->assignTrainerId($userId, "9");
        $usersDBManager->assignTrainerName($userId, "harry jibson");
      }
      break;
    case '10': {
        $usersDBManager->assignTrainerId($userId, "10");
        $usersDBManager->assignTrainerName($userId, "fabian kuik");
      }
      break;
    case '11': {
        $usersDBManager->assignTrainerId($userId, "11");
        $usersDBManager->assignTrainerName($userId, "carol fujo");
      }
      break;
    case '12': {
        $usersDBManager->assignTrainerId($userId, "12");
        $usersDBManager->assignTrainerName($userId, "Alma curry");
      }
      break;
    case '13': {
        $usersDBManager->assignTrainerId($userId, "13");
        $usersDBManager->assignTrainerName($userId, "Carla Lin");
      }
      break;
    case '14': {
        $usersDBManager->assignTrainerId($userId, "14");
        $usersDBManager->assignTrainerName($userId, "Cassandra Carrie");
      }
      break;
  }
  //checking if we come from profile.php 
  if (isset($_GET["change"]))
    header('Location:profile.php');
  else //if not continue to services.php
    header('Location:date.php');
}
?>
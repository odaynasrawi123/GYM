<html>

<head>
    <title> Goal</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">

</head>

<a href="Club.php"> HomePage</a>
<header>
    <div class="div"><strong>choose your goal </div>

</header>

<body>
    <form method="POST">
        <div class="container">
            <div class="loseWeight">
                <button type="submit" name="goal" value="loosingWeight"> <img src="./images/loseweight.jpg" alt="">
                    <p name="loosing weight"> loosing weight </p>
            </div>
            <div class="gainWeight">
                <button type="submit" name="goal" value="gainingweight"> <img src="./images/Weight-gain.jpg" alt="">
                    <p name="gaining weight"> gaining weight </p>
            </div>
            <div class="gainMuscles">
                <button type="submit" name="goal" value="gainingmuscles"> <img src="./images/gainweight.jpg" alt="">
                    <p name="gaining muscles"> gaining muscles</p>

            </div>

        </div>
    </form>
</body>

</html>
<?php
//UsersDBManager is required to use the functions
include_once 'UsersDBManager.php';

//start session
session_start();
$usersDBManager = new UsersDBManager();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_SESSION['userId'];
  //three conditions for goal
  switch ($_POST["goal"]) {
      //first condition //getting function(assignGoal) from UsersDBManager
    case 'loosingWeight':
      $usersDBManager->assignGoal($userId, "loosing weight");
      break;
      //second condition    
    case 'gainingweight':
      $usersDBManager->assignGoal($userId, "gaining weight");
      break;
      //third condition 
    case 'gainingmuscles':
      $usersDBManager->assignGoal($userId, "gaining muscles");
      break;
  }
  //checking if we come from profile.php 
  if (isset($_GET["change"]))
    header('Location:profile.php');
  else
    //if not continue to trainers.php
    header('Location:trainers.php');
}
?>
<html>

<head>
    <title> Top Gym</title>


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">


    <a href="Club.php"> HomePage</a>

    <header class="servivceHeader">

        <div class="div"><strong>Choose a Service </div>

    </header>


<body>
    <form method="POST">
        <div class="service">
            <div class="soccer">
                <button type="submit" name="service" value="soccer"> <img src="./images/soccer.jpg" alt="">
                    <p> soccer </p>
            </div>
            <div class="tennis">
                <button type="submit" name="service" value="tennis"> <img src="./images/tennis.jpg" alt="">
                    <p>tennis</p>
            </div>
            <div class="basketball">
                <button type="submit" name="service" value="basketball"> <img src="./images/basketball.jpg" alt="">
                    <p>basketball</p>
            </div>

            <div class="volleyBall">
                <button type="submit" name="service" value="volleyBall"><img src="./images/volleyball.jpg" alt="">
                    <p> volleyball </p>
            </div>
            <div class="zumba">
                <button type="submit" name="service" value="zumba"><img src="./images/Zumba.jpg" alt="">
                    <p> zumba </p>
            </div>
            <div class="cycling">
                <button type="submit" name="service" value="cycling"><img src="./images/cycling.jpg" alt="">
                    <p> cycling </p>
            </div>
            <div class="yoga">
                <button type="submit" name="service" value="yoga"><img src="./images/yoga.jpg" alt="">
                    <p> yoga </p>
            </div>
            <div class="pilates">
                <button type="submit" name="service" value="pilates"><img src="./images/pilates.jpg" alt="">
                    <p> pilates </p>
            </div>
            <div class="TRX">
                <button type="submit" name="service" value="TRX"><img src="./images/TRX.jpg" alt="">
                    <p> TRX </p>
            </div>
            <div class="DMT">
                <button type="submit" name="service" value="DMT"><img src="./images/DMT.jpg" alt="">
                    <p> DMT </p>
            </div>
            <div class="kickBoxing">
                <button type="submit" name="service" value="kickBoxing"><img src="./images/kickBoxing.jpg" alt="">
                    <p> kickBoxing </p>
            </div>
            <div class="sauna">
                <button type="submit" name="service" value="sauna"><img src="./images/sauna.jpg" alt="">
                    <p> sauna </p>
            </div>
            <div class="aerobics">
                <button type="submit" name="service" value="aerobics"><img src="./images/aerobics.jpg" alt="">
                    <p> aerobics </p>
            </div>
            <div class="noService">
                <button type="submit" name="service" value="noService"><img src="./images/noService.jpg" alt="">
                    <p> noService </p>
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
    // conditions for service
    switch ($_POST["service"]) {
            //geting the function(assignService) from UsersDBManager
        case 'soccer':
            $usersDBManager->assignService($userId, "soccer");
            break;

        case 'tennis':
            $usersDBManager->assignService($userId, "tennis");
            break;

        case 'basketball':
            $usersDBManager->assignService($userId, "basketball");
            break;

        case 'volleyBall':
            $usersDBManager->assignService($userId, "volleyBall");
            break;
        case 'zumba':
            $usersDBManager->assignService($userId, "zumba");
            break;
        case 'cycling':
            $usersDBManager->assignService($userId, "cycling");
            break;
        case 'yoga':
            $usersDBManager->assignService($userId, "yoga");
            break;
        case 'pilates':
            $usersDBManager->assignService($userId, "pilates");
            break;
        case 'TRX':
            $usersDBManager->assignService($userId, "TRX");
            break;
        case 'DMT':
            $usersDBManager->assignService($userId, "DMT");
            break;
        case 'kickBoxing':
            $usersDBManager->assignService($userId, "kickBoxing");
            break;
        case 'sauna':
            $usersDBManager->assignService($userId, "sauna");
            break;
        case 'aerobics':
            $usersDBManager->assignService($userId, "aerobics");
            break;
        case 'noService': {
                $usersDBManager->assignService($userId, "noService");

                header('Location:Club.php');
                return;
            }
            break;
    }
    //checking if we come from profile.php 
    if (isset($_GET["change"]))
        header('Location:profile.php');
    else

        header('Location:x.php');
}

?>
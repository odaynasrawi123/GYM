<?php

//UsersDBManager is required to use the functions
include_once 'UsersDBManager.php';

//start session
session_start();
$usersDBManager = new UsersDBManager();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_SESSION['userId'];


    switch ($_POST["serviceday"]) {
            //all cases between 9-10
        case 'tennis_9-10': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
        case 'basketball_9-10': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
        case 'DMT_9-10': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
        case 'soccer_9-10': {
                $usersDBManager->assignServiceDay($userId, "thursday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
        case 'volleyBall_9-10': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
        case 'zumba_9-10': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
        case 'kickBoxing_9-10': {
                $usersDBManager->assignServiceDay($userId, "sunday");
                $usersDBManager->assignServiceTime($userId, "09:00-10:00");
            }
            break;
            //all cases between 10-11
        case 'yoga_10-11': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
        case 'soccer_10-11': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
        case 'TRX_10-11': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
        case 'tennis_10-11': {
                $usersDBManager->assignServiceDay($userId, "thursday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
        case 'basketBall_10-11': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
        case 'TRX_10-11_1': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
        case 'DMT_10-11': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "10:00-11:00");
            }
            break;
            //all cases between 12-1    
        case 'soccer_12-1': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
        case 'DMT_12-1': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
        case 'basketBall_12-1': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
        case 'yoga_12-1': {
                $usersDBManager->assignServiceDay($userId, "thursday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
        case 'DMT_12-1': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
        case 'tennis_12-1': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
        case 'aerobics_12-1': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "12:00-1:00");
            }
            break;
            //all cases 1:00-2:00
        case 'cycling_1-2': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
        case 'zumba_1-2': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
        case 'kickBoxing_1-2': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
        case 'TRX_1-2': {
                $usersDBManager->assignServiceDay($userId, "Thursday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
        case 'tennis_1-2': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
        case 'DMT_1-2': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
        case 'aerobics_1-2': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "1:00-2:00");
            }
            break;
            //all cases 2:00-3:00

        case 'DMT_2-3': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
        case 'sauna_2-3': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
        case 'tennis_2-3': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
        case 'volleyBall_2-3': {
                $usersDBManager->assignServiceDay($userId, "Thursday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
        case 'zumba_2-3': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
        case 'cycling_2-3': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
        case 'pilates_2-3': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "2:00-3:00");
            }
            break;
            //all cases 3-4 
        case 'kickBoxing_3-4': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
        case 'cycling_3-4': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
        case 'soccer_3-4': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
        case 'pilates_3-4': {
                $usersDBManager->assignServiceDay($userId, "Thursday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
        case 'sauna_3-4': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
        case 'volleyBall_3-4': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
        case 'TRX_3-4': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "3:00-4:00");
            }
            break;
            //all cases 4:00-5:00
        case 'zumba_4-5': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
        case 'yoga_4-5': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
        case 'aerobics_4-5': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
        case 'cycling_4-5': {
                $usersDBManager->assignServiceDay($userId, "Thursday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
        case 'TRX_4-5': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
        case 'basketBall_4-5': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
        case 'soccer_4-5': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "4:00-5:00");
            }
            break;
            //all cases 5:00-6:00
        case 'basketBall_5-6': {
                $usersDBManager->assignServiceDay($userId, "Monday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
        case 'TRX_5-6': {
                $usersDBManager->assignServiceDay($userId, "Tuesday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
        case 'zumba_5-6': {
                $usersDBManager->assignServiceDay($userId, "Wednesday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
        case 'DMT_5-6': {
                $usersDBManager->assignServiceDay($userId, "Thursday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
        case 'Yoga_5-6': {
                $usersDBManager->assignServiceDay($userId, "Friday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
        case 'soccer_5-6': {
                $usersDBManager->assignServiceDay($userId, "Saturday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
        case 'tennis_5-6': {
                $usersDBManager->assignServiceDay($userId, "Sunday");
                $usersDBManager->assignServiceTime($userId, "5:00-6:00");
            }
            break;
    }
    //checking if we come from profile.php 
    if (isset($_GET["change"])) {
        header('Location:profile.php');
    } else //if not back to the main page 
        header('Location:Club.php');
}
?>
<html>
<link rel="stylesheet" href="style/main.css">

<a href="Club.php"> HomePage</a>


<header>
    <div class="div"><strong>Choose your ServiceDay and ServiceTime </div>
</header>


<body>
    <form method="POST">
        <div class="containerx">
            <div class="table-responsive">
                <table class="table table-bordered text-center">

                    <thead>
                        <tr class="bg-light-gray">
                            <th class="text-uppercase">Time </th>
                            <th class="text-uppercase">Monday</th>
                            <th class="text-uppercase">Tuesday</th>
                            <th class="text-uppercase">Wednesday</th>
                            <th class="text-uppercase">Thursday</th>
                            <th class="text-uppercase">Friday</th>
                            <th class="text-uppercase">Saturday</th>
                            <th class="text-uppercase">Sunday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">09:00am </td>
                            <td>

                                <button type="submit" name="serviceday" value="tennis_9-10"
                                    class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">
                                    tennis</button>
                                <div class="margin-10px-top font-size14"> 9:00-10:00</div>
                                <div class="font-size13 text-light-gray">jack kuo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="basketball_9-10"
                                    class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">basketBall</button>
                                <div class="margin-10px-top font-size14">9:00-10:00</div>
                                <div class="font-size13 text-light-gray">robert danial</div>
                            </td>

                            <td>
                                <button type="submit" name="serviceday" value="DMT_9-10"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">9:00-10:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="soccer_9-10"
                                    class="bg-treq padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">soccer</button>
                                <div class="margin-10px-top font-size14">9:00-10:00</div>
                                <div class="font-size13 text-light-gray">arnold shayto </div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="volleyBall_9-10"
                                    class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">volleyBall</button>
                                <div class="margin-10px-top font-size14">9:00-10:00</div>
                                <div class="font-size13 text-light-gray">sam smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="zumba_9-10"
                                    class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">zumba</button>
                                <div class="margin-10px-top font-size14">9:00-10:00</div>
                                <div class="font-size13 text-light-gray">david smith</div>

                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="kickBoxing_9-10"
                                    class="bg-black padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">kickBoxing</button>
                                <div class="margin-10px-top font-size14">9:00-10:00</div>
                                <div class="font-size13 text-light-gray">carol fujo </div>

                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">10:00am</td>
                            <td>
                                <button type="submit" name="serviceday" value="yoga_10-11"
                                    class="bg-brown padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">yoga</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">wade thompson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="soccer_10-11"
                                    class="bg-treq padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">soccer</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">arnold shayto</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="TRX_10-11"
                                    class="bg-violet padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">TRX</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">harry jibson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="tennis_10-11"
                                    class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">tennis</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">jack kuo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="basketBall_10-11"
                                    class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">basketBall</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">robert danial</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="TRX_10-11_1"
                                    class="bg-violet padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">TRX</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">harry jibson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="DMT_10-11"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">10:00-11:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">11:00am</td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                            <td>
                                <span
                                    class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                <div class="margin-10px-top font-size14">11:00-12:00</div>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">12:00pm</td>
                            <td>
                                <button type="submit" name="serviceday" value="soccer_12-1"
                                    class="bg-treq padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">soccer</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">arnold shayto</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="DMT_12-1"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="basketBall_12-1"
                                    class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">basketBall</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">robert danial</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="yoga_12-1"
                                    class="bg-brown padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">yoga</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">wade thompson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="DMT_12-1"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="tennis_12-1"
                                    class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">tennis</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">jack kuo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="aerobics_12-1"
                                    class="bg-lightgreen padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">aerobics</button>
                                <div class="margin-10px-top font-size14">12:00-1:00</div>
                                <div class="font-size13 text-light-gray">Carla Lin</div>
                            </td>
                        </tr>

                        <tr>
                            <td class="align-middle">01:00pm</td>
                            <td>
                                <button type="submit" name="serviceday" value="cycling_1-2"
                                    class="bg-lightblue  padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">cycling</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">kate robinson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="zumba_1-2"
                                    class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">zumba</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">david smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="kickBoxing_1-2"
                                    class="bg-black padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">kickBoxing</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">carol fujo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="TRX_1-2"
                                    class="bg-violet padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">TRX</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">harry jibson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="tennis_1-2"
                                    class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">tennis</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">jack kuo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="DMT_1-2"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="aerobics_1-2"
                                    class="bg-lightgreen padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">aerobics</button>
                                <div class="margin-10px-top font-size14">1:00-2:00</div>
                                <div class="font-size13 text-light-gray">Carla Lin</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">02:00pm</td>
                            <td>
                                <button type="submit" name="serviceday" value="DMT_2-3"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="sauna_2-3"
                                    class="bg-red padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">sauna</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>

                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="tennis_2-3"
                                    class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">tennis</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">jack kuo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="volleyBall_2-3"
                                    class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">volleyBall</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">sam smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="zumba_2-3"
                                    class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">zumba</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">david smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="cycling_2-3"
                                    class="bg-lightblue padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">cycling</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">kate robinson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="pilates_2-3"
                                    class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">pilates</button>
                                <div class="margin-10px-top font-size14">2:00-3:00</div>
                                <div class="font-size13 text-light-gray">don curry</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">03:00pm</td>
                            <td>
                                <button type="submit" name="serviceday" value="kickBoxing_3-4"
                                    class="bg-black padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">kickBoxing</button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                                <div class="font-size13 text-light-gray">carol fujo</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="cycling_3-4"
                                    class="bg-lightblue padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">cycling
                                </button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                                <div class="font-size13 text-light-gray">kate robinson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="soccer_3-4"
                                    class="bg-treq padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">soccer</button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                                <div class="font-size13 text-light-gray">arnold shayto</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="pilates_3-4"
                                    class="bg-orange padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">pilates</button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                                <div class="font-size13 text-light-gray">don curry</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="sauna_3-4"
                                    class="bg-red padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">sauna</button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="volleyBall_3-4"
                                    class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">volleyBall</button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                                <div class="font-size13 text-light-gray">sam smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="TRX_3-4"
                                    class="bg-violet padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">TRX</button>
                                <div class="margin-10px-top font-size14">3:00-4:00</div>
                                <div class="font-size13 text-light-gray">harry jibson</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">04:00pm</td>
                            <td>
                                <button type="submit" name="serviceday" value="zumba_4-5"
                                    class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">zumba</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">david smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="yoga_4-5"
                                    class="bg-brown padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">yoga</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">wade thompson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="aerobics_4-5"
                                    class="bg-lightgreen padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">aerobics</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">Carla Lin</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="cycling_4-5"
                                    class="bg-lightblue padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">cycling</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">kate robinson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="TRX_4-5"
                                    class="bg-violet padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">TRX</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">harry jibson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="basketBall_4-5"
                                    class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">basketBall</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">robert danial</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="soccer_4-5"
                                    class="bg-treq padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">soccer</button>
                                <div class="margin-10px-top font-size14">4:00-5:00</div>
                                <div class="font-size13 text-light-gray">arnold shayto</div>
                            </td>
                        </tr>
                        <tr>
                            <td class="align-middle">05:00pm</td>
                            <td>
                                <button type="submit" name="serviceday" value="basketBall_5-6"
                                    class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">basketBall</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">robert danial</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="TRX_5-6"
                                    class="bg-violet padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">TRX</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">harry jibson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="zumba_5-6"
                                    class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">zumba</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">david smith</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="DMT_5-6"
                                    class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">DMT</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">fabian kuik</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="Yoga_5-6"
                                    class="bg-brown padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">wade thompson</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="soccer_5-6"
                                    class="bg-treq padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">soccer</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">arnold shayto</div>
                            </td>
                            <td>
                                <button type="submit" name="serviceday" value="tennis_5-6"
                                    class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">tennis</button>
                                <div class="margin-10px-top font-size14">5:00-6:00</div>
                                <div class="font-size13 text-light-gray">jack kuo</div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </form>

</body>

</html>
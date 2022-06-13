<?php


require_once('DatabaseManagers/adminDbManager.php');

$adminDBmanager = new adminDbManager();
?>

<!DOCTYPPE html>
    <html>
    <a href="Admin.php">logout</a>

    <head>
        <link rel="stylesheet" href="style/admin.css">
        <title> All users</title>

    </head>
    <style>

    </style>

    <body>



        <header>
            <h1>
                <?php
                session_start();
                echo 'welcome ' .  $_SESSION['AdminName'];
                ?>
            </h1>
        </header>
        <a href="message.php">all the messages from the users </a>
        <main>

            <?php
            //checking what happen if we click deleteUser button
            if (isset($_POST['deleteUser'])) {
                $userId = $_POST['deleteUser'];
                //geting removeUser function from adminDbmanager
                $adminDBmanager->removeUser($userId);
            }
            echo '<table>';
            echo '<caption>' . 'all users data '  . '</caption>';
            echo '<tr>';
            echo '<th>' . 'id'  . '</th>';
            echo '<th>' . 'username'  . '</th>';
            echo '<th>' . 'password'  . '</th>';
            echo '<th>' . 'email'  . '</th>';
            echo '<th>' . 'goal'  . '</th>';
            echo '<th>' . 'trainerName'  . '</th>';
            echo '<th>' . 'trainerId'  . '</th>';
            echo '<th>' . 'service'  . '</th>';
            echo '<th>' . 'serviceDay'  . '</th>';
            echo '<th>' . 'serviceTime'  . '</th>';
            echo '<th>' . 'deleteUser'  . '</th>';

            echo '</tr>';



            //geting getAllUsers function from adminDbmanager
            $users = $adminDBmanager->getAllUsers();

            //loop that print  all the details for each user in the Club
            while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                //Fetch each user and place its html row  
                echo '<form  method=post>';
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['password'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['goal'] . '</td>';
                echo '<td>' . $row['trainerName'] . '</td>';
                echo '<td>' . $row['trainerId'] . '</td>';
                echo '<td>' . $row['service'] . '</td>';
                echo '<td>' . $row['serviceDay'] . '</td>';
                echo '<td>' . $row['serviceTime'] . '</td>';
                echo '<td>' . '<button type=submit class="deleteUser" value=' . $row['id'] . '  name="deleteUser">' . 'deleteUser' . '</button>' . '</td>';
                echo '</tr>';

                echo '</form>';
            }

            echo '</table>';

            ?>
        </main>
    </body>

    </html>
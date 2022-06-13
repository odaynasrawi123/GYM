<?php


require_once('DatabaseManagers/trainerDBmanger.php');

$trainerDBmanager = new trainerDBmanger();
?>

<!DOCTYPPE html>
    <html>
    <a href="trainer.php">logout</a>

    <head>
        <link rel="stylesheet" href="style/admin.css">
        <title> messages</title>

    </head>

    <body>
        <header>

            <h1>users masseges </h1>

        </header>
        <a href="trainerPage.php">back to users </a>
        <main>
            <?php
            echo '<table>';
            echo '<caption>' . 'users-masseges'  . '</caption>';
            echo '<tr>';
            echo '<th>' . 'id'  . '</th>';
            echo '<th>' . 'username'  . '</th>';
            echo '<th>' . 'email'  . '</th>';
            echo '<th>' . 'trainerName'  . '</th>';
            echo '<th>' . 'trainerMessage'  . '</th>';
            echo '</tr>';
            //geting getAllUsers function from adminDbmanager
            $users = $trainerDBmanager->getTrainerMasseges($ok);
            //loop that print  all the details for each user in the Club
            while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                //Fetch each user and place its html row  
                echo '<form  method=post>';
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['trainerName'] . '</td>';
                echo '<td>' . $row['trainerMessage'] . '</td>';
                echo '</tr>';
                echo '</form>';
            }
            echo '</table>';

            ?>
        </main>
    </body>

    </html>
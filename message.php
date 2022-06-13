<?php


require_once('DatabaseManagers/adminDbManager.php');

$adminDBmanager = new adminDbManager();
?>

<!DOCTYPPE html>
    <html>
    <a href="Admin.php">logout</a>

    <head>
        <link rel="stylesheet" href="style/admin.css">
        <title> messages</title>

    </head>
    <style>

    </style>

    <body>



        <header>

            <h1>users masseges </h1>

        </header>
        <a href="adminPage.php">back to users </a>
        <main>

            <?php


            echo '<table>';
            echo '<caption>' . 'users-masseges'  . '</caption>';
            echo '<tr>';
            echo '<th>' . 'id'  . '</th>';
            echo '<th>' . 'username'  . '</th>';
            echo '<th>' . 'email'  . '</th>';
            echo '<th>' . 'trainerName'  . '</th>';
            echo '<th>' . 'trainerId'  . '</th>';
            echo '<th>' . 'service'  . '</th>';
            echo '<th>' . 'adminMessage'  . '</th>';
            echo '<th>' . 'trainerMessage'  . '</th>';
            echo '</tr>';



            //geting getAllUsers function from adminDbmanager
            $users = $adminDBmanager->getAllMasseges();
            //loop that print  all the details for each user in the Club
            while ($row = $users->fetch(PDO::FETCH_ASSOC)) {
                //Fetch each user and place its html row  
                echo '<form  method=post>';
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['trainerName'] . '</td>';
                echo '<td>' . $row['trainerId'] . '</td>';
                echo '<td>' . $row['service'] . '</td>';
                echo '<td>' . $row['adminMessage'] . '</td>';
                echo '<td>' . $row['trainerMessage'] . '</td>';
                echo '</tr>';
                echo '</form>';
            }
            echo '</table>';

            ?>
        </main>
    </body>

    </html>
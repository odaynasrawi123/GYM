<?php
require("dbClass.php");


class trainerDBmanger extends dbClass
{

    //function that access admin login 
    public function loginTrainer($trainerName, $TrainerPass)
    {

        $this->connect();
        $encPass = md5($TrainerPass);
        $query = "SELECT * FROM trainer WHERE trainerName= '$trainerName' and trainerPass = '$TrainerPass '";
        $result = $this->connection->query($query);
        $this->disconnect();
        return $result->rowCount() > 0;
    }
    //function that return the trainer
    public function getTrainer($TrainerPass)
    {
        $this->connect();
        $query = "SELECT users.id,users.username,users.goal,users.email FROM users WHERE trainerID = '$TrainerPass ' ";
        $result = $this->connection->query($query);
        $this->disconnect();
        return $result;
    }
    //function that return the trainer name
    public function getTrainerName($TrainerPass)
    {

        $this->connect();
        $query = "SELECT trainerName FROM trainer WHERE trainerPass = '$TrainerPass ' ";
        $result = $this->connection->query($query);
        $this->disconnect();
        return $result;
    }
    //function that return the trainer messages
    public function getTrainerMasseges($trainerPass)
    {
        $this->connect();
        $query = "SELECT trainerId,id,username,trainerMessage from users where trainerId=$trainerPass";
        //Execute query
        $result = $this->connection->query($query);

        //Disconnect from database
        $this->disconnect();

        //Return result
        return $result;
    }
    //function that return the trainer details
    public function getTrainerDetails($TrainerPass)
    {

        $this->connect();
        $query = "SELECT trainerName ,trainerPass,phoneNumber,email From trainer where trainerPass='$TrainerPass' ";
        $result = $this->connection->query($query);
        $this->disconnect();
        return $result;
    }
}
<?php
require("dbClass.php");


class adminDbManager extends dbClass
{
  //function that access admin login 
  public function loginAdmin($adminuser, $adminPass)
  {

    $this->connect();
    $encPass = md5($adminPass);
    $query = "SELECT * FROM admin WHERE adminUserName= '$adminuser' and adminPassword = '$adminPass '";

    $result = $this->connection->query($query);
    $this->disconnect();
    return $result->rowCount() > 0;
  }
  //function to get all users
  public function getAllUsers()
  {
    $this->connect();
    $query = "SELECT username, password, id ,email,goal,trainerName,trainerId,service,serviceDay,serviceTime from users";
    //Execute query
    $result = $this->connection->query($query);

    //Disconnect from database
    $this->disconnect();

    //Return result
    return $result;
  }
  //function to get all trainers
  public function getAllTrainers()
  {
    $this->connect();
    $query = "SELECT trainerName,trainerId from users";
    //Execute query
    $result = $this->connection->query($query);

    //Disconnect from database
    $this->disconnect();

    //Return result
    return $result;
  }
  //function to get all services
  public function getAllservices()
  {
    $this->connect();
    $query = "SELECT service from users";
    //Execute query
    $result = $this->connection->query($query);

    //Disconnect from database
    $this->disconnect();

    //Return result
    return $result;
  }
  public function getAllMasseges()

  {
    $this->connect();
    $query = "SELECT id,username,email,trainerName,trainerId,service,adminMessage,trainerMessage from users";
    //Execute query
    $result = $this->connection->query($query);

    //Disconnect from database
    $this->disconnect();

    //Return result
    return $result;
  }

  //function to remove User 
  public function removeUser($userId)
  {
    //connect to database
    $this->connect();
    //query
    $query = "DELETE  from users where id=$userId";
    //Execute query
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();

    //Disconnect from database
    $this->disconnect();

    //Return result
    return $affectedRows > 0;
  }


  //function to get the most trainer who has most users
  public function getMostTrainer()
  {
    //connect to database
    $this->connect();
    $query = "SELECT trainerName,COUNT(trainerName) AS `value_occurrence` FROM users
      GROUP BY  trainerName ORDER BY `value_occurrence` DESC LIMIT  1";


    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function to get the most service who has most users
  public function getMostService()
  {
    //connect to database
    $this->connect();
    $query = "SELECT service,COUNT(service) AS `value_occurrence` FROM users
      GROUP BY  service ORDER BY `value_occurrence` DESC LIMIT  1";


    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function to get the most serviceDay who has most users
  public function getMostDay()
  {
    //connect to database
    $this->connect();
    $query = "SELECT serviceday,COUNT(serviceday) AS `value_occurrence` FROM users
      GROUP BY  serviceday ORDER BY `value_occurrence` DESC LIMIT  1";
    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users 
  public function getUsers()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "select count(id)as username from users";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for Zumba
  public function Zumba()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='zumba'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for Soccer
  public function Soccer()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='soccer'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for Tennis
  public function Tennis()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='tennis'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for BasketBall
  public function Basketball()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='basketball'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for VolleyBall
  public function VolleyBall()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='volleyBall'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for Cycling
  public function Cycling()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='cycling'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for Pilates
  public function Pilates()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='pilates'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
  //function that count users who assigned for yoga
  public function Yoga()
  {
    //connect to database
    $this->connect();
    //get how many users 
    $query = "SELECT id, COUNT(id) as id FROM users WHERE service='yoga'";

    $result = $this->connection->query($query);
    //Disconnect from database
    $this->disconnect();
    return $result;
  }
}
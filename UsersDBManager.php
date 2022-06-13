<?php
require_once("DatabaseManagers/dbClass.php");



class UsersDBManager extends dbClass
{

  //getUser by username/email
  public function GetUser($username, $email)
  {
    $this->connect();

    $user_check_query = " SELECT  * FROM users WHERE username= '$username' or email= '$email' LIMIT 1 ";

    $result = $this->connection->query($user_check_query);
    $user = $result->fetch(PDO::FETCH_ASSOC);
    $this->disconnect();

    return $user;
  }

  //register user
  public function registerUser($username, $email, $password)
  {
    $this->connect();
    $encPass = md5($password);
    $reg_query = "INSERT INTO users (username, email, password)
        VALUES ('$username','$email','$encPass')";
    $query = $this->connection->query($reg_query);
    $affectedRows = $query->rowCount();
    $this->disconnect();
    if ($affectedRows > 0)
      return $this->connection->lastInsertId();
    else
      return false;
  }

  //Returns login result
  public function loginUser($username, $password)
  {
    $this->connect();
    $encPass = md5($password);
    $query  = "SELECT * FROM users WHERE username='$username' AND password='$encPass'";
    $result = $this->connection->query($query);
    $this->disconnect();
    return $result;
  }
  //assign Goal
  public function assignGoal($userid, $goal)
  {
    $this->connect();
    $query = "UPDATE users SET goal = '" . $goal . "' WHERE id =" . $userid;
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }

  //change goal
  public function changeGoal($userid, $goal)
  {
    $this->connect();
    $query = "UPDATE users SET goal = '$goal' WHERE id='$userid' ";
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }
  //assign trainerid
  public function assignTrainerId($userid, $trainerId)
  {
    $this->connect();
    $query = "UPDATE users SET trainerId = '" . $trainerId . "' WHERE id =" . $userid;
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }
  //assign trainerName
  public function assignTrainerName($userid, $trainerName)
  {
    $this->connect();
    $query = "UPDATE users SET trainerName = '" . $trainerName . "' WHERE id =" . $userid;
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }
  //assign service
  public function assignService($userid, $service)
  {
    $this->connect();
    $query = "UPDATE users SET service = '" . $service . "' WHERE id =" . $userid;
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }
  //assign serviceDay
  public function assignServiceDay($userid, $serviceDay)
  {
    $this->connect();
    $query = "UPDATE users SET serviceday = '" . $serviceDay . "' WHERE id =" . $userid;
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }
  //assign serviceTime
  public function assignServiceTime($userid, $serviceTime)
  {
    $this->connect();
    $query = "UPDATE users SET serviceTime = '" . $serviceTime . "' WHERE id =" . $userid;
    $result = $this->connection->query($query);
    $affectedRows = $result->rowCount();
    $this->disconnect();
    return $affectedRows > 0;
  }


  //function to print all user data 
  public function GetUserDetails($userid)
  {
    //connect to dataBase
    $this->connect();
    //query
    $query = "SELECT username, password, id ,email,goal,trainerName,trainerId,service,serviceDay,serviceTime,adminMessage,trainerMessage  from users WHERE id=$userid";
    $result = $this->connection->query($query);

    //Disconnect from database
    $this->disconnect();

    //Return result
    return $result;
  }
}
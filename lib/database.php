<?php
include '..\config\config.php';

class Database {
  public $servername = servername;
  public $username = username;
  public $password = password;
  public $databaseName = databaseName;
  public $conn;

  public function __construct() {
    $this->connect();
  }

  public function connect (){
    $this ->conn = new mysqli($this ->servername, $this -> username, $this -> password,  $this -> databaseName);
    // Check connection
    if ($this ->conn->connect_error) {
    die("Connection failed: " . $this ->conn->connect_error);
    }
    // echo "Connected successfully </br>";
  }
  
  public function insert($query){
    $result = $this ->conn -> query($query);
    return $result;
  }
  public function selectAll($query){
    $result = $this ->conn -> query($query);
    return $result;
  }
  public function select($query){
    $result = $this ->conn -> query($query);
    return $result;
  }
  public function update($query){
    $result = $this ->conn -> query($query);
    return $result;
  }
  public function delete($query){
    $result = $this ->conn -> query($query);
    return $result;
  }

  // cart
  // public function cart($query){
  //   $result = $this ->conn -> query($query);
  //   return $result;
  // }
}
?>
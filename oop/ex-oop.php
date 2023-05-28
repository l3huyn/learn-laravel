<?php 
// Bài tập OOP
class User {
  private $username;
  private $password;
  private $db_username = 'l3huyn';
  private $db_password = 'lehuynh123';

  //Hàm set giá trị username và password
  public function setInfo($username, $password) {
    $this -> username = $username;
    $this -> password = $password;
  }

  //Hàm checkLogin
  public function checkLogin() {
    if($this -> db_username === $this -> username && $this -> db_password === $this -> password) {
      echo "Login successful";
    } else {
      echo "Login failed";
    }
  }
}

$user = new User();
$user -> setInfo("l3huyn", "lehuynh123");
$user -> checkLogin();



?>
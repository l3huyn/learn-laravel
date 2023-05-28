<?php 

class Demo {
  public $attr_1;
  private $attr_2;
  protected $attr_3 = 40;

  public function show() {
    return $this -> attr_1;
  }


}

class User extends Demo {
  function __construct() {
    echo $this -> attr_3;
  }
}
new User();

// $a = new Demo;
// $a -> attr_1 = 26;
// echo $a -> show();

?>
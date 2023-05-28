<?php

class Demo {
  private $attr_1;

  public function setValue($value) {
    $this -> attr_1 = $value;
  }

  public function getValue() {
    return $this -> attr_1;
  }
}

// $a = new Demo;
// $a->setValue(20);
// echo $a -> getValue();


//-------------------------VD-----------------------------------//
class Rectangle
{

  private $width;
  private $height;

  public function setValue($width, $height) {
    $this -> width = $width;
    $this -> height = $height;
  }

  //Khai báo phương thức tính chu vi
  public function getPerimeter()
  {
    return 2 * ($this->width + $this->height);
  }

  //Khai báo phương thức tính diện tích
  public function getArea()
  {
    return $this->width * $this->height;
  }
}

$b = new Rectangle;
$b -> setValue(6, 8);
echo $b->getPerimeter();



?>
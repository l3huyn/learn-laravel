<?php

class Rectangle
{

  //Khai báo thuộc tính với giá trị mặc định ban đầu
  public $width;
  public $height;

  //Khai báo hàm xây dựng
  public function __construct()
  {
    $this -> width = 12;
    $this -> height = 30;
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

//Khởi tạo đối tượng mới
$a = new Rectangle();


//Gọi phương thức
echo $a->getPerimeter();
echo $a->getArea();

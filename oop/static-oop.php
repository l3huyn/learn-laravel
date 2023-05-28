<?php

class Rectangle
{
  //Khai báo thuộc tính với giá trị mặc định ban đầu
  public static $width;
  public static $height;
  //Khai báo phương thức tính chu vi
  public static function getPerimeter()
  {
    return 2 * (self::$width + self::$height);
  }
  //Khai báo phương thức tính diện tích
  public static function getArea()
  {
    return self::$width * self::$height;
  }
}


class Demo
{
  function __construct()
  {
    Rectangle::$width = 15;
    Rectangle::$height = 12;

    echo Rectangle::getPerimeter();
  }
}

//Khởi tạo nhưng không cần gán biến
new Demo;


// Rectangle::$width = 10;
// Rectangle::$height = 12;

// echo Rectangle::getPerimeter();

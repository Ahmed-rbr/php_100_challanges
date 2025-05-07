<?php
//  Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.
abstract class Shape{

  abstract public  function calculateArea();

}
class Triangle extends Shape{
  protected $arey;
  protected $length ;
  protected $width ;
  
  public function __construct($width,$length)
  {
    $this->width=$width;
    $this->length=$length;
  }

  public function calculateArea()
  {
    return $this->arey =($this->length * $this->width)*0.5;

  }
 } 
 
 class Rectangle extends Shape{
  protected $arey;
  protected $length ;
  protected $width ;
  
  public function __construct($width,$length)
  {
    $this->width=$width;
    $this->length=$length;
  }

  public function calculateArea()
  {
    return $this->arey=$this->length* $this->width;
  }
 }
 
 $triangle = new Triangle(5, 7);
echo "Triangle Area: " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "Rectangle Area: " . $rectangle->calculateArea() . "</br>";

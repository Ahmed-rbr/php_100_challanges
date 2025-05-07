<?php
// Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter.
class Rectangle{
  protected $arey;
  protected $perimeter ;
  protected $length ;
  protected $width ;
  
  public function __construct($width,$length)
  {
    $this->width=$width;
    $this->length=$length;
  }
  protected function calculateArey($length,$width)
  {
return $this->arey=$this->length* $this->width;

  }  
  
protected function calculatePerimeter($length,$width)
  {
return $this->perimeter =2*($this->length + $this->width);

  }

}

<?php
// Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference.
class Circle{
  protected $arey;
  protected $radius;
public $pi;
  protected $circumference  ;
  public function __construct($radius)
  {
    $this->radius=$radius;
  }
  protected function calculateArey($length,$width)
  {
    $this->pi=pi();
return $this->arey=$this->pi*$this->radius*$this->radius;

  }  
  
protected function calculateCircumference($length,$width)
  {    $this->pi=pi();

return $this->circumference =2*($this->pi*$this->radius);

  }

}

<?php
class Person{
protected $name;
protected $age;

public function __construct($name,$age)
{
  $this->name=$name;
  $this->age=$age;
}

public function __toString()
{
 return  "my name is $this->name i'm    $this->age y old;";
}




}
class Employee extends Person{
protected $salary;
protected $position;

public function __construct($name,$age,$salary,$position)
{
  parent::__construct($name,$age);
  $this->salary=$salary;
  $this->position=$position;
}
public function __toString()
{
 return  "my name is $this->name i'm    $this->age y old i work as $this->position my salary is $this->salary.";
}


}


$employee=new Employee('ahmed',24,'manger',2000);
echo $employee->__toString();
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



$person=new Person('ahmed',24);

echo $person->__toString();
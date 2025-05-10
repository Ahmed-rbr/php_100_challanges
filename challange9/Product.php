<?php
class Product{
protected $name;
protected $price;

public function __construct($name,$price)
{
  $this->name=$name;
  $this->price=$price;
}
    public function comparePrice($otherProduct){
if($this->price>$otherProduct->price){
  echo "$this->name is more expensive than $otherProduct->name";

}elseif($this->price<$otherProduct->price){
  echo "$this->name is cheaper than $otherProduct->name";

}
else{
  echo "Both products have the same price.";

}
      return $this->price;
    }


}

interface Comparable {
    public function comparePrice($otherProduct);
}

$product1=new Product('pizza',20090);
$product2=new Product('tajin',2400);

 $product1->comparePrice($product2);
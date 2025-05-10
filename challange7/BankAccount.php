<?php
class BankAccount{
protected $accountNumber;
protected $balance=0;




public function registerAccountNumber(){
$length = 5;

$this->accountNumber=rand(1,1);

}


public function getAccountNumber(){

  return   "your account number: $this->accountNumber".'</br>';
}


public function deposit($amount){


  if($amount<=0){
    echo 'enter amount bigger then 0'.'</br>';
    return;
  }

$this->balance=$this->balance+$amount;

echo "the balance is up by $amount".'</br>';

}



public function getBalance(){

  return   " your  balance is $this->balance ".'</br>';

}
public function withdraw($amount){
if($amount > $this->balance){
    echo 'the amount is  bigger than your balance'.'</br>';
    return;
  }
$this->balance=$this->balance-$amount;

      echo "done. your new balance is $this->balance ".'</br>';

  
}

}



$client1=new BankAccount();
$client2=new BankAccount();
$client3=new BankAccount();


$client1->registerAccountNumber();

echo $client1->getAccountNumber();
echo $client1->getBalance().'</br>';


$client1->deposit(-300).'</br>';

echo $client1->getBalance().'</br>';
echo $client1->withdraw(300).'</br>';


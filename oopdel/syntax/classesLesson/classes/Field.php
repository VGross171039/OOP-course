<?php 

// Класс состоящий только из полей

class Fields
{
  public $firstName;
  public $lastName;
  public $email;
  public $code;
  public $number;
  public $country;
  public $region;
  public $city;
}

class Name 
{
  public $first;
  public $last;
}

class Phone 
{
  public $code;
  public $number;
}

class Address 
{
  public $country;
  public $region;
  public $city;
}

// ==================================================================

// Data Transfer Object - DTO 
// Псевдообьект для передачи данных

function printReport(Name $name, $email, Phone $phone, Address $address)
{
  echo $address->country;
}

?>
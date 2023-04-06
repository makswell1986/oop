<?php

class Employee {
 public $name;
 public $age;
 public $salary;


}


 
$user= new Employee;
$user->name='Jonh';
$user->age=36;
$user->salary=1500;


$user2= new Employee;
$user2->name='Eric';
$user2->age=35;
$user2->salary=1200;

echo $user->salary+$user2->salary."<br>";
echo $user->age+$user2->age;


?>
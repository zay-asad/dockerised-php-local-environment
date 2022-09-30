<?php

 class Person {
     //properties
     private string $name;
     private string $eyeColour;
     private int $age;
     private int $yearsOfCoding;

     //adding a constructor, which gets executed right after we create a new object
     //later on when we create objects based off this class, then we can assign the values to the object
     public function __construct(string $name, string $eyeColour, int $age, int $yearsOfCoding) {
         $this->name = $name;
         $this->eyeColour = $eyeColour;
         $this->age = $age;
         $this->yearsOfCoding = $yearsOfCoding;
     }

     //static properties/methods are used when you want to create properties/methods that don't have to be part of an object
     public static int $drivingAge = 18;

     
     //methods
     public function setName($name) {
         //referencing the property above, name of the variable could be anything $newName or $name
         $this->name = $name;
     }

     public function getName(): string
     {
         return $this->name;
     }

     public function setEyeColour($eyeColour) {
        $this->eyeColour = $eyeColour;
     }

     public function getEyeColour(): string
     {
         return $this->eyeColour;
     }

     public function setAge($age){
        $this->age = $age;
     }

     public function getAge() {
        return $this->age;
     }

     public function setYearsOfCoding($yearsOfCoding) {
        $this->yearsOfCoding = $yearsOfCoding;
     }

     public function getYearsOfCoding(): int
     {
        return $this->yearsOfCoding;
     }

     //static methods

     public function setDrivingAge($drivingAge) {
        self::$drivingAge = $drivingAge;
     }

     public function getDrivingAge(): int
     {
        return self::$drivingAge;
     }

 }

?>
<!-- include external file -->

<?php
    include 'PersonClass.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>OOP Class Example</title>
</head>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap Nav
  </a>

<!-- boostrap spinner -->
  <div class="spinner-border text-info" role="status">
  <span class="visually-hidden"></span>
  </div>

</nav>

<body>


<!-- results -->
<div class="container">

    <h4>Results</h4>
    <?php
    // //instantiate a new object from the class
    // $person1 = new Person();
    // $person1->setName("Tom");
    // echo $person1->name;

    $person2 = new Person("Tom", "brown", 20, 1);
    // echo $person2->setName("Paul"); //if I want to change the name
    // unset($person2); //destroy the object
    echo $person2->getName();
    echo "<br>"; //line break
    echo $person2->getEyeColour();
    echo "<br>";
    echo $person2->getAge();
    echo "<br>";
    echo $person2->getYearsOfCoding();

    echo "<br>";
    echo "<br>";

    //need to pass in construct arguments to initialise the object
    $person3 = new Person("John", "blue", 25, 2);

    echo $person3->getName();
    echo "<br>"; //line break
    echo $person3->getEyeColour();
    echo "<br>";
    echo $person3->getAge();
    echo "<br>";
    echo $person3->getYearsOfCoding();

    echo "<br>";

    //access static methods
    echo "<br>";
    echo "<br>";

    echo "The legal driving age is: " . Person::$drivingAge; //access static property without having to create a new object

    ?>
</div>


</body>
</html>
<?php

include 'ListEntity.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>


<div class="container">
    <h1>Hello, world!</h1>

    <!-- php script -->
    <?php
    $title = "echo something";
    echo "$title";

    echo "<br>";

    //creating new object
    $list = new \App\ListEntity();

    //setting fields
    $list->setListId(20);
    $list->setListName('testList');
    $list->setPublishDate('02-02-2022');

    echo $list->getListId();
    echo "<br>";
    echo $list->getListName();
    echo "<br>";
    echo $list->getPublishDate();
    echo "<br>";
    ?>

</div>
</html>
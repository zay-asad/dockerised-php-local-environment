<?php

echo "Hello from the docker yooooo container";

echo "<br>";


//db connection & insert data

$mysqli = new mysqli("db", "root", "example", "employees");

$sql = "INSERT INTO users (name, job_title) VALUES('Jack', 'Developer')";
$result = $mysqli->query($sql);

$sql = "INSERT INTO users (name, job_title) VALUES('Tom', 'Tester')";
$result = $mysqli->query($sql);

$sql = "INSERT INTO users (name, job_title) VALUES('Amy', 'BA')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->name . " " . $user->job_title;
    echo "<br>";
}
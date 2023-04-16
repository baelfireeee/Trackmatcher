<?php
$connection = mysqli_connect('localhost:3306', 'chilipino30', 'p@ssWord2016');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'trackmatcher');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$db = mysqli_connect('localhost:3306','chilipino30','p@ssWord2016','trackmatcher');

?>
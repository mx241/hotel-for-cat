
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


$host="localhost";
$userh="root";
$passh="";
$DB="oo";
$m="mohamed";

$name= $_POST['name'];
$phone=$_POST['phone'];
$num=$_POST['num'];
$day=$_POST['day'];
$conn= new mysqli($host , $userh , $passh , $DB);

$stm="INSERT INTO NEW VALUES ('$name', '$phone' ,'$day' ,'$num');";
$conn->query($stm);


header('location:price.php');



}




?>
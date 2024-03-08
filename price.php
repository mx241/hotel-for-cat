<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="hotel.css" />
</head>
<body>
<form>

<h1> Total price </h1>
    
</form>
</body>
</html>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


$host="localhost";
$userh="root";
$passh="";
$DB="oo";
$m="mohamed";

$name= $_POST['name'];
$phone=$_POST['phone'];
$num=$_POST['Room'];
$day=$_POST['day'];




if($num=[1,2,3,4,5,6,7,8,9,10]){

$price = 200; 

} 

elseif($num=[11,12,13,14,15,16,17,18,19,20]){

    $price = 300;
    
    }

    elseif($num=[21,22,23,24,25,26,27,28,29,30]){

        $price = 400;

    }

    echo "cash: " . $price * $day;

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="hotel.css" />
</head>
<body>
<form action="select.html" method="post">

<br>

<h3> Available rooms now </h3>

</form>
</body>
</html>

<?php


    $arr = ['Room 1', 'Room 2 ' , 'Room 3', 'Room 4' ,'Room 5', 'Room 6' , 'Room 7', 'Room 8','Room 9','Room 10', 'Room 11 ' , 'Room 12', 'Room 13' ,'Room 14', 'Room 15' , 'Room 16', 'Room 17','Room 18','Room 19', 'Room 20'];


    unset($arr[1]);

    echo "<pre>";

    print_r($arr);

    echo "</pre>";

   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="hotel.css" />
</head>
<body>
<form action="select.html" method="post">


<br>
<input type="submit" name="back" value="back to home" />



    
</form>
</body>
</html>



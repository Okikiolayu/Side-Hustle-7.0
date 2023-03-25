<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week3</title>
</head>
<body>
    <?php 
    include 'week3.php';
    ?>

    <p>Welcome</p>

    <?php

    $connect = mysqli_connect('localhost','root','','weekthree task ');

    if($connected){
        echo "connected";
    }else{
        echo "not connected";
    }
    ?>
</body>
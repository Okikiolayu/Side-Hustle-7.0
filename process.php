<?php
require "header.php";

if(isset($_POST['save_student'])) {
    $name = $_POST['student_name'];
    $lastname = $_POST['last_name'];
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $gender = $_POST['student_gender'];
    $password = $_POST['password'];
    // $confirmpassword = $_POST['confirmpassword'];




    $insert_data = mysqli_query($db_connect, "INSERT INTO registration (firstname,lastname,username,email,gender,password)VALUES('$name','$lastname','$username','$email','$gender','$password')");

    if ($insert_data){
        header("Location: all-students.php");
    }
}


?>
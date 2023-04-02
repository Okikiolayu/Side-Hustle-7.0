<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> week 4</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>

    <h2>Registration</h2>
    
    <form action="process.php" method= "post">
        <label for="">FirstName:</label>
        <input type="text" name="student_name"><br><br>


        <label for="">Lastname:</label>
        <input type="text" name="last_name"><br><br>


        <label for="">Username:</label>
        <input type="text" name="user_name"><br><br>


        <label for="">email:</label>
        <input type="text" name="email" id="email"><br><br>


        <label for="">Gender:</label>
        <select name="student_gender">
        <option value="">Select Gender</option>
        <option value="M">male</option>
        <option value="F">female</option>
</select><br><br>


        <label for="">Password:</label>
        <input type="text" name="password" id="$pass"><br><br>

        <label for="">ConfirmPassword:</label>
        <input type="text" name="confirmpassword" id="$password"><br><br>



        <!-- javascript for if password -->

        if($pass != $password)
                {
                    echo "<script> alert(' Please enter same password')</script>";
                }
else
{
echo "<script> alert(' Entered password are same')</script>";


        <input type="submit" value="save" name="save_student">



</form>
</body>
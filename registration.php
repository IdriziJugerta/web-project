﻿<?php
require_once 'include/dbcon.php';

if (isset($_POST['submit'])) {
    
if(isset($_POST['g'])){
    $val= $_POST ['g'];
    if($val=="m"){
        $gjini = "mashkull";}
    else if ($val=="f"){
        $gjini = "femer";}
    }
    $username = mysqli_real_escape_string($conn, $_POST['un']);
    $emer = mysqli_real_escape_string($conn, $_POST['fn']);
    $mbiemer = mysqli_real_escape_string($conn, $_POST['ln']);
    $moshe = mysqli_real_escape_string($conn, $_POST['age']);
    $tel = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['psw']);
    $passRep = mysqli_real_escape_string($conn, $_POST['psw-repeat']);
    
    $sql_u = "SELECT * FROM user WHERE username='$username'";
  	$sql_e = "SELECT * FROM user WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
    $res_e = mysqli_query($conn, $sql_e);
      
    if(mysqli_num_rows($res_u)> 0 ){
        header("Location:registration.php?error=usernametaken");
    }else if(mysqli_num_rows($res_e)> 0){
        header("Location:registration.php?error=emailtaken");

    }else if($password!=$passRep){
        header("Location:registration.php?error=nomatch");
    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location:registration.php?error=invalidemail");
    }
    else
    {
    $sql = "INSERT INTO user (username, userPass, emer, mbiemer, moshe, gjini, telefon, email) VALUES ('$username','$password', '$emer' ,'$mbiemer','$moshe','$gjini','$tel','$email')";
    $rez = mysqli_query($conn, $sql)or die(mysqli_error($conn));
    if ($rez) {
       header("Location:login.php");
    }else{
        echo"sbehet";
    }
}
}
?>
<html>
<head>

    <link rel="stylesheet" href="loginStyle.css">

    <title>Registration</title>
</head>
<body>
    <img src="logo.png" class="logo" />
    <div class="mainREG">
        <form method="POST" action="">
            <div class="formEle">
                <p class="reg" align="center">Registration</p>
            <?php
            //do afishohen mesazhet perkatese per secilin error
                if (isset($_GET['error'])){
                if(($_GET['error'])=="nomatch"){
                echo'<p class="error">The password do not match.</p>';
                }else if (($_GET['error'])=="usernametaken") {
                echo'<p class="error">A user has already registered with this username.</p>';
                }
                else if (($_GET['error'])=="emailtaken") {
                    echo'<p class="error">A user has already registered with this email.</p>';
                    }
                else if (($_GET['error'])=="invalidemail") {
                    echo'<p class="error">Please enter a valid email.</p>';
                        }
                } 
                ?>

                    <label for="fn"><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="fn" required /><br>

                    <label for="ln"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="ln" required /><br>

                    <label for="un"><b>Username</b></label>
                    <input type="text" placeholder="Enter Userame" name="un" required /><br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required><br>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required><br>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

                    <label for="age"><b>Age</b></label>
                    <input type="number" placeholder="Enter Age" name="age" /><br>

                    <label for="phone"><b>Phone number</b></label>
                    <input type="number" placeholder="Enter Phone number" name="phone" /><br>
                    <label for="g"><b> Male</b></label><input type="radio" name="g" value="m" /><br>
                    <label for="g"><b> Female</b></label><input type="radio" name="g" value="f" /><br>

                    <button class="btn1" type="submit" name="submit">Register</button>

            </div>
        </form>
    </div>
</body>
</html>
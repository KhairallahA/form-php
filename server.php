<?php
session_start();
$username = "";
$password = "";
$email = "";
$errors = array();
$conn = mysqli_connect('localhost','root','');
$db = mysqli_select_db($conn, 'loginsh');


    if(isset($_POST['login']))
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $qu = "SELECT * FROM usere where username = '$username' and password = '$password'";
        $ress = mysqli_query($conn,$qu);

        if(empty($username)){
            array_push($errors, "Username is required");
        }

        else if(empty($password)){
            array_push($errors, "Password is required");
        }
    
        else if(mysqli_num_rows($ress) == 1){
            $_SESSION['username'] = $username;
            header("location: index.php");
        }
        else{
            array_push($errors, "No Register");
        }
        
    }




    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
        //$password = $_POST['password_1'] && $_POST['password_2'];

        if(empty($username)){
            array_push($errors, "Username is required");
        }
        else if(empty($email)){
            array_push($errors, "Email is required");
        }
        else if(empty($password_1)){
            array_push($errors, "Password is required");
        }
        else if($password_1 != $password_2){
            array_push($errors, "The two password do not match");
        }
        else if($password_1 && $password_2){
            if(preg_match('/^([a-zA-Z0-9]){7,20}+$/', $password_1)){
                header("location: login.php");
            }
            else{
                array_push($errors, "No password");
            }
        }

            $sql = "INSERT INTO usere (username,email,password)
            VALUES('$username','$email','$password_1')";
            mysqli_query($conn,$sql);

    }

    if(isset($_GET['logout'])){
        header("location: login.php");
    }

?>
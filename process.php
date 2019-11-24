
<?php
    session_start();

    require_once('connect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = $_POST['login'];

    if(isset($login)){
        
        if(empty($username) || empty($password)){

            header("location:index.php?Empty= Please Fill in the Blanks");

        }else{
            $query = "SELECT * FROM account WHERE username='".$username."' and password='".$password."'";

            $result = mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result)){
                $_SESSION['user'] = $username;
                header("location:wellcome.php");
            }else{
                header("location:index.php?InValid= Please Enter Correct User Name and Password");
            }
        }

    }else{
        echo 'Not cLCIK';
    }
?>
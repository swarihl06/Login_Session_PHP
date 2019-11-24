<?php
    session_start(); 
    if(isset($_SESSION['user'])){
        echo 'Well Come ' . $_SESSION['user'].'<br>';
        echo '<a href="logout.php?logout">Logout</a>';
    }else{
        header("location:index.php");
    }
?>
<?php
    session_start();
    if (($_POST['username'] == 'admin') and ($_POST['password'] == 'admin')) {
        $_SESSION['authuser'] = 1;
        $_SESSION['username'] = $_POST['username'];
    } else {
        $_SESSION['authuser'] = 0;
    }

    header('Location:index.php');

    //require_once "connect.php";
   // $connection = @new mysqli($host, $db_user, $password, $db_name);
    //open connection with databese, @ looked for mistakes and make it invisible
//add if for looking mistakes
  //  if($connection->connect_errno!=0){
   //     echo "Error:".$connection->connect_errno . "Description:" $connection->connect_error;
   // }else{
        //  $username = $_POST['username'];
        //  $password = $_POST['password'];
        // // echo "it works!"
        //  header('Location:index.php')
     //   $connection->close();//we nned to close connection
   // }

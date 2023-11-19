<?php
    require_once("db_methods.php");
    require_once("connectDB.php");

    $dbOperations = new dbOperations();
    $connectDB = new Connect();

    
    if(isset($_POST["deleteItem"])){
        $checkBox = $_POST["deleteItem"];

        $err = (int)
    
        $connectDB->setHostDB("[+] HOST HERE !");
        $connectDB->setNameDB("[+] DATABASE BANK !");
        $connectDB->setUserDB("[+] USER");
        $connectDB->setPassDB("[+] PASSWORD");

        $pdo = $connectDB->connect();
    
        $dbOperations->setPdo($pdo);
    
        foreach($checkBox as $value){
            $dbOperations->setIdItem($value);
            $dbOperations->deleteItems();

    
        }
    
        echo("<script>window.location.assign('../index.php')</script>");
   

    }else {
        echo("<script>alert('Please select some options to delete')</script>");
        echo("<script>window.location.assign('../index.php')</script>");

    }
    

?>
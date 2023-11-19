<?php

    require_once("classOperations.php");
    require_once("connectDB.php");
    require_once("db_methods.php");


    class DataReceive extends OperationsDataReceive {
        public function checkErr($err) {
            if($err >= 1){
                return true;
            }

        }

    }

    $connectDB = new Connect();
    $operationsDB = new dbOperations();
    $data = new DataReceive();

    $connectDB->setHostDB("[+] HOST HERE !");
    $connectDB->setNameDB("[+] DATABASE BANK !");
    $connectDB->setUserDB("[+] USER");
    $connectDB->setPassDB("[+] PASSWORD");
    
    $pdo = $connectDB->connect();

    $err = (int) 0;

    $err += $data->setSKU($_POST["sku"]);
    $err += $data->setName($_POST["name"]);
    $err += $data->setPrice($_POST["price"]);
    
    $err += $data->setTypeSelected($_POST["typeSelected"]);

    if($data->getTypeSelected() == "MB"){
        $err += $data->setSize($_POST["size"]);
        
        $operationsDB->setFkType(1);
        $operationsDB->setValueOfType($data->getSize());

    }else if($data->getTypeSelected() == "KG"){
        $err += $data->setWeight($_POST["weight"]);
        
        $operationsDB->setFkType(2);
        $operationsDB->setValueOfType($data->getWeight());

    }else if($data->getTypeSelected() == "HxWxL") {
        $err += $data->setHeight($_POST["height"]);
        $err += $data->setWidth($_POST["width"]);
        $err += $data->setLength($_POST["length"]);
        
        $operationsDB->setFkType(3);
        $operationsDB->setValueOfType($data->getHeight()."x".$data->getWidth()."x".$data->getLength());

    }
    
    $check = $data->checkErr($err);

    if($check == true){
        echo("<script>alert('Please fill all fields')</script>");
        echo("<script>window.location.assign('../addproduct.php')</script>");
        

    }else {
        $operationsDB->setPdo($pdo);
        $operationsDB->setSKU($data->getSKU());
        $operationsDB->setName($data->getName());
        $operationsDB->setPrice($data->getPrice());
        
        $operationsDB->insertItems();

    }


?>
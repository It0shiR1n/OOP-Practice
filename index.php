<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Assigment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!--Simple Stylesheet-->
    <style>       
    
        /* Body Stylecheet */
        body {
            background-color: #494d5f;
            height: 100%;

        }

        /* h1 Stylecheet */
        h1 {
            font-size: 40px;
            font-weight: 600;
            color: #fdfdfe;
            text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3,
                0px 0px 20px #b393d3;

        }


        /* a stylecheet */
        a {
            text-decoration: none;

        }

        /* class button-add-left stylecheet */

        .align-left-button-add {
            position: absolute;
            top: 15px;
            left: 85%;
            right: 50%;

        }

        /* class button-delete-left stylecheet */
        .align-left-button-delete {
            position: absolute;
            top: 15px;
            left: 90%;
            right: 80%;
            width: 150px;

        }


        /* class container stylecheet */
        .container {
            display: block;
            width: 100%;

        }


    </style>

    <form action="backend/massDelete.php" method="POST">
        <!-- Navbar with title and buttons-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php"><h1 class="title">Product List</h1></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a href="addproduct.php"><button type="button" class="btn btn-success align-left-button-add">ADD</button></a>
                <button type="submit" class="btn btn-danger align-left-button-delete">MASS DELETE</button>
            </div>
        </nav>

        <br>

        <!-- Items from DB in Cards -->
        <div class="container">
            <div class="row g-3">
                <?php

                    // Logic to generate the cards automatically using the data
                    // of the database
                    require_once("backend/connectDB.php");

                    $connectDB = new Connect();

                    $connectDB->setHostDB("[+] HOST HERE !");
                    $connectDB->setNameDB("[+] DATABASE BANK !");
                    $connectDB->setUserDB("[+] USER");
                    $connectDB->setPassDB("[+] PASSWORD");

                    $pdo = $connectDB->connect();
                
                    $query = $pdo->prepare("SELECT * FROM tb_items");
                    $query->execute();

                    $data = $query->fetchAll();
                
                    foreach($data as $value){

                ?>
                <div class="cardItem card col-md-4 col-6 m-3" style="width: 18rem;">
                    <div class="card-body">
                        <input type="checkbox" class=".delete-checkbox" name="deleteItem[]" value=<?php echo($value["id_item"]);?> style="position: relative; left: 230px;">
                        <p class="card-text">SKU: <?php echo($value["SKU"]);?></p>
                        <p class="card-text">Nome: <?php echo($value["name"]);?></p> 
                        <p class="card-text">Preço: <?php echo($value["price"]);?></p>
                        <p class="card-text"><?php echo($value["valueOfType"]);?></p> 
                    </div>
                </div>   
                
                <?php
                
                    }
                
                ?>
                
            </div>
        </div>
    
    </form>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
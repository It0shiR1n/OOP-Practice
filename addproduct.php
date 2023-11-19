<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Projeto/style/index.css">
    <title>ScandiWeb Assigment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body onload="loadForm()">
    <!--Simple stylesheet-->
    <style>

        /* Body Stylecheet */
        body {
            background-color: #494d5f;

        }

        /* H1 Stylecheet */
        h1 {
            font-size: 40px;
            font-weight: 600;
            color: #fdfdfe;
            text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3,
                0px 0px 20px #b393d3;

        }

        /* a Stylecheet */
        a {
            text-decoration: none;

        }

        /* input Stylecheet */
        input {
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;

        }


        /* form Stylecheet */
        form {
            text-align: center;

        }


        /* label Stylecheet */
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;

            font-size: 40px;
            font-weight: 50px;
            color: #fdfdfe;
            text-shadow: 0px 0px 5px #b393d3, 0px 0px 10px #b393d3, 0px 0px 10px #b393d3,
                0px 0px 20px #b393d3;

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

        }

        /* class container-data stylecheet */
        .container-data {
            flex-grow: 2; 
            font-size: 20px;

        }


    </style>


    <form id="product_form" id="" action="backend/add_product.php" method="POST">
        <!-- Navbar with title and buttons-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="index.php"><h1 class="title">Product List</h1></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button type="submit" class="btn btn-success align-left-button-add">Save</button>
                <a href="index.php"><button type="button" class="btn btn-danger align-left-button-delete">Cancel</button></a>
            </div>
        </nav>

        <br>

        <div class="container">
            <!-- Input SKU-->
            <div class="container-data">
                <label for="sku">SKU:</label>
                <input type="text" id="sku" name="sku"><br>
            </div>

            <!-- Input Name -->
            <div class="container-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br>
            </div>

            <!-- Input Price -->
            <div class="container-data">
                <label for="price">Price: </label>
                <input type="text" id="price" name="price"><br>
            </div>

            
            <!-- Input Options with MB,KG,HxWxL-->
            <div class="container-data">
                <label for="productType">Select the Unit of Measure</label>
                <select id="productType" onchange="selectedForm()" name="typeSelected">
                    <option value="MB" selected>DVD</option>
                    <option value="KG">Book</option>
                    <option value="HxWxL">Furniture</option>
                </select>

                <div id="sizeSelected">
                    <label for="size">Size (MB):</label>
                    <input type="text" name="size" id="size">
                </div>

                <div id="weightSelected" style="display: none;">
                    <label for="weight">Weight (KG):</label>
                    <input type="text" name="weight" id="weight">
                </div>

                <div id="HxWxLSelected" style="display: none;">
                    <label for="height">Height:</label>
                    <input type="text" name="height" id="height"><br>

                    <label for="width">Width:</label>
                    <input type="text" name="width" id="width"><br>

                    <label for="length">Length:</label>
                    <input type="text" name="length" id="length"><br>
                </div>
            </div>
            
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="script/addproduct.js"></script>

</body>
</html>
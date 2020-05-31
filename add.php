<?php
if (isset($_POST["submit"])){
    require_once "db-connection.php";

    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $size = $_POST["size"];
    $dimension = $_POST["dimension"];
    $weight = $_POST["weight"];

    DB::run("INSERT INTO products (SKU, name, price, parameter) VALUES ('$sku', '$name', '$price', '$size' OR '$dimension' OR '$weight') ");

    header("Location: /test-project/list.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts2.js"></script>
    <link  
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">
    <link   
            href="style.css"
            rel="stylesheet">
</head>
<body class="p-4">
        <div class="d-flex justify-content-between align-items-center pl-2 pr-2 pb-2 mb-5 border-bottom">
            <h1>
                    Product add
            </h1>
        </div>
        <div class="d-flex pl-2">
                <form action="/test-project/add.php" method="post">
                    <div class="form-group mb-2">
                            <label>
                                    SKU
                                    <input class="form-control mt-2" name="sku">
                            </label>
                    </div>
                    <div class="form-group mb-2">
                            <label>
                                    Name
                                    <input class="form-control mt-2" name="name">
                            </label>
                    </div>
                    <div class="form-group mb-2">
                            <label>
                                    Price
                                    <input class="form-control mt-2" name="price" type="number">
                            </label>
                    </div>
                    <div class="form-group mb-2">
                            <label for="atributte">Type switcher</label>
                            <select id="atributte" name="type" class="form-control type-switcher">
                                    <option selected>Choose correct type</option>
                                    <option value="dvd-disc">DVD-disc</option>
                                    <option value="book">Book</option>
                                    <option value="furniture">Furniture</option>
                            </select>
                    </div>
                    <div class="form-group mb-2 size-to-hide">
                            <label>
                                    Size
                                    <input class="form-control mt-2 size-required" name="size" aria-describedby="shelper">
                                    <small id="shelper" class="form-text text-muted">
                                            Please provide size in MB format
                                    </small>
                            </label>
                    </div>
                    <div class="form-group mb-2 dimension-to-hide">
                            <label>
                                    Height, Width, Length
                                    <input class="form-control mt-2 dimension-required" name="dimension" aria-describedby="dhelper">
                                    <small id="dhelper" class="form-text text-muted">
                                            Please provide dimensions in <br> 
                                            HxWxL format
                                    </small>
                            </label>
                    </div>
                    <div class="form-group mb-2 weight-to-hide">
                            <label>
                                    Weight
                                    <input class="form-control mt-2 weight-required" name="weight" aria-describedby="whelper">
                                    <small id="whelper" class="form-text text-muted">
                                            Please provide weight in Kg format
                                    </small>
                            </label>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit" name="submit">Save</button>
                </form>
        </div>
</body>
</html>

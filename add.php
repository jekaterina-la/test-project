<?php
if (isset($_POST["submit"])){
    require_once "db-connection.php";

    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $size = $_POST["size"];
    $dimension = $_POST["dimension"];
    $weight = $_POST["weight"];
    $parameter = $size ?: $dimension ?: $weight; 

    DB::run("INSERT INTO products (SKU, name, price, parameter) VALUES ('$sku', '$name', '$price', '$parameter') ");

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                <form action="/test-project/add.php" class="must-have-validation" novalidate method="post">
                    <div class="form-group mb-2">
                            <label>
                                    SKU
                                    <input class="form-control mt-2" name="sku" minlength="6" maxlength="10">
                                    <div class="invalid-feedback">Please write product SKU </br>
                                        min 6 characters </br> max 10 characters</div>
                            </label>
                            
                    </div>
                    <div class="form-group mb-2">
                            <label>
                                    Name
                                    <input class="form-control mt-2" name="name" required>
                                    <div class="invalid-feedback">Please write product name</div>
                            </label>
                    </div> 
                    <div class="form-group mb-2">
                            <label>
                                    Price
                                    <input class="form-control mt-2" name="price" type="number" min="1" max="1000" required>
                                    <div class="invalid-feedback">Please write product number</div>
                            </label>
                    </div>
                    <div class="form-group mb-2">
                            <label for="atributte">Type switcher</label>
                            <select id="atributte" name="type" class="form-control type-switcher" required>
                                    <option value="">Choose correct type</option>
                                    <option value="dvd-disc">DVD-disc</option>
                                    <option value="book">Book</option>
                                    <option value="furniture">Furniture</option>
                            </select>
                            <div class="invalid-feedback">Please choose product type</div>
                    </div>
                    <div class="form-group mb-2 size-to-hide">
                            <label>
                                    Size
                                    <input class="form-control mt-2 size-required" name="size" aria-describedby="shelper">
                                    <small id="shelper" class="form-text text-muted">
                                            Please provide size in MB format</br>
                                            Write "Size: " before MB
                                    </small>
                            </label>
                    </div>
                    <div class="form-group mb-2 dimension-to-hide">
                            <label>
                                    Height, Width, Length
                                    <input class="form-control mt-2 dimension-required" name="dimension" aria-describedby="dhelper">
                                    <small id="dhelper" class="form-text text-muted">
                                            Please provide dimensions in</br> 
                                            HxWxL format</br>
                                            Write "Dimension: " before HxWxL
                                    </small>
                            </label>
                    </div>
                    <div class="form-group mb-2 weight-to-hide">
                            <label>
                                    Weight
                                    <input class="form-control mt-2 weight-required" name="weight" aria-describedby="whelper">
                                    <small id="whelper" class="form-text text-muted">
                                            Please provide weight in KG format</br>
                                            Write "Weight: " before KG
                                    </small>
                            </label>
                    </div>
                    <button class="btn btn-primary mt-2" type="submit" name="submit">Save</button>
                </form>
        </div>
        <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('must-have-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
</body>
</html>

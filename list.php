<?php
require_once "db-connection.php";

$result = DB::run("SELECT * FROM products LIMIT 25");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
    <link  
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
            crossorigin="anonymous">
</head>
<body class="p-4">
    <div class="d-flex justify-content-between align-items-center pl-2 pr-2 pb-2 mb-5 border-bottom">
            <h1>
                    Product list
            </h1>
            <div>
            <button type="button" class="btn btn-outline-secondary dropdown-toggle mr-2" hidden>Mass Delete Action</button>
            <a href="/TEST-TASK/add.php" class="btn btn-primary">
                    Add product
            </a>
            <button class="btn btn-danger js-delete-row" data-id="<?= $row["id"]?>" hidden>
                    Apply
            </button>
            </div>
    </div>
    <div class="container">
            <div class="card-deck mb-3">
                    <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                    <div class="checkbox">
                                            <input type="checkbox" value="">
                                    </div>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <ul class="list-unstyled mt-2 mb-3 text-center">
                                            <li><?= $row["SKU"]?></li>
                                            <li><?= $row["name"]?></li>
                                            <li><?= number_format($row["price"], 2)?> $</li>
                                            <li>Size: <?= $row["parameter"]?></li>
                                        </ul>
                                    <?php } ?>
                                    
                            </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                    <div class="checkbox">
                                            <input type="checkbox" value="">
                                    </div>
                                    <ul class="list-unstyled mt-2 mb-3 text-center">
                                            <li>JVC200123</li>
                                            <li>Acme DISC</li>
                                            <li>100$</li>
                                            <li>Size: 700MB</li>
                                    </ul>
                            </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                    <div class="checkbox">
                                            <input type="checkbox" value="">
                                    </div>
                                    <ul class="list-unstyled mt-2 mb-3 text-center">
                                            <li>JVC200123</li>
                                            <li>Acme DISC</li>
                                            <li>100$</li>
                                            <li>Size: 700MB</li>
                                    </ul>
                            </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                    <div class="checkbox">
                                            <input type="checkbox" value="">
                                    </div>
                                    <ul class="list-unstyled mt-2 mb-3 text-center">
                                            <li>JVC200123</li>
                                            <li>Acme DISC</li>
                                            <li>100$</li>
                                            <li>Size: 700MB</li>
                                    </ul>
                            </div>
                    </div>
            </div>
    </div>
</body>
</html>
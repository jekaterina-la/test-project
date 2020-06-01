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
                    Product list
            </h1>
            <div>
            <button type="button" id="butt" class="btn btn-outline-secondary dropdown-toggle mr-2">Mass Delete Action</button>
            <button class="btn btn-danger" form="form_part" type="submit">
                    Apply
            </button>
            <a href="/test-project/add.php" class="btn btn-primary">
                    Add product
            </a>
            </div>
    </div>
    
    <div class="container">
            <div class="card-columns mb-3">
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                 <form method="post" action="/TEST-TASK/delete.php" id="form_part">
                                    <div class="checkbox">
                                            <input type="checkbox" name="productschoose[]" value="<?= $row['id'] ?>">
                                    </div>
                                    <ul class="list-unstyled mt-2 mb-3 text-center">
                                            <li><?= $row["SKU"]?></li>
                                            <li><?= $row["name"]?></li>
                                            <li><?= number_format($row["price"], 2)?> $</li>
                                            <li><?= $row["parameter"]?></li>
                                    </ul>
                                 </form>   
                            </div>
                    </div>
            <?php } ?> 
            </div>   
    </div>
    <script src="scripts.js"></script>
</body>
</html>
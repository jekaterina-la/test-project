<?php
    require_once "db-connection.php";
        
        if(isset($_POST['productschoose'])) {

            foreach($_POST['productschoose'] as $id) {
                $params .= ' ' . $id;
            }
            
          //  var_dump($_POST['productschoose'] as $id)
            $result = DB::run("DELETE FROM products WHERE id IN ($params)");

        }

        if (isset($_GET["redirect"]) && $_GET["redirect"] === false) {
        return;
        }

    header("Location: /test-project/list.php");
?>
<?php
    require_once "db-connection.php";
        
        // Query for delete action when rows are checked
        if(isset($_POST['productschoose'])) {

            // Loop through an array over each item to checked if checkbox is checked or not
            foreach($_POST['productschoose'] as $id) {
            $params = implode(',' , $_POST['productschoose']);
            }

            // All checked rows have been deleted from database
            $result = DB::run("DELETE FROM products WHERE id IN ($params)");
        }

        if (isset($_GET["redirect"]) && $_GET["redirect"] === false) {
        return;
        }
    // Redirect from delete.php page to list.php page
    header("Location: list.php");
?>
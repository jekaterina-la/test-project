<?php
    if (isset($_GET["id"])) {
        require_once "db-connection.php";

        $id = $_GET["id"];

        $result = DB::run("DELETE FROM products WHERE id=$id");
    }

    if (isset($_GET["redirect"]) && $_GET["redirect"] === false) {
        return;
    }
    header("Location: list.php");
?>
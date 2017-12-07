<?php


if (isset($_GET ["cantidad"])) {

    $cantidad = $_GET["cantidad"];


    if (is_numeric($cantidad)) {
        echo "<h1>" . ($cantidad*166.386) . "&euro;</h1>";


    } else {
        echo "FAIL";
    };
}
?>
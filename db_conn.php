<?php
    $servername = "localhost";
    $defaultdb = "root";
    $password = "";

    $db_name = "vechituri db";

    $conn = mysqli_connect($servername, $defaultdb, $password, $db_name);

    if(!$conn) {
        echo "Conexiunea la baza de date a esuat..";
    }

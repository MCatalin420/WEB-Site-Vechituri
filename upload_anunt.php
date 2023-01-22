<?php
session_start();
require 'navigator_part.php';
require 'head_part.php';
include "db_conn.php";

$numefisier = $_FILES["imagine"]["name"];
$folder = "uploaded_images/".basename($numefisier);
$autor = $_SESSION['user_name'];
$pret = $_POST['pret_produs'];
$nume = $_POST['nume_produs'];

if(isset($_POST["upload"])){
            mysqli_query($conn,"INSERT into produse(nume_produs, autor,imagine,pret) VALUES ('$nume','$autor','$numefisier','$pret')");
            if (move_uploaded_file($_FILES['imagine']['tmp_name'], $folder)) {
                echo "Produs incarcat cu succes!";
            }
        }else{
            echo "A aparut o eroare la incarcarea anuntului";
        }
?>
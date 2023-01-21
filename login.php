<?php
session_start();
include "db_conn.php";

function validate($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['username']) && isset($_POST['password'])) {   

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($username)) {
        header ("Location: index.php?error=Va rog introduceti un nume de utilizator.");
        exit();
    }
    else if(empty($pass)) {
        header ("Location: index.php?error=Va rog introduceti parola.");
        exit();
    }

    $sql = "SELECT * FROM users WHERE user_name='$username' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['user_name'] === $username && $row['password'] === $pass) {
            echo "Login successfully!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: home.php");
            exit();
        }
        else{
            header("Location: index.php?error=Username sau parola incorecte!");
            exit();
        }
    }
    else{
        header("Location: index.php?error=Contul nu exista!");
        exit();
    }
}
<?php
session_start();
include "db_conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_name, password)
    VALUES ('$name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Te-ai inregistrat cu succes!";
        header ("Location:index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<html>
<body>
<h1 class="titlucufont">Inregistrare</h1>
<form method="post" action="">
    Username: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    <br>
    <input type="submit" name="submit" value="Inregistrare">
</form>

</body>
</html>

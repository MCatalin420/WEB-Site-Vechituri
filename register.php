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

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vintage Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<html>

<body>

    <div class="loginbox d-flex aligns-items-center justify-content-center">
        <div class="mx-auto">
            <form method="post" action="">
            <h1 class="titlu-tabel">Inregistrare</h1>
                <div class="forminput">
                    <label>Username:</label>
                    <input type="text" name="username" placeholder="username">
                </div>

                <br>
                <div class="forminput">
					<label>Password: </label>
					<input type="password" name="password" placeholder="password">
				</div>

				<br>
                <input type="submit" name="submit" value="Inregistrare">
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
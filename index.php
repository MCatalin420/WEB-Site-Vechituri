<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="loginbox d-flex aligns-items-center justify-content-center">
		<div class="mx-auto">
			<form class="form" action="login.php" method="post">
				<h1 class="titlucufont">Login</h1>
				<br>
				<?php if(isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
				<?php
				} ?>
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
				<div class="col-md-12 text-center">
					<button type="submit" class="btn btn-primary">Login</button>
				</div>
				<br>
				<p>Utilizator nou? </p>
				<p>Inregistreaza-te aici: <a href="register.php">Inregistrare</a></p>


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
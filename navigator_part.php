<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">Vintage Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Acasa<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="anunturi.php">Toate anunturile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="anunturile_mele.php">Anunturile mele</a>
                </li>
            </ul>
            <span class="navbar-text">
                Bine ai venit, <a href="profil.php"><?php echo $_SESSION['user_name']; ?></a>
            </span>
            <a href="logout.php" class="logout">Logout</a>
        </div>
    </nav>
    <br>
    <br>
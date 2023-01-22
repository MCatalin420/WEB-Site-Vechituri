<?php
session_start();
include "db_conn.php";

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
require 'head_part.php';
$query="SELECT * FROM produse ORDER BY id DESC LIMIT 3";
if ($result_set = mysqli_query($conn,$query)) {
    $imagini = array();
    $i = 1;
    while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
        $imagini[$i] = $row['imagine'];
        $i = $i + 1;
    }
}

?>

<body>
    <?php
    require 'navigator_part.php';

    ?>
    <div class="container-home">
        <h3>Cauti obiecte vechi de vanzare? </h3>
           <h3>Esti colectionar?</h3>
           <h3> Atunci ai ajuns unde trebuie!</h3> 
           <h3>Aici o sa gasesti tot ce iti poti imagina in materie de obiecte vintage.</h3>   
           
            
        </h3>
    </div>
    <h1 class="text-center titlu-carusel">Obiecte noi:</h1>
    <div class="carusel d-flex aligns-items-center justify-content-center">
        <div class="mx-auto">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <?php
                            echo "<img class='d-block w-75' src='uploaded_images/$imagini[1]' alt='First slide'>";
                        ?>
                        
                    </div>
                    <div class="carousel-item">
                    <?php
                            echo "<img class='d-block w-75' src='uploaded_images/$imagini[2]' alt='Second slide'>";
                        ?>
                    </div>
                    <div class="carousel-item">
                    <?php
                            echo "<img class='d-block w-75' src='uploaded_images/$imagini[3]' alt='Third slide'>";
                        ?>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>
    <div class="butoane_anunturi">
        <input type="button" value="Anunturile mele" class="btn btn-dark butoane_anunturi" onClick="Javascript:window.location.href = 'anunturile_mele.php';" />
        <input type="button" value="Adauga un anunt" class="btn btn-dark butoane_anunturi" onClick="Javascript:window.location.href = 'anunt_nou.php';" />
        <input type="button" value="Toate anunturile" class="btn btn-dark butoane_anunturi" onClick="Javascript:window.location.href = 'anunturi.php';" />
    </div>

<?php
require 'scriptbootstrap_part.php';
require 'footer_part.php';
?>   
</body>

</html>

<?php
}
else {
    header("Location: index.php");
    exit();
}

?>
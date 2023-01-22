<?php
session_start();
include "db_conn.php";
require 'head_part.php';

?>

<body>
    <?php
    require 'navigator_part.php';
    ?>
    <div class="rama">
        <form class="form" action="upload_anunt.php" method="post" enctype="multipart/form-data">
            <h1>Adauga un anunt:</h1>
            <br>
            <div class="forminput">
                <label>Nume produs:</label>
                <input type="text" name="nume_produs" >
            </div>

            <br>
            <div class="forminput">
                <label>Pret: </label>
                <input type="text" name="pret_produs">
            </div>
            <br>
            <div class="forminput">
                <label>Fotografie: </label>
                <input type="file" name="imagine">
            </div>

            <br>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="upload">Adauga anunt</button>
            </div>
        </form>
    

    </div>
<?php    
require 'scriptbootstrap_part.php';
?>
</body>

</html>
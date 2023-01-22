<?php
session_start();
include "db_conn.php";
require 'head_part.php';
?>

<body>
<?php
    require 'navigator_part.php';
    echo "<h1>Salut, ".$_SESSION['user_name']."!</h1>"
?>
Pentru a vedea anunturile tale da click pe "Anunturile tale".
   
<?php
require 'scriptbootstrap_part.php';
?>    
</body>
</html>
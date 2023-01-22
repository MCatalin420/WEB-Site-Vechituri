<?php
session_start();
include "db_conn.php";
require 'head_part.php';

?>

<body>
<?php
    require 'navigator_part.php';
?>
<h3 class="titlu-tabel">Toate anunturile: </h3>
<?php
    $query="SELECT * FROM produse";
    if ($result_set = mysqli_query($conn,$query)) {
    echo "<table>
    <tr>
      <th>Nume produs</th>
      <th>Pret</th>
      <th>Imagine</th>
      <th>Postat de</th>
    </tr>";
    while($row = $result_set->fetch_array(MYSQLI_ASSOC)){
    
        $nume = $row['nume_produs'];
        $pret = $row['pret'];
        $imagine = $row['imagine'];
        $autor = $row['autor'];
    
    echo "<tr><td>" .$nume."</td><td>" . $pret . "</td><td><img style='width:25vh;'src=uploaded_images/" . $imagine . "></td><td>" . $autor . "</tr>";
    }
    
     $result_set->close();
    }
    ?>
    </table>
   
<?php
require 'scriptbootstrap_part.php';
?>    
</body>
</html>
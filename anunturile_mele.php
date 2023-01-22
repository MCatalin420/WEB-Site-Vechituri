<?php
session_start();
include "db_conn.php";
require 'head_part.php';

?>

<body>
<?php
    require 'navigator_part.php';
?>
<h3 class="titlu-tabel"> Anunturile tale: </h3>  
<?Php
require "db_conn.php";
$autor = $_SESSION['user_name'];

$query="SELECT * FROM produse WHERE autor LIKE '$autor' ";
if ($result_set = mysqli_query($conn,$query)) {
echo "<table>
<tr>
  <th>Nume produs</th>
  <th>Pret</th>
  <th>Imagine</th>
</tr>";
while($row = $result_set->fetch_array(MYSQLI_ASSOC)){

    $nume = $row['nume_produs'];
    $pret = $row['pret'];
    $imagine = $row['imagine'];

echo "<tr><td>" .$nume."</td><td>" . $pret . "</td><td><img style='width:25vh' src=uploaded_images/" . $imagine . "></td></tr>";
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
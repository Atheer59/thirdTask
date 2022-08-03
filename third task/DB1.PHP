<?php
$con = mysql_connect('localhost', 'root', '') or die (mysql_error());
mysql_select_database('values') or die (mysql_error());

    $v = $_GET['val'];
    mysqli_query($con, "INSERT INTO vget (G_Val) VALUES ('$v')");


 ?>

<?php

/* 
 * Acceder a base de datos y extraer un elemento
 
 */

$mySqli = mysqli_connect("localhost", "martin", "1q2w3e4r", "listatareas");
$res = mysqli_query($mySqli,"SELECT * from usuarios" );
$row = mysqli_fetch_assoc($res);

while ($row!=NULL) {
    echo var_dump($row);
    $row = mysqli_fetch_assoc($res);
    echo "<br>";
}

    
?>
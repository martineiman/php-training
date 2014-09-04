<?php

/* 
 * Acceder a base de datos y extraer un elemento
 
 */

$usu= 'Lucho Gaba';
/*$mySqli = mysqli_connect("localhost", "martin", "1q2w3e4r", "listatareas");
$res = mysqli_query($mySqli,"SELECT * from usuarios" );
$row = mysqli_fetch_assoc($res);

while ($row!=NULL) {
    echo var_dump($row);
    $row = mysqli_fetch_assoc($res);
    echo "<br>";
}
*/
function tareasXusu($usu){
    $mySqli = mysqli_connect("localhost", "martin", "1q2w3e4r", "listatareas");
    $res = mysqli_query($mySqli,"SELECT usuId FROM `usuarios` WHERE `usuNyA`= '$usu'" );
     $user = mysqli_fetch_assoc($res);
    $res2= mysqli_query($mySqli,"SELECT tareaNombre FROM `tareas` WHERE `usuId`=".$user['usuId'] );
    
    $row = mysqli_fetch_assoc($res2);
    
    while ($row!=NULL) {
    echo "<li>".$row['tareaNombre']."</li>";
    $row = mysqli_fetch_assoc($res);
    echo "<br>";
    
    }
 
}
tareasXusu($usu);
    
?>


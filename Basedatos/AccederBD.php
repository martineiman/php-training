<?php

/* 
 * Acceder a base de datos y extraer un elemento
 
 */

$usu= 'Lucho Gaba';

/**
 * 
 * @param type $usu
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
 
 
 /**
  * 
  * @param type $usuNyA
  * @param type $usuPuesto
  */
    function cargarUsu($usuNyA, $usuPuesto){
        $mySqli = mysqli_connect("localhost", "martin", "1q2w3e4r", "listatareas");
        $res=mysqli_query($mySqli,"INSERT INTO usuarios (usuNyA, usuPuesto)
            VALUES ('$usuNyA', '$usuPuesto')");
        if($res===TRUE){
            echo 'Exito usuario cargado!';
        }
    }
    
    
   /**
    * 
    * @param type $tareaNombre
    * @param type $tareaTime
    * @param type $tareaVisible
    * @param type $usuId
    */
    function cargarTarea($tareaNombre,$tareaTime,$tareaVisible,$usuId){
        $mySqli = mysqli_connect("localhost", "martin", "1q2w3e4r", "listatareas");
        $res=mysqli_query($mySqli,"INSERT INTO tareas (tareaNombre,tareaTime,tareaVisible,usuId)
            VALUES ('$tareaNombre','$tareaTime',$tareaVisible,$usuId)");
        if($res===TRUE){
            echo 'Exito tarea cargada!';
        }else{
            echo mysqli_error($mySqli);//devuelve error generado por mysql
        }
    }

    //cargarUsu();
    //cargarTarea('cargar datos','00:50:00',1,2);
    
 ?>
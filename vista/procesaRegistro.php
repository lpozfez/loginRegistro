<?php
    //Comprobar si el usuario está autenticado
    $nombre=$_POST['nombre'];
    $pass=$_POST['pass'];
    $rol=$_POST['rol'];
    $ficheroDatos=file_get_contents('usuarios.txt');
    //Creamos la String del nuevo usuario
    $nuevoUsu= "\n".$nombre.";".$pass.";".$rol;
    //Concatenamos el usuario nuevo al String del fichero de datos
    $ficheroDatos=$ficheroDatos.$nuevoUsu;
    //Añadimos el String completo al fichero
    $escrito=file_put_contents('usuarios.txt',$ficheroDatos);
    
    if ($escrito!=false){
        echo 'fichero escrito';
    }else{
        echo 'error';
    }
  
?>
<?php
    //Comprobar si el usuario está autenticado
    $nombre=$_POST['nombre'];
    $pass=$_POST['pass'];
    $rol=$_POST['rol'];
    $ficheroDatos=file_get_contents('usuarios.txt');

    $nuevoUsu= $nombre.";".$pass.";".$rol;
    $ficheroDatos=$ficheroDatos.'\n'.$nuevoUsu;
    
    file_put_contents('usuarios.txt',$ficheroDatos);

    echo 'usuarios.txt';
    
  
?>
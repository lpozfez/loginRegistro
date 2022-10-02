<?php

    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];

    $rolMindundi='usuario';
    $admin='administrador';
    
    $ficheroDatos=file_get_contents('../modelo/usuarios.txt');//recogemos el fichero en forma de string
    $user= explode("\n",$ficheroDatos);//array con cada línea del string
    $encontrado=false;
    $i=0;
    //Funcion que Traemos los datos
    while($encontrado==false && $i<count($user)){//Esto a fichero de datos
        //Por cada fila separamos los datos y los añadimos al array de ususarios $user
        $usu=trim(explode(";",$user[$i])[0]);
        $cont=trim(explode(";",$user[$i])[1]);
        $rol=trim(explode(";",$user[$i])[2]);

        
        if($usuario==$usu && $pass==$cont){
            $encontrado=true;
        }else{
            $i++;
        }
    }
   //Comprobamos el rol del usuario logueado

   if($encontrado==true){
        if($rol==$admin){
            header("Location: ../vista/registroUsu.html");
        }else{
            echo 'Bienvenido '.$usu;
            echo '<br>';
            echo 'Contraseña '.$pass;
            echo '<br>';
            echo 'Rol '.$rol;
        }
   }else{
        echo 'Usted no está registrado';
   }
    

        
?>
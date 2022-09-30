<?php

    $ficheroDatos=file_get_contents('usuarios.txt');//recogemos el fichero en forma de string
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];

    $rolMindundi='usuario';
    $admin='administrador';
    $user= explode("\n",$ficheroDatos);//array con cada línea del string
    $encontrado=false;
    $i=0;
    while($encontrado==false && $i<count($user)){//Esto a fichero de datos
        //Por cada fila separamos los datos y los añadimos al array de ususarios $user
        $usu=explode(";",$user[$i])[0];
        $cont=explode(";",$user[$i])[1];
        $rol=explode(";",$user[$i])[2];

        
        if($usuario==$usu && $pass==$cont){
            $encontrado=true;
        }else{
            $i++;
        }
        
        
    }
  
    

    if($encontrado){
        
        if($rol==$rolMindundi){
            
            echo 'Bienvenido '.$usu.'<br>';
            echo 'Contraseña =>'.$cont.'<br>';
            echo 'rol =>'.$rol.'<br>';
            

        }else{
            var_dump ($rol);
            //header("Location: registroUsu.html");
        }
    }else{
        echo 'Usted no está registrado';
    }

        
?>
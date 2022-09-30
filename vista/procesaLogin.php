<?php

    $ficheroDatos=file_get_contents('usuarios.txt');//recogemos el fichero en forma de string
    $usuario=$_POST['usuario'];
    $pass=$_POST['pass'];

    $rolMindundi='usuario';
    $admin='administrador';
    $user= explode("\n",$ficheroDatos);//array con cada línea del string
    
    foreach($user as $valor){
        //Por cada fila separamos los datos y los añadimos al array de ususarios $user
        $usu=explode(";",$valor)[0];
        $cont=explode(";",$valor)[1];
        $rol=explode(";",$valor)[2];
    
        
        echo 'Este es el usuario del formu'.$usuario;
        echo 'Este es contraseña del formu'.$pass;

        if($usuario==$usu && $pass==$cont){
            if($rol==$rolMindundi){
                echo 'Bienvenido '.$usu.'<br>';
                echo 'Contraseña: '.$cont.'<br>';
                echo 'Rol: '.$rol.'<br>';
                break;
            }elseif($rol==$admin){
                header("Location: registroUsu.html" );
                break;
            }
        }else{
            echo 'Usted no está registrado';
            
        }
        echo 'Este es el usuario del array'.$usu;
        echo 'Este es contraseña del formu'.$cont;
        
    }








    
    /*for($i=0;$i<count($user);$i++){
        $usu[$i]=explode(";",$user[$i]);
        echo $usu[0];
        echo $usu[1];
        echo $usu[2];
    }*/
        
?>
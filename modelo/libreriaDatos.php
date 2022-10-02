<?php
    include '/formularioLoginRegistroUsuario/helpers/validacion.php';
    //función que accede al archivo de datos
    function accesoFichero(){
        $ficheroDatos=file_get_contents('usuarios.txt');//recogemos el fichero en forma de string
        $user= explode("\n",$ficheroDatos);//array con cada línea del string
        $encontrado=false;
        $i=0;
        while($encontrado==false && $i<count($user)){
            //Por cada fila separamos los datos y los añadimos al array de ususarios $user
            $usu=trataDatos(explode(";",$user[$i])[0]);
            $cont=trataDatos(explode(";",$user[$i])[1]);
            $rol=trataDatos(explode(";",$user[$i])[2]);
            max8Caracteres($usu);
            max8Caracteres($cont);
            
            if($usuario==$usu && $pass==$cont){
                $encontrado=true;
                return $user;
            }else{
                $i++;
            }
        }
    }
    //funcion que escribe en el fichero
    function escribeFichero(){
        $ficheroDatos=file_get_contents('usuarios.txt');
        //Creamos la String del nuevo usuario
        $nuevoUsu= "\n".$nombre.";".$pass.";".$rol;
        //Concatenamos el usuario nuevo al String del fichero de datos
        $ficheroDatos=$ficheroDatos.$nuevoUsu;
        //Añadimos el String completo al fichero
        $escrito=file_put_contents('usuarios.txt',$ficheroDatos);
        return $escrito;
    }

    //Funcion que impide que se registren dos usuarios con el mismo nombre de usuario. Si el usuario ya existe impide que se utilice de nuevo
    function usuarioNoRepetir($nuevoUsu){

    }
?>
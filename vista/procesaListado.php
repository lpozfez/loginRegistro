<?php
    $ficheroDatos=file_get_contents('usuarios.txt');
    $user= explode("\n",$ficheroDatos);
    $i=0;
    
    
    echo '<h1 class="titulo">Listado de usuarios</h1>';
    echo '<form name="lista"  action="procesaListado.php" method="post"><textarea name="listausu" rows="20" cols="40" disabled>'.$ficheroDatos.'</textarea></form>';




?>
<?php
   //Funcion que cambia los datos para su tratamiento, elimina espacios y transforma caracteres especiales
   function trataDatos($dato){
      $dato=trim($dato);
      $dato=htmlspecialchars($dato);
      return $dato;
   }

   //Función que impide que se pongan más de 8 caracteres. Devuelve el dato si es <=8 o false si es mayor
   function max8Caracteres($dato){
      $nCaracteres=strlen($dato);
      if($nCaracteres<=8){
         return $dato;
      }else{
         return false;
      }
   }

   //Función que impide que se pongan más de 10 caracteres. Devuelve el dato si es <=8 o false si es mayor
   function max10Caracteres($dato){
      $nCaracteres=strlen($dato);
      if($nCaracteres<=10){
         return $dato;
      }else{
         return false;
      }
   }

   


    
?>
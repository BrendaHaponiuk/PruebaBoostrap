<?php


function validarNombre() {
 if (strlen($_POST["nombre"])==0)
 {
   return false;
 }else
 {
   return true;
 }
}

 function validarEntero($valor, $opciones=null){
    if(filter_var($valor, FILTER_VALIDATE_INT, $opciones) === FALSE){
       return false;
    }else{
       return true;
    }
 }
 function validaEmail($valor){
    if(filter_var($valor, FILTER_VALIDATE_EMAIL) === FALSE){
       return false;
    }else{
       return true;
    }
 }



 ?>

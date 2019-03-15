<?php

// SI VINO POR POST
if ( $_POST ) {
  // VALIDAR
$errores = validarRegistracion()

if ( !empty($errores) ) {
  //registrar

  header("location:home.php");exit;
}
}
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/general.css">


</head>
<body>





<div class="container">
  <form action="registro.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nombre</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="Nombre" placeholder="Tu nombre..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Apellido</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="Apellido" placeholder="tu apellido..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Pais</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Argentina</option>
          <option value="canada">Uruguay</option>
          <option value="usa">Brasil</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Comentarios</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Escribe algo lindo.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

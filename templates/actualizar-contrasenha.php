<?php 
include '../dynamics/config.php';
session_start();

// usamos la variable de sesion $id_perfil = $_SESSION["id_perfil"] para saber en que fila actualizar

// Podemos definir un formulario en esta página cuyo action sea esta misma, por lo que debemos preguntarnos 
// si ya lo hemos recibido.

// Si ya recibimos el formulario, el contenido sera la contraseña. Debemos aplicarle trim, hashearla y 
// hacer un update en perfil, cambiando la columna contrasenha con where id_perfil = $id_perfil

// podemos preguntarnos si el update fue exitoso, en ese caso, mostrar un div de ÉXITO.


?>

<?php 
    include '../dynamics/config.php';
    $conexion = connect();
    var_dump($_SESSION);

    //Debemos aplicarle trim, hashearla
    function esPasswordSegura($pass) {
        if (strlen($pass) < 6) 
            return false;
        $tieneMayus = false;
        $tieneNum = false;

        for ($i = 0; $i < strlen($pass); $i++) {
            if (ctype_upper($pass[$i])) 
                $tieneMayus = true;
            if (ctype_digit($pass[$i]))             
                $tieneNum = true;
        } return ($tieneMayus && $tieneNum);
    }

    function hasheaPassword($pass){

        //Generamos el hash
        $passwordHasheada = password_hash($pass, PASSWORD_DEFAULT);
        return $passwordHasheada;
    }
    // usamos la variable de sesion $id_perfil = $_SESSION["id_perfil"] para saber en que fila actualizar
    $id_perfil = $_SESSION["id_perfil"];
    $error="";
    $exito="";
    // Podemos definir un formulario en esta página cuyo action sea esta misma, por lo que debemos preguntarnos 
    // si ya lo hemos recibido.

    // Si ya recibimos el formulario, el contenido sera la contraseña. 
    // hacer un update en perfil, cambiando la columna contrasenha con where id_perfil = $id_perfil
    if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['contrasenha'])){
        
        $password=($_POST['contrasenha']);

        if(!esPasswordSegura($password))
            $error = "Contraseña débil. Debe tener mínimo 6 caracteres, una mayúscula y un número.";
        else{
            $passwordSegura = hasheaPassword($password);
            $sql="UPDATE perfil SET contrasenha= '$passwordSegura' WHERE id_perfil=$id_perfil";
            // podemos preguntarnos si el update fue exitoso, en ese caso, mostrar un div de ÉXITO.
            if(mysqli_query($conexion, $sql)){
                $exito = "¡Datos actualizados con éxito y total seguridad!";
            }else{
                $error = "Error al actualizar en la base de datos.";
            }
        }
    }
    


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Diego Ivan Salcedo Perez">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/formalu.css">
    <title>Formulario del alumno</title>
</head>
<body>
    <header>
        <div id="iconos_unam">
            <div class="logo-unam">
                <a href="https://www.unam.mx/">
                    <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp">
                <a href="http://enp.unam.mx/">
                    <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-enp6">
                <a href="https://www.prepa6.unam.mx/ENP6/_P6/">
                    <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escuedo de la UNAM">
                </a>
            </div>
            <div class="logo-475años">
                <img class="iconos"src="../statics/img/logo-475años.png" alt="Escuedo de la UNAM">
            </div>
        </div>
        <div id="titulo_encabezado">
            <a href="./index.php">
                <p>SAETEC</p>
            </a>
        </div>
        <div id="iconos_ete">
            <div class="logo-compu">
                <a href="https://www.ete.enp.unam.mx/CM.html">
                    <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
                </a>
            </div>
            <div class="logo-ete"></div>
                <a href="https://www.ete.enp.unam.mx/">
                    <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
                </a>
            </div>
            <div class="logo-40años"></div>
                    <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
            </div>
        </div>
    </header>
    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?> 
    <br>
    <!-------------------------------------------FORMS------------>
    <form action="" method="POST">
        <div class="form-grid">

            <div class="input-group">
                <label for="nocta">Ingresa tu nombre de usuario:</label>
                <input type="text" name="nocta" id="ipt-id_perfil" placeholder="123456789" required>
            </div>

            <div class="input-group">
                <label for="nombre">Ingresa tu nueva contraseña</label>
                <input type="password" name="contrasenha" id="ipt-contrasenha" placeholder="Escribe tu nueva contraseña" required>
            </div>
            
        </div>
        <button type="submit" name="subir" class="btn-submit">Confirmar</button>
        <div id="msj_contrasenha">
            <?php
                if($exito != "")
                    echo "<p style='color:green;'>" . $exito . "</p>";
                    
                if($error != "")
                    echo "<p style='color:red;'>" . $error . "</p>";
            ?>
        </div>
    </form>
    <!------------------------FOOTER --------------------------------->
    <?php
        include 'footer.php';
    ?> 

    
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Diego Ivan Salcedo Perez">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/cuestionario.css">
    <title>Formulario del alumno</title>
</head>
<body>
    <header>
        <div id="iconos_unam">
            <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
            <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escudo de la UNAM">
            <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escudo de la UNAM">
            <img id="aniv" class="iconos"src="../statics/img/logo-475años.png" alt="Escudo de la UNAM">
        </div>
        <div id="titulo_encabezado">
            <p>SAETEC</p>
        </div>
        <div id="iconos_ete">
            <img class="iconos" src="../statics/img/logo_compu.jpeg" alt="Escudo de el Estudio Tecnico Especializado en Computacion">
            <img class="iconos" src="../statics/img/logo-ete.png" alt="Escudo de los Estudios Tecnicos de la UNAM">
            <img class="iconos" src="../statics/img/logo-ete-40años.png" alt="Escudo de los 40 años Estudios Tecnicos de la UNAM"> 
        </div>
    </header>
    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
            include 'barrapro.php';
    ?> 
    <br>
    <!-------------------------------------------FORMS------------>
    <form action=" " method="POST">
        <div class="form-semanal">

            

        </div>
        
        <button type="submit" class="btn-submit">Confirmar</button>
    </form>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>
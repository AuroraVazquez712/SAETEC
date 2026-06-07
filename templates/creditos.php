<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">
    <link rel="stylesheet" href="../statics/style/creditos.css">
    
    <title>SAETEC</title>
</head>
<body>
    <!------------------------Barra de búsqueda------------------------>
    <header>
        <div id="iconos_unam">
            <img class="iconos" src="../statics/img/logo-escudo-unam.png" alt="Escudo de la UNAM">
            <img class="iconos" src="../statics/img/logo_enp.jpeg" alt="Escudo de la ENP">
            <img class="iconos" src="../statics/img/logo-prepa6.png" alt="Escudo de la ENP6">
            <img class="iconos" src="../statics/img/logo-475años.png" alt="Escudo de la 475-años">
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
    <!------------------------BARRA DE NAVEGACIÓN------------------------>
<<<<<<< HEAD:templates/creditos.html
    <nav class="nav">
        <div class="container">
            <nav class="menu">
                <a href="./index.html">Inicio</a>
                <a href="./alumno.html">Alumno</a>
                <a href="./profesor.html">Profesor</a>
                <a href="#">Admin</a>
            </nav>
        </div>
    </nav>
    <!------------------------CRÉDITOS------------------------>
=======
    <?php
            include 'barrapro.php';
    ?>
>>>>>>> f77ae3b11149cbd932033fc98a807e37737bd60c:templates/creditos.php
    <br>
    <h1>StatHorses</h1>
    <div id="equipo">
        <div>
            <h2>Desarrolladores</h2>
            <p>García Hernández Frida</p>
            <p>Rosales Tecuapetla Fatima Elvira</p>
            <p>Salcedo Pérez Diego Iván<p>
            <p>Vázquez Robles Aurora Betshabé</p>
        </div>
        <div>
            <h2>Asesores</h2>
            <p>Gonzalez Falcon Jorge Alberto</p>
            <p>López Morales Fernando Samuel</p>
        </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>
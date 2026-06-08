<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/act.css">
    <title>Mis actividades</title>
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
<<<<<<< HEAD
    <div class="cuadrado">Mis actividades</div>
    <div id="columna">
        <div class="grupo">Grupo 61D</div>
        <div id="listact">
            <div><button class="button" type="activ">Actividad 1</button></div>
            <div><button class="button" type="activ">Actividad 2</button></div>
            <div><button class="button" type="activ">Actividad 3</button></div>
            <div><button class="button" type="activ">Actividad 4</button></div>
            <div><button class="button" type="activ">Actividad 5</button></div>
            <div><button class="button" type="activ">Actividad 6</button></div>
        </div>
        <div id="actividades">
            <div class="tareas">
                <h1>Tareas</h1>
                <p>Entregadas:</p>
                <p>Faltantes:</p>
            </div>

            <div class="calificaciones">
                <h1>Calificaciones</h1>
                    <p>Modulo 1:</p>
                    <p>Modulo 2:</p>
                    <p>Modulo 3:</p>
                    <p>Modulo 4:</p>
                    <p>Modulo 5:</p>
            </div>
        </div>
    </div>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
=======
    <!------------------------BARRA DE NAVEGACIÓN--------------------------------->
    <?php
        include 'barrapro.php';
    ?>
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <?php
        include 'barra-lateral.php';
    ?>
    <!----------------------------------------CONTENIDO------------------------------------------->
    <main>
        <div class="cuadrado">Mis actividades</div>
        <div class="grupo">Grupo 61D</div>
        <div id="contenido">
            <div id="acts"> 
                <div><button class="button" type="activ">Actividad 1</button></div>
                <div><button class="button" type="activ">Actividad 2</button></div>
                <div><button class="button" type="activ">Actividad 3</button></div>
                <div><button class="button" type="activ">Actividad 4</button></div>
                <div><button class="button" type="activ">Actividad 5</button></div>
                <div><button class="button" type="activ">Actividad 6</button></div>
            </div>
            <div class="info">
                <p>Tareas</p>
                <p>Entregadas</p>
                <p>No entregadas</p>
            </div>
        </div>
    </main>
    <!-------------------------FOOTER------------------------------------------------------>
    <?php
            include 'footer.php';
    ?>
>>>>>>> 044bf468edcf2891bdf7e02dc45c568896fe9aa7
</body>
</html>
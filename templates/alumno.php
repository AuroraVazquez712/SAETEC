<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: Aurora Vazquez">
    <meta name="description" content="Vista del Alumno">
    <link rel="stylesheet" href="../statics/style/alumno.css">
    <link rel="stylesheet" href="../statics/style/barra-busqueda-head.css">

    <title>SAETEC: Alumno</title>
</head>
<body>
    <!---------------ENCABEZADO--------------------------->
    <header>
        <div id="iconos_unam">
            <img class="iconos"src="../statics/img/logo-escudo-unam.png" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo_enp.jpeg" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo-prepa6.png" alt="Escuedo de la UNAM">
            <img class="iconos"src="../statics/img/logo-475años.png" alt="Escuedo de la UNAM">
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
    <!-------------------------------------BARRA LATERAL----------------------------------------->
    <aside>
        <div class="capa"> </div>
        <!--	--------------->
        <input type="checkbox" id="btn-menu"/>
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <h2>324308734</h2>
                    <a href="./perfil-alumno.html">Mi perfil</a>
                    <hr>
                    <a href="vista-perf-alumnos.html">Mis calificaciones</a>
                    <hr>
                    <a href="vista-perf-alumnos.html">Mis actividades</a>
                    <hr>
                    <a href="#">¿Cómo te has sentido?</a>
                    <hr>
                    <a href="../docs/2019_Acuerdo_Rectoria_02.pdf">Políticas de seguridad</a>
                    <hr>
                    <a href="#">Modificar datos</a>
                </nav>
                <label for="btn-menu">✖️</label>
            </div>
        </div>
    </aside>
    <!----------------------------------------CONTENIDO------------------------------------------->
    
    <main>
        <div id="contenido">
            <div id="forms">
                <a  href="./formalu.html">
                    <img src="../statics/img/forms.png" class="responsive-img" alt="Imagen animada de un puma que te pide completar tu perfil">
                </a>
            </div>
            <div id="material">
                <div class="extras">
                    <a href="./material_extra.html">
                        <img src="../statics/img/material_extra.png" alt="Imgen animada para ver material extra">
                    </a>
                </div>
                <div class="contacto">
                    <img src="../statics/img/contacta_profesor.png" alt="Imagen animada para contactar al profesor">
                </div>
            </div>
            <div id="coments">
                <img src="../statics/img/tips_alumnos.png" alt="Imagen animada para ver tips para sobrevvivir a la ete">
            </div>
        </div>
        
    </main>
    <?php
            include 'footer.php';
    ?>
    
</body>
</html>
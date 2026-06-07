<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autor" content="Equipo 4: StatHorses">
    <meta name="description" content="Mi página de encabezado">
    <link rel="stylesheet" href="../statics/style/formalu.css">
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
    <nav class="nav">
        <div class="container">
            <nav class="menu">
                <a href="./index.html">Inicio</a>
                <a href="./perfil-alumno.html">Perfil</a>
                <a href="./acerca-de.html">Acerca</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
    </nav>
    <br>
    <form action=" " method="POST">
        <div class="form-grid">

            <div class="input-group">
                <label for="id_perfil">Número de cuenta:</label>
                <input type="text" name="id_perfil" id="ipt-id_perfil" placeholder="123456789" required>
            </div>

            <div class="input-group">
                <label for="nombre">Nombre(s):</label>
                <input type="text" name="nombre" id="ipt-nombre" placeholder="Escribe tu(s) nombre(s)" required>
            </div>

            <div class="input-group">
                <label for="apellidopat">Apellido paterno:</label>
                <input type="text" name="apellidopat" id="ipt-apellidopat" placeholder="Escribe tu apellido" required>
            </div>

            <div class="input-group">
                <label for="apellidomat">Apellido materno:</label>
                <input type="text" name="apellidomat" id="ipt-apellidomat" placeholder="Escribe tu apellido">
            </div>

            <div class="input-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" name="correo" id="ipt-correo" placeholder="hola@gmail.com" required>
            </div>

            <div class="input-group">
                <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" id="ipt-fecha_nacimiento" required>
            </div>

            <div class="input-group">
                <label for="grupo">Grupo:</label>
                <input type="text" name="grupo" id="ipt-grupo">
            </div>

        </div>
        
        <button type="submit" class="btn-submit">Confirmar</button>
    </form>
    <!------------------------FOOTER --------------------------------->
    <?php
            include 'footer.php';
    ?> 
</body>
</html>
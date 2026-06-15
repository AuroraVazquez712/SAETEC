<?php
    session_start();
?>
<nav class="nav">
    <div class="container">
        <div class="btn-menu">
            <label for="btn-menu">☰</label>
        </div>
        <nav class="menu">
            <?php
            //session_start();
            $ruta_inicio = "";
            //var_dump($_SESSION);
            //A, E, P
            
            switch ($_SESSION["tipo_usuario"]) {
                case 'A':
                    $ruta_inicio = './admin.php';
                    break;
                case 'E':
                    $ruta_inicio = './alumno.php';
                    break;
                case 'P':
                    $ruta_inicio = './profesor.php';
                    break;
                default:
                    $ruta_inicio = "";
                    break;
            }
            echo "";
            ?>
            <a href="<?php echo $ruta_inicio ?>">Inicio</a>
            <a href="./perfil-alumno.php">Perfil</a>
            <a href="./acerca-de.php">Acerca</a>
            <a href="./creditos.php">Creditos</a>
        </nav>
    </div>
</nav>
<br>
<?php
    // Importante: Aquí no se debe ejecutar session_start(), se debe hacer en la pagina 
    // desde la que se llama a esta barra.
    $ruta_inicio = "";
?>
<nav class="nav">
    <div class="container">
        <div class="btn-menu">
            <label for="btn-menu">☰</label>
        </div>
        <nav class="menu">
            <?php
            //var_dump($_SESSION);
            //A, E, P
            
            switch ($_SESSION["rol"]) {
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

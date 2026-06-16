<?php
session_destroy();
    $cerrar = session_destroy();
    if ($cerrar=true) {
        echo "Se cerró tu sesión, te esperamos";
        header("Location: ./index.php");
        exit();
    }
?>
<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "SAETEC";

    function connect () {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
    } 
<<<<<<< HEAD
    $conexion = connect ();

    ?>
=======
    $conexion = connect();
    ?>
>>>>>>> feature/diego

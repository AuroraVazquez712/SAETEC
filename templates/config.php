<?php
    const DBHOST = "localhost";
    const DBUSER = "root";
    const PASSWORD = "";
    const DB = "SAETEC";

    function connect () {
        $conexion = mysqli_connect(DBHOST, DBUSER, PASSWORD, DB);
        return $conexion;
    } 
    $conexion = connect ();

    // conexion o config
    //require './conexion.php';
    // nos conectamos
    $con = connect();

    $nocta = "325156992";
    // $nocta = $_POST["nocta"];
    //definimos nuestra query
    $query = "select * from cuestionario";
    $result = mysqli_query($con, $query);

    $num_filas = mysqli_num_rows($result);
    echo $num_filas;
    echo "<br>";
    //$row = mysqli_fetch_assoc($result);
    //var_dump($row);

    // No spreguntamos si la consulta no devolvio filas
    if($row = mysqli_fetch_assoc($result)){
        echo "Si habia <br>";
        var_dump($row);
    } else {
        echo "No habia";
    }

    while($row = mysqli_fetch_assoc($result)){
        var_dump($row);
        echo "<br>";
    }
    ?>
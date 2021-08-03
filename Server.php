<?php

    function ObtenerConexion ()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "dbrevista";
        $conn =  mysqli_connect($servername, $username, $password,$database);
        if (!$conn) {
            die('No pudo conectarse: ' . mysqli_error());
        }
        // echo 'Conectado satisfactoriamente';
        // mysqli_close($conn);
        return $conn;
    }
   
?>
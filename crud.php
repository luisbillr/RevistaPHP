<?php
   
      require('Server.php');
    // if (isset($_POST['submit'])) {
        
        // $titulo = "titulo";//$_POST['apellido'];
        // $contenido ="contenido"; //$_POST['apellido'];
        // $fechacreacion =date("d/m/Y"); //$_POST['apellido'];
        // $publicadopor ="luisbillr"; //$_POST['apellido'];
        
       //echo guardarProducto($titulo,$contenido,$fechacreacion,$publicadopor);
    // }

    function GuardarArticulo($titulo, $contenido,$publicadopor)
    {
        $conn = ObtenerConexion();
        $result = $conn->query("INSERT INTO articulos (Titulo,Contenido,PublicadoPor) 
        values ('$titulo','$contenido','$publicadopor')");
        return $result;
    }
    function GetArticulos(){
        $conn = ObtenerConexion();
        return $sentencia = $conn->query("select * from articulos order by idarticulo desc limit 10;");
    }
?>
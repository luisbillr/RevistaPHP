<?php

    require "crud.php";
    $contenido = "";
    //echo "Hola";
    if (isset($_POST['submit'])) {
        $archivo = fopen($_FILES['fileToUpload']['tmp_name'], 'rb')  or die("Problemas al abrir Archivo"); //fopen("miarchivo.txt","r") or die("Problemas al abrir Archivo");
        while(!feof($archivo))
        {
            $getDatos= fgets($archivo);
            $saltodelinea = nl2br($getDatos);
            $contenido = $contenido . $saltodelinea;
        }
        $titulo = $_POST['txtTitulo'];
        $publicadopor ="luisbillr"; 
        if(GuardarArticulo($titulo,$contenido,$publicadopor)){
            echo "Informacion Guardada";
        }else{
            echo "Error al guardar archivo";
           
        }
    }

?>
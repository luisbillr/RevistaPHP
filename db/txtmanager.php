<?php

    $archivo = fopen($_FILES['fileToUpload']['tmp_name'], 'rb')  or die("Problemas al abrir Archivo"); //fopen("miarchivo.txt","r") or die("Problemas al abrir Archivo");
    while(!feof($archivo))
    {
        $getDatos= fgets($archivo);
        $saltodelinea = nl2br($getDatos);
        echo $saltodelinea;
    }
?>
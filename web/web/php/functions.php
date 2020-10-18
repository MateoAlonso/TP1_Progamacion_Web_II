<?php
    function GrabarArrayJson ($carpeta, $nombre_archivo, $array ) {
        //preguntar si el directorio existe, y si no, crearlo
        if ( !file_exists($carpeta)){
            mkdir($carpeta);
        }
        $fp  = fopen($carpeta. "/" . $nombre_archivo, 'w');
        fwrite($fp, json_encode($array));
        fclose($fp);
    }

    function LeerArrayJson ($carpeta, $nombre_archivo) {
        if ( !file_exists($carpeta)){
            mkdir($carpeta."/".$nombre_archivo);
        }
        $fp  = fopen($carpeta. "/" . $nombre_archivo, 'r');
        $json =  fread($fp, filesize($carpeta. "/" . $nombre_archivo) );
        fclose($fp);
        $array = json_decode($json,true);
        return $array;
    }
?>
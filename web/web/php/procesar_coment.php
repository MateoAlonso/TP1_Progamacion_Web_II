<?php
    require_once("functions.php");
    $form=LeerArrayJson("../Json","comentarios.json");
    $index=count($form)+1;
    $form[$index]=
    [
        "email"=>$_GET["email"],
        "score"=>$_GET["score"],
        "id_producto"=>$_GET["id_producto"],
        "comentario"=>$_GET["comentario"],
    ];



    GrabarArrayJson("../Json","comentarios.json",$form);
    header("Location: ../index.php?pagina=detalles&producto=$_GET[id_producto]");
    exit();
?>
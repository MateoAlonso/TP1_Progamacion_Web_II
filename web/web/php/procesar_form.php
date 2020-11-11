<?php
    require_once("functions.php");
    $form=LeerArrayJson("../Json","formulario.json");
    $index=count($form)+1;
    $form[$index]=
    [
        "nombre"=>$_GET["nombre"],
        "apellido"=>$_GET["apellido"],
        "tel"=>$_GET["tel"],
        "correo"=>$_GET["correo"],
        "comentarios"=>$_GET["comentarios"],
        "seccionEmpresa"=>$_GET["seccionEmpresa"],
        "aceptaTOS"=>$_GET["aceptaTOS"],
    ];
    


    GrabarArrayJson("../Json","formulario.json",$form);
    header("Location: ../index.php?pagina=contacto");
    exit();
?>
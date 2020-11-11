<?php
require_once("php/productos.php");
require_once("php/categorias.php");
require_once("php/header.php");
if (isset($_GET["pagina"])) {
    $pagina=$_GET["pagina"];
} else {
    $pagina="inicio";
}
switch ($pagina) {
    case 'inicio':
        require_once("php/home.php");
    break;
    case 'detalles':
        require_once("php/detalle.php");
        catchProducto($_GET["producto"]);
    break;
    case 'contacto':
        require_once("php/contacto.php");
    break;

    default:
    # code...
break;
}

require_once("php/footer.php");
?>
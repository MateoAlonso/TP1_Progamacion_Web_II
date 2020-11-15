<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabajo WEB II</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<?php


$array_categorias = json_decode(file_get_contents('Json/categorias.json'),true);
$array_productos= json_decode(file_get_contents('Json/productos.json'),true);

if(isset($_GET['id_categoria']))
  $id_cat = $_GET['id_categoria'];
else
  $id_cat = '';

if(isset($_GET['a_cat']))
    $a_cat = $_GET['a_cat'];
    else
    $a_cat = '';

echo 'Categoria:'.$id_cat;
echo '<br>';
echo '<br>';
echo '<br>';

foreach($array_productos as $producto){

if ($producto['id_categoria'] == $id_cat){

echo '<pre>';
echo print_r($producto);
echo '</pre';

}
}
?>
<form method="get">
<?php
foreach($array_categorias as $categorias){
$cat_nomb = $categorias['nombre'];
$cat_id = $categorias['id_categoria'];
$chequeado = in_array($cat_id,$array_categorias) ? 'checked="cheked"':'' ;
echo '<input type="checkbox"  name="a_cat[]" value="'.$cat_id.'"'.$chequeado.' > '. $cat_nomb;

echo '<br>';
}
?>
<input type="submit">
</form>



<body id="fp" class="margenftfb fpi barrahorizontalno mt-4">
    <br>
    <div class="container-fluid mt-5">
        <section class="row justify-content-center">
            
            <?php
                $array = LeerArrayJson("Json", "productos.json");
                for ($i=1; $i <= count($array); $i++) {
                    
                    // Etiqueta producto
                    
                    echo "<div class='col-xl-3 col12 text-center'>";
                    echo "<h3 class='text-center text-light mt-3'>";
                    
                    require_once("functions.php");
                    echo $array[$i]["nombre"];
                    
                    echo "</h3>";
                    echo "<img class='img-fluid rounded' src='".$array[$i]["imagenchica"]."' width='100' height='100' alt='placeholder'>";
                    echo "<h3 class='h4 text-center text-light mt-3'>";
                    
                    echo "Precio: $" . $array[$i]["precio"];
                    
                    echo "</h3>";
                    echo "<h3 class='h4 text-center text-light mt-3'>";
                    
                    echo substr($array[$i]["descripcion"], 0, 20);
                    
                    echo "</h3>";
                    
                    echo "<a href='index.php?pagina=detalles&producto=".$i."'class='h5 btn btn-primary'>Detalles</a>";
                    
                    echo "</div>";
                }
            ?>

        </section>



    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
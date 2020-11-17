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




    <body id="fp" class="margenftfb fpi barrahorizontalno mt-4">

        <br>

        <div class="container-fluid mt-5">

            <form action="php/procesar_filtrado.php" method="$_GET" enctype="multipart/form-data">
                <div class="form-group mx-3">
                    <label for="exampleFormControlSelect1">Categorías</label>
                    <select name="id_categoria" class="form-control" id="exampleFormControlSelect1">
                        <?php
                            $arrayProductos = LeerArrayJson("Json", "productos.json");
                            $arrayCategorias = LeerArrayJson("Json", "categorias.json");
                            echo "<option value = ''>"."Todos"."</option>";
                            foreach ($arrayCategorias as $categorias => $categoria) {
                                echo "<option value = '$categoria[id_categoria]'>$categoria[nombre]</option>";
                            }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2 mx-3">Filtrar</button>    
            </form>

            <section class="row justify-content-center">
                
                <?php
                    for ($i=1; $i <= count($arrayProductos); $i++) {
                        
                        // Etiqueta producto
                        if (!isset($_GET["id_categoria"])) {
                            $_GET["id_categoria"] = "";
                        }
                        if ($_GET["id_categoria"]==$arrayProductos[$i]["id_categoria"]||$_GET["id_categoria"]=="") {
                            
                            echo "<div class='col-xl-3 col12 text-center'>";
                            echo "<h3 class='text-center text-light mt-3'>";
                        
                            require_once("functions.php");
                            echo $arrayProductos[$i]["nombre"];
                            
                            echo "</h3>";
                            echo "<img class='img-fluid rounded' src='".$arrayProductos[$i]["imagenchica"]."' width='100' height='100' alt='placeholder'>";
                            echo "<h3 class='h4 text-center text-light mt-3'>";
                            
                            echo "Precio: $" . $arrayProductos[$i]["precio"];
                            
                            echo "</h3>";
                            echo "<h3 class='h4 text-center text-light mt-3'>";
                            
                            echo substr($arrayProductos[$i]["descripcion"], 0, 20);
                            
                            echo "</h3>";
                            
                            echo "<a href='index.php?pagina=detalles&producto=".$i."'class='h5 btn btn-primary'>Detalles</a>";
                            
                            echo "</div>";
                        }
                    }
                    ?>

            </section>



        </div>

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>

</html>
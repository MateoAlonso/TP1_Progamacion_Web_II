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

    <div class="container-fluid">
        <section class="row justify-content-center">

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    require_once("functions.php");
                    $array = LeerArrayJson("Json", "productos.json");
                    $index = 1;
                    echo $array[$index]["nombre"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>

                <!-- Acá tendría que mandar a detalle.php el id del producto que está clickeando en el <a>Detalles pero no se como hacerlo -->
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>

            </div>


            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                    $index++;
                    echo $array[$index]["marca"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo "Precio: $" . $array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                    echo substr($array[$index]["descripcion"], 0, 20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>
        </section>



    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
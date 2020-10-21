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
<body id="fp" class="margenftfb fpi barrahorizontalno">
    <div class="container-fluid">
        
        <!-- Acá estoy parado en index.php, no en home.php, por eso hay que linkear las cosas como si estuvieramos en index.php -->
            
        <!-- H1 oculto -->

        <h1 class="d-none">Trabajo WEB II</h1>
            
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

            <!-- Logo -->
    
            <a href="index.php" class="navbar-brand ml-2">
                <img src="img/rolex-40x40.jpeg" alt="placeholder logo" width="40" height="40" class="img-fluid rounded-circle">
            </a>
    
            <!-- Hamburquesa -->
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamb">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Links -->
            <div class="collapse navbar-collapse" id="hamb">
                <ul class="navbar-nav ml-auto mr-2">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="php/contacto.php" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

        <header class="container">
            <h2 class="h1 text-light text-center my-5 fuenteb">Productos: Nuestros relojes</h2>
        </header>
        
        <section class="row justify-content-center">

            <!-- Nuevo producto -->
            <div class="col-xl-3 col12 text-center">
                <h3 class="text-center text-light mt-3">
                    <?php
                        require_once("functions.php");
                        $array=LeerArrayJson("Json","productos.json");
                        $index=1;
                        echo $array[$index]["nombre"];
                    ?>
                </h3>
                <img class="img-fluid rounded" src=<?php echo $array[$index]["imagensrc"]; ?> width="100" height="100" alt="placeholder">
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo "Precio: $".$array[$index]["precio"];
                    ?> 
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
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
                        echo "Precio: $".$array[$index]["precio"];
                    ?>
                </h3>
                <h3 class="h4 text-center text-light mt-3">
                    <?php
                        echo substr($array[$index]["descripcion"],0,20);
                    ?>
                </h3>
                <a href="php/detalle.php" class="h5 btn btn-primary">Detalles</a>
            </div>
        </section>
        
        <!-- Footer  -->

        <section class="containter-fluid bg-dark fixed-bottom">
            <div class="row">
                <div class="card-footer text-muted col-12">
                    <h4 class= "h6 text-center mt-1 ml-3">Alonso, Mateo | Emanuel Vizcarra | Grupo 4 | Programación Web II | 2do Cuatrimestre 2020</h4>
                </div>
            </div>
        </section>
            
    </div>
            
                
                
                
                
                
                
                
                
                
                
                
                
                



    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>   
</body>
</html>
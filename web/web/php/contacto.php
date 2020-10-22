<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body class="fondo margenftfb">
    <div class="container-fluid">

        <!-- H1 oculto -->

        <h1 class="d-none">Pepsi Music</h1>
            
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

            <!-- Logo -->
    
            <a href="../index.php" class="navbar-brand ml-2">
                <img src="../img/rolex-40x40.jpeg" alt="pepsi logo" width="40" height="40" class="img-fluid rounded-circle">
            </a>
    
            <!-- Hamburquesa -->
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamb">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Links -->
            <div class="collapse navbar-collapse" id="hamb">
                <ul class="navbar-nav ml-auto mr-2">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.php" class="nav-link active">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Formulario -->

        <h2 class="text-center text-light mt-5 fuenteb">Formulario de contacto</h2>
        <div id="fp" class="container fc fpc">
            <form class="mt-3" action="../php/procesar_form.php" method="get" enctype="multipart/form-data">
                <fieldset>


                    <label for="nombreid" class="mt-3">Nombre</label>
                    <input id="nombreid" type="text" name="nombre" class="form-control mb-3" placeholder="Ingrese su nombre" required>
                    

                    <label for="apellidoid" class="fuente">Apellido</label>
                    <input id="apellidoid" type="text" name="apellido" class="form-control mb-3" placeholder="Ingrese su apellido" required>

                    <label for="telid" class="fuente">Teléfono</label>
                    <input id="telid" type="number" name="tel" class="form-control mb-3" placeholder="Ingrese su teléfono" required>


                    <label for="correoid" class="fuente">Email</label>
                    <input id="correoid" type="email" name="correo" class="form-control mb-3" placeholder="Ingrese su correo" required>
                    
                    
                    <label for="comentariosid" class="fuente">Comentarios</label>
                    <textarea id="comentariosid" class="form-control" name="comentarios" placeholder="Comentarios" rows="10" maxlength="1200"></textarea>
                    
                    <fieldset class="form-group mt-3">
                        <div class="row">
                          <legend class="col-form-label col-sm-2 pt-0">Sección empresa</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="seccionEmpresa" id="gridRadios1" value="option1" checked>
                              <label class="form-check-label" for="gridRadios1">
                                Administración
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="seccionEmpresa" id="gridRadios2" value="option2">
                              <label class="form-check-label" for="gridRadios2">
                                Envíos
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="seccionEmpresa" id="gridRadios3" value="option3">
                              <label class="form-check-label" for="gridRadios3">
                                Atención al cliente
                              </label>
                            </div>
                          </div>
                        </div>
                    </fieldset>
                    
                    <input class="mt-3" id="condicionesid" type="checkbox" name="aceptaTOS" value="si" required>
                    <label for="condicionesid" class="fuente">Acepta términos y condiciones <a href="#" class="text-primary" target="_blank">Link</a></label>
                    <br>
                    <button class="btn btn-primary mb-3 mt-3">Enviar</button>
                </fieldset>
            </form>
        </div>



        <!-- Footer  -->

        <section class="containter-fluid bg-dark mt-5 fixed-bottom">
            <div class="row">
                <div class="card-footer text-muted col-12 ">
                    <h3 class= "h6 text-center mt-1 ml-3">Alonso, Mateo | Emanuel Vizcarra | Grupo 4 | Programación Web II | 2do Cuatrimestre 2020</h3>
                </div>
            </div>
        </section>
            
    </div>



    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>   
</body>
</html>
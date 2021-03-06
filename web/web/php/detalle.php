<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detalle de producto</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body id="fp" class="margenftfb fpi barrahorizontalno">
  <div class="container-fluid mt-5">
    
    <!-- Mustra el producto con el index que llega -->
    <?php
      function catchProducto($index){
    ?>


    <div clsss="product-block">
      <img class="img-fluid rounded mx-3 mt-5" src=<?php
                                          require_once("functions.php");
                                          $arrayProductos = LeerArrayJson("Json", "productos.json");
                                          $arrayComentarios = LeerArrayJson("Json", "comentarios.json");
                                          
                                          echo $arrayProductos[$index]["imagengrande"];
                                          ?> width="600" height="800" alt="placeholder">
    </div>
    
    <div class="product-block mt-2 mx-3">
      <h3>
        <?php
        echo "Reloj: " . $arrayProductos[$index]["id_producto"];
        ?>
      </h3>
      <div class="product-info">
        <p>
          <?php
          echo $arrayProductos[$index]["nombre"];
          ?>
        </p>
        <p>
          <?php
          echo "Precio: $" . $arrayProductos[$index]["precio"];
          ?>
        </p>
        <p>
          <?php
          echo $arrayProductos[$index]["descripcion"];
          ?>
        </p>
        <p>
          <?php
          echo "Marca : " . $arrayProductos[$index]["marca"];
          ?>
        </p>
        <p>
          <a href="#" class="btn btn-primary">Comprar</a>
        </p>
        
      </div>
    </div>
    
    <form action="php/procesar_coment.php" method="$_GET" enctype="multipart/form-data">
      <div class="form-group mx-3">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
      </div>
      <div class="form-group mx-3">
        <label for="exampleFormControlInput2">Nombre y apellido</label>
        <input type="text" name="nomape" class="form-control" id="exampleFormControlInput2" placeholder="Nombre y apellido">
      </div>
      <div class="form-group mx-3">
        <label for="exampleFormControlSelect1">Puntuación</label>
        <select name="score" class="form-control" id="exampleFormControlSelect1">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      

      <!-- Esto esta oculto, es para ponerle id_producto al comentario -->
      <div class="form-group d-none">
        <input type="text" name="id_producto" value=<?php echo $arrayProductos[$index]["id_producto"]; ?> readonly>
      </div>
      
     
      
      <div class="form-group mx-3">
        <label for="exampleFormControlTextarea1">Comentarios</label>
        <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="200"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mb-2 mx-3">Enviar</button>
    </form>

    <!-- Comentarios anteriores, crea un array temporal donde guarda los últimos 3 comentarios y mustra el comentario del final del array y lo borra, 3 veces -->
    <h3 class="mx-3 mt-2">Comentarios anteriores: </h3>
    <ul class="list-group list-group-flush mx-3">
      <li class="list-group-item">
        <?php
          $arrayComentariosProducto= array();
          $arrayMailComentario= array();
          $arrayScore= array();
            foreach ($arrayComentarios as $comentarios => $comentario) {
              if (  $arrayProductos[$index]["id_producto"] == $comentario["id_producto"]) {
                array_push($arrayComentariosProducto, $comentario["comentario"]);
                array_push($arrayMailComentario, $comentario["email"]);
                array_push($arrayScore, $comentario["score"]);
              }
            }
          if(null!==end($arrayMailComentario)){
            echo "Usuario: ".end($arrayMailComentario);
            array_pop($arrayMailComentario);
            echo "<br>";
          }
          if(null!==end($arrayComentariosProducto)){
            echo "Comentario: ".end($arrayComentariosProducto);
            array_pop($arrayComentariosProducto);
            echo "<br>";
          }
          if(null!==end($arrayScore)){
            echo "Puntuación: ".end($arrayScore);
            array_pop($arrayScore);
          }
        ?>
      </li>
      <li class="list-group-item">
        <?php
          if(null!==end($arrayMailComentario)){
            echo "Usuario: ".end($arrayMailComentario);
            array_pop($arrayMailComentario);
            echo "<br>";
          }
          if(null!==end($arrayComentariosProducto)){
            echo "Comentario: ".end($arrayComentariosProducto);
            array_pop($arrayComentariosProducto);
            echo "<br>";
          }
          if(null!==end($arrayScore)){
            echo "Puntuación: ".end($arrayScore);
            array_pop($arrayScore);
          }
        ?>
      </li>
      <li class="list-group-item">
        <?php
          if(null!==end($arrayMailComentario)){
            echo "Usuario: ".end($arrayMailComentario);
            array_pop($arrayMailComentario);
            echo "<br>";
          }
          if(null!==end($arrayComentariosProducto)){
            echo "Comentario: ".end($arrayComentariosProducto);
            array_pop($arrayComentariosProducto);
            echo "<br>";
          }
          if(null!==end($arrayScore)){
            echo "Puntuación: ".end($arrayScore);
            array_pop($arrayScore);
          }
          unset($arrayComentariosProducto);
        ?>
      </li>
    </ul>

    <?php
    }
    ?>

  </div>
 

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>


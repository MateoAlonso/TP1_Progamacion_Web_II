
    <h1 class="mt-5">Detalle del producto</h1>

    <div clsss="product-block">
      <img class="img-fluid rounded" src=
      <?php 
        require_once("functions.php");
        $array=LeerArrayJson("../Json","productos.json");

        // El index tendria que llegar desde home, en funcion de el boton de Detalle que se clickea
        $index=1;
        
        echo "../".$array[$index]["imagensrc"]; 
      ?> 
      width="100" height="100" alt="placeholder">
    </div>

    <div class="product-block mt-2">
      <h3>
        <?php
          echo "Reloj: ".$array[$index]["id_producto"];
        ?>
      </h3>
      <div class="product-info">
        <p>
          <?php
            echo $array[$index]["nombre"];
          ?>
        </p>
        <p>
          <?php
            echo "Precio: $".$array[$index]["precio"];
          ?>
        </p>
        <p>
          <?php
            echo $array[$index]["descripcion"];
          ?>
        </p>
        <p>
          <?php
            echo "Marca : ".$array[$index]["marca"];
          ?>
        </p>
        <p>
          <a href="#" class="btn btn-primary">Comprar</a>
        </p>

      </div>
    </div>

    <form action="procesar_coment.php" method="$_GET" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Puntuación</label>
        <select name="score" class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>


      <!-- Esto esta oculto, es para ponerle id_producto al comentario -->
      <div class="form-group d-none">
        <input type="text" name="id_producto" value=<?php echo $array[$index]["id_producto"];?> readonly>
      </div>


      <div class="form-group">
        <label for="exampleFormControlTextarea1">Comentarios</label>
        <textarea name="comentario" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mb-2">Enviar</button>
    </form>

    
  
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>   
      
</body>
</html>


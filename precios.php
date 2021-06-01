<?php include 'header.php';?>


  <body>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="display-3 text-center mt-5">Envíos y Costos</h1>
        </div>

      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-md-5">
          <table class="table table-striped table-hover table-bordered shadow-sm" id="tabla-precios">
            <thead>
              <tr>
                <th scope="col">Localidad</th>
                <th scope="col">Costo</th>
              </tr>
            </thead>
            <tr>
              <td>CABA</td>
              <td>$200</td>
            </tr>
            <tr>
              <td>Zona Oeste</td>
              <td>$500</td>
            </tr>
            <tr>
              <td>Zona Sur</td>
              <td>$650</td>
            </tr>
            <tr>
              <td>Zona Norte</td>
              <td>$700</td>
            </tr>
            <tr>
              <td>Provincia de Buenos Aires</td>
              <td>$600</td>
            </tr>
            <tr>
              <td>Interior del País</td>
              <td>$650</td>
            </tr>
          </table>
        </div>

        <div class="col-md-7">
          <div class="card p-4 shadow-lg">
            <h1 class="display-5 text-center">Empresa</h1>
            <hr>
            <img src="images/logo-correo.png" id="img-correo" class="img-fluid justify-content-center p-4" alt=""
              height=auto>
            <hr>
            <p class="text-center">Realizamos envíos a todo el país. Los mismos son a cargo del comprador
              y son realizados por Correo Argentino.

            </p>
          </div>

        </div>
      </div>
<hr>
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center my-3">¡Los productos también se pueden retirar por Zona Oeste!</h1>
            <p class="text-muted text-center">Nos encontramos a unas pocas cuadras de la Estación de Ramos Mejía</p>
          <div>
          <img src="images/direccion.png" class="img-fluid" alt="" >
          </div>

        </div>

      
      </div>

      <hr>
    </div>

    <div class="container">
      <a href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información sobre un artículo" target="_blank" class="btn-wpp"><i class="fab fa-whatsapp p-1" style="color: white;"></i></a>
      <a href="https://instagram.com/headshot.3d" target="_blank" class="btn-ig"><i class="fab fa-instagram p-1" style="color: white;"></i></a>

    </div>
    <?php include_once 'footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
  </body>

  </html>
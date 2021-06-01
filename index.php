<?php include 'header.php';?>


    <body>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1">CALIDAD</h5>
                        <h5>Hacemos cada trabajo siguiendo los mayores estándares de calidad
                        </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1">ECONOMÍA</h5>
                        <h5>Productos con altísima calidad, sin descuidar el bolsillo de los clientes
                        </h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="display-1">COMPROMISO</h5>
                        <h5 class="font-weight-bold">Nos comprometemos a llevar a cabo el deseo del cliente</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>

            </a>
        </div>




        <div class="container p-5">
            <div class="row mt-5">
                <div class="col-md-3 cards">
                    <div class="card p-3 mb-4 shadow-lg border-light">
                        <img src="images/1.png" height="272" width="272" alt="" class="p-3">
                        <p class="text-center display-6">Catálogo</p>
                        <hr>
                        <p class="text-muted text-center">En nuestro catálogo vas a poder encontrar armas que realizamos anteriormente, por lo que su realización es más rápida.
                        </p>
                        <a href="catalogo.php" class="text-center"><button class="btn btn-dark rounded-pill mt-5 px-5">Ir al
                catálogo</button></a>
                    </div>

                </div>
                <div class="col-md-3 cards">
                    <div class="card p-3 mb-4 shadow-lg border-light">
                        <img src="images/bizon.png" alt="" height="272" width="272" class="p-3">
                        <p class="text-center display-6">Otras Armas</p>
                        <hr>
                        <p class="text-muted text-center">También vendemos armas que hicimos muy pocas veces o que nunca hicimos. Si no encontrás la que buscás, la hacemos igual.</p>
                        <a href="precios.php" class="text-center"><button
                class="btn btn-dark rounded-pill mt-5 px-5">¡Comunicate!</button></a>
                    </div>

                </div>
                <div class="col-md-3 cards">
                    <div class="card p-3 mb-4 shadow-lg border-light">
                        <img src="images/bb8.png" alt="" height="272" width="272" class="p-5">
                        <p class="text-center display-6">Objetos</p>
                        <hr>
                        <p class="text-muted text-center">¡También realizamos cualquier tipo de objetos en 3D! Comunicate con nosotros por cualquier consulta que tengas.</p>
                        <a href="precios.php" class="text-center"><button
                class="btn btn-dark rounded-pill mt-5 px-5">¡Comunicate!</button></a>
                    </div>

                </div>
                <div class="col-md-3 cards">
                    <div class="card p-3 mb-4 shadow-lg border-light">
                        <img src="images/envio.svg" alt="" height="272" width="272" class="p-5">
                        <p class="text-center display-6">Envíos</p>
                        <hr>
                        <p class="text-muted text-center">Realizamos envíos a cualquier rincón del país. Los mismos son por Correo Argentino y el gasto corre por el comprador.</p>
                        <a href="precios.php" class="text-center"><button class="btn btn-dark rounded-pill mt-5 px-5">Ver
                Costos</button></a>
                    </div>

                </div>

            </div>

        </div>

        <div class="container">
            <a href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información sobre un artículo" target="_blank" class="btn-wpp"><i class="fab fa-whatsapp p-1" style="color: white;"></i></a>
        </div>
        <br>
        <div class="container card shadow-lg">
            <div class="row featurette">
                <div class="col-md-6 mt-5 ms-md-3 me-4 mb-3">
                    <h1 class="featurette-heading text-center">Como Trabajamos</h1>
                    <hr>
                    <p class="text-muted text-center">En HeadShot 3D, nos comprometemos en brindarle al cliente 
                        la mejor calidad del producto, una atención personalizada y la
                    comodidad al comprar, es por eso que trabajamos con tres medios de pago distintos.
                    <br>Además, trabajamos con un método de seña y reserva, donde el cliente abona el 50% del producto así
                    asegurando la materia prima y el acabado del producto elegido. La fabricación comienza el mismo día en el cual se abone la
                seña, y su tiempo de acabado y entrega varía según el producto y personalización elegida por el cliente.</p>
                </div>
                <div class="col-md-5">
                    <video src="videos/presentacion.mp4" class="pe-5 m-auto mt-5 mb-3" height="320" controls></video>
                </div>
            </div>
        </div>

        <br>
        <footer class="bg-dark text-white">
            <!-- Grid container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mt-4  text-center">
                        <p>© 2021::Todos los derechos reservados </p>
                    </div>
                    <div class="col-md-6 my-3 text-center">
                        <!-- Section: Social media -->

                        <!-- Facebook -->
                        <a class="btn btn-outline-light rounded-circle btn-floating m-1" href="#!" role="button"><i
                class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a class="btn btn-outline-light rounded-circle btn-floating m-1" href="#!" role="button"><i
                class="fab fa-twitter"></i></a>
                        <!-- Instagram -->
                        <a class="btn btn-outline-light rounded-circle btn-floating m-1" href="#!" role="button"><i
                class="fab fa-instagram"></i></a>
                        <!-- wpp -->
                        <a class="btn btn-outline-light rounded-circle btn-floating m-1" href="#!" role="button"><i
                class="fab fa-whatsapp"></i></a>

                        <!-- Section: Social media -->
                    </div>
                    <div class="col-md-3 mt-4 text-center">
                        <p>Headshot 3D - 3D Print ®</p>

                    </div>
                </div>
            </div>
        </footer>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    </html>
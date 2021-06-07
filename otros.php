<?php
include_once 'config.php';
include_once 'entidades/otro-entidad.php';

$otro = new Otro;
$aOtros = $otro->obtenerTodos();

$title='Otros';
include 'header.php';
?>

    <div class="container mt-5">
    <div class="row text-center mb-5">
    <div class="col-md-12 text-center">
    <a href="catalogo.php"><button class="btn btn-outline-dark bg-none">Ver todas las armas</button></a>
    </div>
    </div>
        <div class="row">
            <?php foreach ($aOtros as $otro) : ?>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-content product-box">
                            <div>
                                <img src="images/otros/<?php echo $otro->imagen; ?>" alt="">
                            </div>
                            <div class="product-desc">
                                <small class="text-muted">Otros</small>
                                <a href="#" class="product-name mb-4"><?php echo $otro->nombre; ?></a>

                                <div class="my-2 product-price">
                                    $<?php echo $otro->precio; ?>
                                </div>
                                <div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#exampleModal<?php echo $otro->idotro; ?>">
                                        Info
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?php echo $otro->idotro; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                        <div class="modal-dialog modal-dialog-centered" role="document">

                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $otro->nombre; ?></h5>
                                                    <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="images/otros/<?php echo $otro->imagenmodal; ?>" alt="">
                                                    <p class="text-lead text-center mt-3"><?php echo $otro->descripcion; ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning rounded-pill" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <a href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información sobre un artículo de otra categoría" target="_blank" rel="noopener noreferrer"><button class="btn btn-success w-100">Consultá</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información sobre un artículo" target="_blank" class="btn-wpp"><i class="fab fa-whatsapp p-1" style="color: white;"></i></a>
        <a href="https://instagram.com/headshot.3d" target="_blank" class="btn-ig"><i class="fab fa-instagram p-1" style="color: white;"></i></a>
        <a href="https://twitter.com" target="_blank" class="btn-tw"><i class="fab fa-twitter p-1" style="color: white;"></i></a>
        <a href="https://youtube.com" target="_blank" class="btn-yt"><i class="fab fa-youtube p-1" style="color: white;"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <br><br><br><br><br><br><br><br><br><br>

    
        <?php include 'footer.php' ?>


    </body>
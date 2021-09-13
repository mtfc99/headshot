<?php
include_once 'config.php';
include_once 'entidades/pistola-entidad.php';

$pistola = new Pistola;
$aPistolas = $pistola->obtenerTodos();

$title = 'Pistolas';
include 'header.php';



?>
<div class="container mt-5">
    <div class="row text-center mb-3">
        <div class="col-md-12 text-center">
            <a href="catalogo.php"><button class="btn btn-outline-dark bg-none">Ver todas las armas</button></a>
        </div>
        <small class="text-center text-muted mt-3">Si no ves acá el arma que buscás, comunicate por WhatsApp o Instagram y la hacemos sin problemas!</small>
        <small class="text-center text-muted mt-3">La seña para todas las armas es la mitad de su valor total</small>
    </div>
    <div class="row">
        <?php foreach ($aPistolas as $pistola) : ?>

            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div class="frontcard">
                            <div>
                                <img src="images/pistolas/<?php echo $pistola->imagen; ?>" alt="<?php echo $pistola->nombre ?>" height="204" width="264">
                            </div>
                            <div class="product-desc">

                                <small class="text-muted">Pistolas</small>
                                <a href="#" class="product-name"><?php echo $pistola->nombre; ?></a>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="my-2 product-price">
                                            $<?php echo $pistola->precio; ?>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#exampleModal<?php echo $pistola->idpistola; ?>">
                                            <i class="fas fa-info-circle"></i> Info
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?php echo $pistola->idpistola; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                                <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                                <div class="modal-dialog modal-dialog-centered" role="document">

                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $pistola->nombre; ?></h5>
                                                            <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img class="img-fluid" src="files/<?php echo $pistola->imagen; ?>" alt="<?php echo $pistola->nombre ?>">
                                                            <p class="text-lead text-center mt-3"><?php echo $pistola->descripcion; ?></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a target="_blank" href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información <?php echo " sobre " . $pistola->nombre; ?>"><button class="btn btn-success rounded-pill" type="button"><i class="fab fa-whatsapp"></i> ¡Comunicate!</button></a>
                                                            <button type="button" class="btn btn-danger rounded-pill" data-dismiss="modal">Cerrar <i class="far fa-times-circle"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
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


    <div class="container">
    <?php
    include_once 'rrss.php';
    ?>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
</div>

</body>
<?php include_once 'footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
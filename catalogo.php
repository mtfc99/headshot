<?php
include_once 'config.php';
include_once 'entidades/arma-entidad.php';

$arma = new Arma;
$aArmas = $arma->obtenerTodos();

$title = 'Catálogo';
include 'header.php';
?>

<div class="container mt-5">
    <div class="row my-5">
        <div class="col-md-3 text-center">
        <a href="pistolas.php"><button class="btn bg-none btn-outline-dark px-5">Pistolas</button></a>
        </div>
        <div class="col-md-3 text-center">
        <a href="rifles.php"><button class="btn bg-none btn-outline-dark px-5">Rifles</button></a>
        </div>
        <div class="col-md-3 text-center">
        <a href="escopetas.php"><button class="btn bg-none btn-outline-dark px-5">Escopetas</button></a>
        </div>
        <div class="col-md-3 text-center">
        <a href="otros.php"><button class="btn bg-none btn-outline-dark px-5">Otros</button></a>
        </div>
        
        <small class="text-center text-muted mt-3">Si no ves acá el arma que buscás, comunicate por WhatsApp o Instagram y la hacemos sin problemas!</small>
        <small class="text-center text-muted mt-3">La seña para todas las armas es la mitad de su valor total</small>
       
    </div>


    <div class="row">
        <?php foreach ($aArmas as $arma) : ?>
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div>
                            <img src="images/armas/<?php echo $arma->imagen; ?>" alt="">
                        </div>
                        <div class="product-desc">
                            <small class="text-muted"><?php $arma->fk_idcategoria; ?></small>
                            <a href="#" class="product-name mb-4"><?php echo $arma->nombre; ?></a>

                            <div class="my-2 product-price">
                                $<?php echo $arma->precio; ?>
                            </div>
                            <div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#exampleModal<?php echo $arma->idarma; ?>">
                                    Info
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?php echo $arma->idarma; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                                    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                                    <div class="modal-dialog modal-dialog-centered" role="document">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $arma->nombre; ?></h5>
                                                <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img class="img-fluid" src="images/armas/<?php echo $arma->imagenmodal; ?>" alt="">
                                                <p class="text-lead text-center mt-3"><?php echo $arma->descripcion; ?></p>
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
<?php
    include_once 'pago-consulta.php';

    ?>

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
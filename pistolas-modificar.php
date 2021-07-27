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
                                <div class="row">
                                    <div class="col-md-3">
                                      <a href="pistolas-formulario.php?id=<?php echo $pistola->idpistola; ?>"><button class="btn btn-primary rounded-pill">Modificar</button></a>  
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
<?php
include_once 'config.php';
include_once 'entidades/otro-entidad.php';

$otro = new Otro;
$aOtros = $otro->obtenerTodos();

$title = 'Otros';
include 'header.php';
?>

<div class="container mt-5">
    <div class="row text-center mb-5">
        <div class="col-md-12 text-center">
            <a href="catalogo.php"><button class="btn btn-outline-dark bg-none">Ver todas las armas</button></a>
        </div>
        <small class="text-center text-muted mt-3">Si no ves acá el arma que buscás, comunicate por WhatsApp o Instagram y la hacemos sin problemas!</small>
        <small class="text-center text-muted mt-3">La seña para todas las armas es la mitad de su valor total</small>
    </div>
    <div class="row">
        <?php foreach ($aOtros as $otro) : ?>
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div>
                            
                            <img src="images/otros/<?php echo $otro->imagen; ?>" alt="<?php echo $otro->nombre ?>" height="204" width="264">
                        </div>
                        <div class="product-desc">
                            <small class="text-muted">Otros</small>
                            <a href="#" class="product-name mb-4"><?php echo $otro->nombre; ?></a>

                            <div class="my-2 product-price">
                                $<?php echo $otro->precio; ?>
                            </div>
                            <div class="row">
                            <div class="col-md-12">
                                      <a href="otros-formulario.php?id=<?php echo $rifle->idrifle; ?>"><button class="btn btn-primary rounded-pill"><i class="fas fa-edit"></i> Modificar</button></a>  
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
<?php
    include_once 'rrss.php';
    ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<br><br><br><br><br><br><br><br><br><br>


<?php include 'footer.php' ?>


</body>
<?php
include_once 'config.php';
include_once 'entidades/pistola-entidad.php';

$pistola = new Pistola;
$aPistolas = $pistola->obtenerTodos();

$title = 'Pistolas';
include 'header.php';


// SDK de Mercado Pago
require 'vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-635331116948324-060716-2f798924aef191377c5240ad12d2b3ef-771755248');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Seña de Pistola';
$item->unit_price = 1500;
$item->quantity = 1;
$preference->items = array($item);
$preference->save();
?>

<div class="container mt-5">
    <div class="row text-center mb-3">
        <div class="col-md-12 text-center">
            <a href="catalogo.php"><button class="btn btn-outline-dark bg-none">Ver todas las armas</button></a>
        </div>
        <small class="text-center text-muted mt-3">Si no ves acá el arma que buscás, comunicate por WhatsApp o Instagram y la hacemos sin problemas!</small>
        <small class="text-center text-muted mt-3">La seña para todas las pistolas es de $1500</small>
    </div>
    <div class="row">
        <?php foreach ($aPistolas as $pistola) : ?>

            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div class="frontcard">
                            <div>
                                <img src="images/pistolas/<?php echo $pistola->imagen; ?>" alt="">
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
                                        <div class="col-md-3">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning rounded-pill" data-toggle="modal" data-target="#exampleModal<?php echo $pistola->idpistola; ?>">
                                                Info
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
                                                            <img class="img-fluid" src="images/pistolas/<?php echo $pistola->imagenmodal; ?>" alt="">
                                                            <p class="text-lead text-center mt-3"><?php echo $pistola->descripcion; ?></p>
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
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <a href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información sobre una pistola" target="_blank" rel="noopener noreferrer"><button class="btn btn-success w-100">Consultá</button></a>
                
            </div>

        </div>
        <div class="row text-center mt-2">
            <div class="cho-container">

            </div>
        </div>
    </div>
    <div class="container">
        <a href="https://api.whatsapp.com/send?phone=+5491138950670&text=Hola Headshot 3D! Quisiera más información sobre un artículo" target="_blank" class="btn-wpp"><i class="fab fa-whatsapp p-1" style="color: white;"></i></a>
        <a href="https://instagram.com/headshot.3d" target="_blank" class="btn-ig"><i class="fab fa-instagram p-1" style="color: white;"></i></a>
        <a href="https://twitter.com" target="_blank" class="btn-tw"><i class="fab fa-twitter p-1" style="color: white;"></i></a>
        <a href="https://youtube.com" target="_blank" class="btn-yt"><i class="fab fa-youtube p-1" style="color: white;"></i></a>
    </div>

    <br><br><br><br><br><br><br><br><br><br>
</div>

</body>
<?php include_once 'footer.php'; ?>


<script src="https://sdk.mercadopago.com/js/v2"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('TEST-efe11b02-27a2-41a3-bc9e-c46f0f486279', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: '771755248'
      },
      render: {
            container: '.cho-container', // Indica dónde se mostrará el botón de pago
            label: 'Aboná tu seña', // Cambia el texto del botón de pago (opcional)
      }
});
</script>

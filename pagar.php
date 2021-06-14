<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-635331116948324-060716-2f798924aef191377c5240ad12d2b3ef-771755248');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Seña Pistola';
$item->quantity = 1;
$item->unit_price = 1500;
$preference->items = array($item);
$preference->save();
//curl -X POST \-H "Content-Type: application/json" \-H 'Authorization: Bearer TEST-5857710599542482-060119-55e2d052584abf7fda33fda25320b062-194775487' \"https://api.mercadopago.com/users/test_user" \-d "{'site_id':'MLA'}";

/*Vendedor
{"id":771755248,
"nickname":"TESTGWK86ZAP",
"password":"qatest6987",
"site_status":"active",
"email":"test_user_76546683@testuser.com"}

Comprador
{"id":771754223,
"nickname":"TETE4254453",
"password":"qatest8172",
"site_status":"active","
email":"test_user_25679740@testuser.com"} */

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagar</title>
</head>
<body>
<!--SDK MercadoPago.js V2-->
<div class="cho-container">
<script src="https://sdk.mercadopago.com/js/v2"></script>
</div>

<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('APP_USR-dc124646-e145-427d-b116-4b93b81d647e', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: '635331116948324'
      },
      render: {
            container: '.cho-container', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>

</body>
</html>
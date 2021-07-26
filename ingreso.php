<?php
$title = 'Ingreso';
include 'header.php';

session_start();


if ($_POST) { //si es post, entonces:

    $claveEncriptada = password_hash("admin123", PASSWORD_DEFAULT);
    $usuario = $_REQUEST['txtUsuario'];
    $clave = $_REQUEST['txtClave'];
    $_SESSION['nombre'] = 'Jonathan'; //creamos la sesión con el nombre

    if ($usuario == "admin" && password_verify($clave, $claveEncriptada)) {
        header("Location:agregar-armas.php");
    } else {
        $msg = "Usuario o contraseña incorrecta";
    }
}


?>


<div class="container">
    <div class="row my-4 p-5">
        <div class="col-md-6 card offset-3">
            <h3 class="text-center mt-2">Ingreso para Administrador</h3>
            <form class="text-center" action="" class="user" method="POST">
                <label for="txtUsuario">Usuario</label><br>
                <input type="text" name="txtUsuario" id="txtUsuario" class="form-control rounded-pill mb-3">
                <label for="txtClave">Contraseña</label><br>
                <input type="password" name="txtClave" id="txtClave" class="form-control rounded-pill mb-3">
                <br>
                <button type="submit" class="btn btn-dark btn-user btn-block rounded-pill mb-3">
                    Entrar
                </button>
            </form>



            <?php if (isset($msg)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
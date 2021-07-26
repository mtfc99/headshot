<?php
include_once 'config.php';
include 'entidades/pistola-entidad.php';
session_start();

$title = 'Ingresar Pistolas';

$pistola = new Pistola();
$pistola->cargarFormulario($_REQUEST);

if ($_POST) {

    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            //Actualizo un cliente existente
            $pistola->actualizar();
            header("Location: pistolas.php");
        } else {
            //Es nuevo
            $pistola->insertar();
            header("Location: pistolas.php");
        }
    } else if (isset($_POST["btnBorrar"])) {
        $pistola->eliminar();
        header("Location: pistolas.php");
    }
}

include 'header.php';

?>

<div class="container">
<div class="row mt-5">
   <a href="agregar-armas.php"><button class="btn btn-warning">Agregar otras armas</button></a> 
</div>
    <form enctype=“multipart/form-data” method="POST">
    <div class="row mt-5">
        <div class="col-md-6">
            <label for="txtNombre">Nombre de la Pistola</label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $pistola->nombre ?>"> </div>

<div class=" col-md-6">
            <label for="txtPrecio">Precio de la Pistola</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="<?php echo $pistola->precio ?>">
</div>

<div class=" col-md-12">
            <label for="txtDescripcion">Descripción</label>
            <textarea type="text" class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>

</div>
</div>
<div class="row">
<div class="col-md-4">

</div>

</div>
<button type="submit" class="btn btn-primary my-5" id="btnGuardar" name="btnGuardar">Guardar</button>
<button type="submit" class="btn btn-danger px-4" id="btnBorrar" name="btnBorrar">Borrar</button>
</form>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
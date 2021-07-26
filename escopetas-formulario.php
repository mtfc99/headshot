<?php
include_once 'config.php';
include 'entidades/escopeta-entidad.php';
session_start();

$title = 'Ingresar Escopeta';

$escopeta = new Escopeta();
$escopeta->cargarFormulario($_REQUEST);

if ($_POST) {

    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            //Actualizo un cliente existente
            $escopeta->actualizar();
            header("Location: escopetas.php");
        } else {
            //Es nuevo
            $escopeta->insertar();
            header("Location: escopetas.php");
        }
    } else if (isset($_POST["btnBorrar"])) {
        $escopeta->eliminar();
        header("Location: escopetas.php");
    }
}

include 'header.php';

?>

<div class="container">
    <div class="row mt-5"">
<div class=" col-md-4">
        <a href="agregar-armas.php"><button class="btn btn-warning">Agregar otras armas</button></a>
    </div>
</div>

<form enctype=“multipart/form-data” method="POST">
    <div class="row mt-5">
        <div class="col-md-6">
            <label for="txtNombre">Nombre de la escopeta</label>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $escopeta->nombre ?>">
        </div>

        <div class=" col-md-6">
            <label for="txtPrecio">Precio de la escopeta</label>
            <input type="text" class="form-control" name="txtPrecio" id="txtPrecio" value="<?php echo $escopeta->precio ?>">
        </div>

        <div class=" col-md-12">
            <label for="txtDescripcion">Descripción</label>
            <textarea type="text" class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>

        </div>

    </div>
    <button type="submit" class="btn btn-primary my-5" id="btnGuardar" name="btnGuardar">Guardar</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
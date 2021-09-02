<?php

class Escopeta {
    private $idescopeta;
    private $nombre;
    private $descripcion;
    private $precio;
    private $imagen;
    private $imagenmodal;
    

    public function __construct(){

    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
        return $this;
    }


  public function obtenerTodos(){
        $aEscopetas = array();
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT
    idescopeta,
    nombre,
    precio,
    descripcion,
    imagenmodal,
    imagen
    FROM
    escopetas 

	ORDER BY idescopeta ASC";

        $resultado = $mysqli->query($sql);

        if($resultado){
            while ($fila = $resultado->fetch_assoc()) {
                $obj = new Escopeta();
                $obj->idescopeta = $fila["idescopeta"];
                $obj->nombre = $fila["nombre"];
                $obj->precio = $fila["precio"];
                $obj->descripcion = $fila["descripcion"];
                $obj->imagen = $fila["imagen"];
                $obj->imagenmodal = $fila["imagenmodal"];
                $aEscopetas[] = $obj;
            }
            return $aEscopetas;
        }
    }

    public function cargarFormulario($request)
    {
        $this->idescopeta = isset($request["id"]) ? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"]) ? $request["txtNombre"] : "";
        $this->precio = isset($request["txtPrecio"]) ? $request["txtPrecio"] : "";
        $this->descripcion = isset($request["txtDescripcion"]) ? $request["txtDescripcion"] : "";
    }

    public function insertar()
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        //Arma la query
        $sql = "INSERT INTO escopetas (
                    nombre,
                    precio,
                    descripcion
                    
                ) VALUES (
                    '$this->nombre',
                    '$this->precio',
                    '$this->descripcion'
                );";
        // print_r($sql);exit;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserción
        $this->idescopeta = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function obtenerPorId()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT idescopeta,
                        nombre,
                        precio,
                        descripcion
                FROM escopetas
                WHERE idescopeta = $this->idescopeta";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->idescopeta = $fila["idescopeta"];
            $this->nombre = $fila["nombre"];
            $this->precio = $fila["precio"];
            $this->descripcion = $fila["descripcion"];
        }
        $mysqli->close();

    }

    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE escopetas SET
                nombre = '$this->nombre',
                precio = '$this->precio',
                descripcion = '$this->descripcion'
                WHERE idescopeta = $this->idescopeta" ;

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM escopetas WHERE idescopeta = " . $this->idescopeta;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

}



<?php

class Rifle {
    private $idrifle;
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
        $aRifles = array();
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT
    idrifle,
    nombre,
    precio,
    descripcion,
    imagenmodal,
    imagen
    FROM
    rifles 

	ORDER BY idrifle ASC";

        $resultado = $mysqli->query($sql);

        if($resultado){
            while ($fila = $resultado->fetch_assoc()) {
                $obj = new Rifle();
                $obj->idrifle = $fila["idrifle"];
                $obj->nombre = $fila["nombre"];
                $obj->precio = $fila["precio"];
                $obj->descripcion = $fila["descripcion"];
                $obj->imagen = $fila["imagen"];
                $obj->imagenmodal = $fila["imagenmodal"];
                $aRifles[] = $obj;
            }
            return $aRifles;
        }
    }

    public function cargarFormulario($request)
    {
        $this->idrifle = isset($request["id"]) ? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"]) ? $request["txtNombre"] : "";
        $this->precio = isset($request["txtPrecio"]) ? $request["txtPrecio"] : "";
        $this->descripcion = isset($request["txtDescripcion"]) ? $request["txtDescripcion"] : "";
    }

    public function insertar()
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        //Arma la query
        $sql = "INSERT INTO rifles (
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
        $this->idrifle = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }

    public function obtenerPorId()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT idrifle,
                        nombre,
                        precio,
                        descripcion
                FROM rifles
                WHERE idrifle = $this->idrifle";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->idrifle = $fila["idrifle"];
            $this->nombre = $fila["nombre"];
            $this->precio = $fila["precio"];
            $this->descripcion = $fila["descripcion"];
        }
        $mysqli->close();

    }

    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE rifles SET
                nombre = '$this->nombre',
                precio = '$this->precio',
                descripcion = '$this->descripcion'
                WHERE idrifle = $this->idrifle" ;

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM rifles WHERE idrifle = " . $this->idrifle;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

}



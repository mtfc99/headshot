<?php

class Otro {
    private $idotro;
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
        $aOtros = array();
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT
    idotro,
    nombre,
    precio,
    descripcion,
    imagenmodal,
    imagen
    FROM
    otros 

	ORDER BY idotro ASC";

        $resultado = $mysqli->query($sql);

        if($resultado){
            while ($fila = $resultado->fetch_assoc()) {
                $obj = new Otro();
                $obj->idotro = $fila["idotro"];
                $obj->nombre = $fila["nombre"];
                $obj->precio = $fila["precio"];
                $obj->descripcion = $fila["descripcion"];
                $obj->imagen = $fila["imagen"];
                $obj->imagenmodal = $fila["imagenmodal"];
                $aOtros[] = $obj;

            }
            return $aOtros;
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
        $sql = "INSERT INTO otros (
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
        $this->idotro = $mysqli->insert_id;
        //Cierra la conexión
        $mysqli->close();
    }


    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE otros SET
                nombre = '" . $this->nombre . "',
                precio = '" . $this->precio . "',
                descripcion = '" . $this->descripcion . "'
                WHERE idotro = " . $this->idotro;

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM otros WHERE idotro = " . $this->idotro;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

}
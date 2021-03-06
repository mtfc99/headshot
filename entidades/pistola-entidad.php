<?php

class Pistola
{
    private $idpistola;
    private $nombre;
    private $precio;
    private $descripcion;
    private $imagen;
    private $imagenmodal;


    public function __construct()
    {
    }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
        return $this;
    }

    public function obtenerTodos()
    {
        $aPistolas = array();
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT
    idpistola,
    nombre,
    precio,
    descripcion,
    imagen,
    imagenmodal
    FROM
    pistolas 

	ORDER BY idpistola ASC";

        $resultado = $mysqli->query($sql);

        $aPistolas = array();
        if ($resultado) {
            while ($fila = $resultado->fetch_assoc()) {
                $obj = new Pistola();
                $obj->idpistola = $fila["idpistola"];
                $obj->nombre = $fila["nombre"];
                $obj->precio = $fila["precio"];
                $obj->imagen = $fila["imagen"];
                $obj->descripcion = $fila["descripcion"];
                $obj->imagen = $fila["imagen"];
                $obj->imagenmodal = $fila["imagenmodal"];

                $aPistolas[] = $obj;
            }
            return $aPistolas;
        }
    }


    public function cargarFormulario($request)
    {
        $this->idpistola = isset($request["id"]) ? $request["id"] : "";
        $this->nombre = isset($request["txtNombre"]) ? $request["txtNombre"] : "";
        $this->precio = isset($request["txtPrecio"]) ? $request["txtPrecio"] : "";
        $this->descripcion = isset($request["txtDescripcion"]) ? $request["txtDescripcion"] : "";
    }

    public function insertar()
    {
        //Instancia la clase mysqli con el constructor parametrizado
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        //Arma la query
        $sql = "INSERT INTO pistolas (
                    nombre,
                    precio,
                    descripcion,
                    imagen
                    
                    
                ) VALUES (
                    '$this->nombre',
                    '$this->precio',
                    '$this->descripcion',
                    '$this->imagen'
                );";
        // print_r($sql);exit;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        //Obtiene el id generado por la inserci??n
        $this->idpistola = $mysqli->insert_id;

        

        //Cierra la conexi??n
        $mysqli->close();
    }

    public function obtenerPorId()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT idpistola,
                        nombre,
                        precio,
                        descripcion,
                        imagen                    
                FROM pistolas
                WHERE idpistola = $this->idpistola";
        if (!$resultado = $mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }

        //Convierte el resultado en un array asociativo
        if ($fila = $resultado->fetch_assoc()) {
            $this->idpistola = $fila["idpistola"];
            $this->nombre = $fila["nombre"];
            $this->precio = $fila["precio"];
            $this->descripcion = $fila["descripcion"];
            $this->imagen = $fila["imagen"];
        }
        $mysqli->close();
    }

    public function actualizar()
    {

        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "UPDATE pistolas SET
                nombre = '$this->nombre',
                precio = '$this->precio',
                descripcion = '$this->descripcion',
                imagen = '$this->imagen'
                WHERE idpistola = $this->idpistola";

        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }

    public function eliminar()
    {
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "DELETE FROM pistolas WHERE idpistola = " . $this->idpistola;
        //Ejecuta la query
        if (!$mysqli->query($sql)) {
            printf("Error en query: %s\n", $mysqli->error . " " . $sql);
        }
        $mysqli->close();
    }
}

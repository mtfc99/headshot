<?php

class Arma {
    private $idarma;
    private $nombre;
    private $precio;
    private $categoria;
    private $descripcion;
    private $imagen;
    private $imagenmodal;
    private $fk_idcategoria;

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
        $aArmas = array();
        $mysqli = new mysqli(Config::BBDD_HOST, Config::BBDD_USUARIO, Config::BBDD_CLAVE, Config::BBDD_NOMBRE);
        $sql = "SELECT
    idarma,
    nombre,
    categoria,
    precio,
    descripcion,
    fk_idcategoria,
    imagen,
    imagenmodal
    FROM
    armas 

	ORDER BY idarma ASC";

        $resultado = $mysqli->query($sql);

        if($resultado){
            while ($fila = $resultado->fetch_assoc()) {
                $obj = new Arma();
                $obj->idarma = $fila["idarma"];
                $obj->nombre = $fila["nombre"];
                $obj->precio = $fila["precio"];
                $obj->categoria = $fila["categoria"];
                $obj->descripcion = $fila["descripcion"];
                $obj->imagen = $fila["imagen"];
                $obj->imagenmodal = $fila["imagenmodal"];
                $obj->fk_idcategoria = $fila["fk_idcategoria"];
                $aArmas[] = $obj;

            }
            return $aArmas;
        }
    }

}

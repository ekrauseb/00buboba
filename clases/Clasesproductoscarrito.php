<?php

class Producto {
    public $Tipo_producto;
    public $Marca_producto;

    function __construct($tipo, $marca){
        $this->Tipo_producto=$tipo;
        $this->Marca_producto=$marca;
    }

        public function getTipo_producto(){
        return $this->Tipo_producto;
        }
        public function getMarca_producto(){
		return $this->Marca_producto;
		}
}

class PedidoCarrito extends Producto { 
    public $_Id;
	public $Cantidad_producto;
    public $Color_producto;
    public $Precio;
    public function __construct( $_Id, $tipo, $marca, $precio){
        parent::__construct($tipo, $marca);
        $this->_Id = $_Id;
        $this->Precio = $precio;
    }
    public function get_Id(){
        return $this->_Id;
    }
    public function set_Id($id){
        $this->_Id = $id;
    }

    public function getCantidad_producto(){
        return $this->Cantidad_producto;
        } 
    public function setCantidad_producto($Kant){
        $this->Cantidad_producto=$Kant;
    } 
    public function getColor_producto(){
        return $this->Color_producto;
        } 
	public function setColor_producto($Kol){
        $this->Color_producto=$Kol;
    } 
    public function getPrecio()
    {
        return $this->Precio;
    }

}





?>

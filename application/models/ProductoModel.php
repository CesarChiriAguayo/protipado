<?php
    class ProductoModel extends CI_Model{
        public $id;
        public $codigo;
        public $producto;
        public $descripcion;
        public $precio_venta;
        public $precio_compra;
        public $stock;

        public function __construct(){
            $this->load->database();
        }

        public function nuevo($codigo, $producto, $descripcion, $precio_venta, $precio_compra, $stock){
            $this->codigo = $codigo;
            $this->producto = $producto;
            $this->descripcion = $descripcion;
            $this->precio_venta = $precio_venta;
            $this->precio_compra = $precio_compra;
            $this->stock = $stock;
            return $this->db->insert('productos', $this);
        }

        public function guardarCambios($id, $codigo, $producto, $descripcion, $precio_venta, $precio_compra, $stock){
            $this->id = $id;
            $this->codigo = $codigo;
            $this->producto = $producto;
            $this->descripcion = $descripcion;
            $this->precioVenta = $precio_venta;
            $this->precioCompra = $precio_compra;
            $this->stock = $stock;
            return $this->db->update('productos', $this, array("id" => $id));
        }

        public function todos(){
            return $this->db->get("productos")->result();
        }

        public function eliminar($id){
            return $this->db->delete("productos", array("id" => $id));
        }

        public function uno($id){
            return $this->db->get_where("productos", array("id" => $id))->row();
        }

        public function porCodigoDeBarras($codigoDeBarras){
            return $this->db->get_where("productos", array("codigo" => $codigoDeBarras))->row();
        }
    }
?>
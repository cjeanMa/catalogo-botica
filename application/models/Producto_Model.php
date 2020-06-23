<?php
class Producto_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        function get_all_productos(){
                $this->db->order_by('idProducto', 'desc');
                return $this->db->get('producto')->result_array();
        }

        function get_producto($id){
                $this->db->where('idProducto', $id);
                return $this->db->get('producto')->result_array();
        }
}
<?php
class Categoria_Model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        function get_all_categorias(){
                $this->db->order_by('idCategoria', 'desc');
                return $this->db->get('categoria')->result_array();
        }

        function get_categoria($id){
                $this->db->where('idCategoria', $id);
                return $this->db->get('categoria')->result_array();
        }
}
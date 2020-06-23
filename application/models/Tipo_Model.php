<?php
class Tipo_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        function get_all_tipos(){
                $this->db->order_by('idTipo', 'desc');
                return $this->db->get('tipo')->result_array();
        }

        function get_tipo($id){
                $this->db->where('idTipo', $id);
                return $this->db->get('tipo')->result_array();
        }
}
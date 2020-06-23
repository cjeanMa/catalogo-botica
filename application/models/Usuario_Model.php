<?php
class Usuario_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        function get_all_usuarios(){
                $this->db->order_by('idUsuario', 'desc');
                return $this->db->get('usuario')->result_array();
        }

        function get_usuario($id){
                $this->db->where('idUsuario', $id);
                return $this->db->get('usuario')->result_array();
        }
}
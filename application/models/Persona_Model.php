<?php
class Persona_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        function get_all_personas(){
                $this->db->order_by('idPersona', 'desc');
                return $this->db->get('persona')->result_array();
        }

        function get_persona($id){
                $this->db->where('idPersona', $id);
                return $this->db->get('persona')->result_array();
        }

        /*Buscar persona por idUsuario*/
        function get_persona_usuario($idUsuario){
                $this->db->where('idUsuario', $idUsuario);
                return $this->db->get('persona')->row_array();
        }
}
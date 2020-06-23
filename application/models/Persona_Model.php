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
}
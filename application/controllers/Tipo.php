<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Categoria_Model');
		$this->load->model('Tipo_Model');
	}

	public function index()
	{
		echo "Hola Usuario";
	}

	function cateoriaByTipoAjax(){
		if($this->input->is_ajax_request()){
            $datos = $this->input->post();
            if(isset($datos)){
                if($this->Categoria_Model->get_categoria($datos['idCat'])){
                    $data['tipos'] = $this->Tipo_Model->get_tipo_categoria($datos['idCat']);
                    $this->load->view('ajax/listTipos',$data);
                }
            }
        }
    }

}

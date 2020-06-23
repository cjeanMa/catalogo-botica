<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Categoria_Model');
		$this->load->model('Producto_Model');
	}

	
	public function index()
	{	
		$data['productos'] = $this->Producto_Model->get_all_productos();
		$data['_view'] = "producto/portal";
		$this->load->view('layouts/portal',$data);
	}
}

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
		$data['productosSalud'] = $this->Producto_Model->get_productos_categoria(1,4);
		$data['productosProteccion'] = $this->Producto_Model->get_productos_categoria(2,4);
		$data['javascript'] = array('portal/index.js');
		$data['_view'] = "producto/portal";
		$this->load->view('layouts/portal',$data);
	}

	public function producto($idProducto){
		$data['producto'] = $this->Producto_Model->get_producto($idProducto);
		$data['_view'] = "producto/portalProducto";
		$this->load->view('layouts/portal_views', $data);
	}

	public function salud(){
		$data['productos'] = $this->Producto_Model->get_productos_categoria(2);
		$data['categoria'] = $this->Categoria_Model->get_categoria(2);
		$data['_view'] = "producto/catalogo";
		$this->load->view('layouts/portal_views',$data);

	}

	public function proteccion(){
		$data['productos'] = $this->Producto_Model->get_productos_categoria(1);
		$data['categoria'] = $this->Categoria_Model->get_categoria(1);
		$data['_view'] = "producto/catalogo";
		$this->load->view('layouts/portal_views',$data);

	}

	public function maternidad(){
		$data['productos'] = $this->Producto_Model->get_productos_categoria(3);
		$data['categoria'] = $this->Categoria_Model->get_categoria(3);
		$data['_view'] = "producto/catalogo";
		$this->load->view('layouts/portal_views',$data);

	}
}

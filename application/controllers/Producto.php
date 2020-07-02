<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Producto extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == null) {
			redirect('admin');
		} else {
			$this->load->model('Usuario_Model');
			$this->load->model('Producto_Model');
			$this->load->model('Tipo_Model');
			$this->load->model('Categoria_Model');
			$this->load->library('session');
			$this->load->library('upload');
			$this->load->helper(array('url'));
		}
	}

	public function index()
	{
		$data['productos'] = $this->Producto_Model->get_all_productos();
		$data['tipos'] = $this->Tipo_Model->get_all_tipos();
		$data['categorias'] = $this->Categoria_Model->get_all_categorias();
		$data['_view'] = "producto/viewProductos";
		$this->load->view('layouts/main', $data);
	}


	public function add()
	{
		if (isset($_POST) && count($_POST) > 0) {
			var_dump($this->input->post('imagenProducto'));
			$params = array(
				'nombreProducto' => $this->input->post('nombreProducto'),
				'precioProducto' => $this->input->post('precioProducto'),
				//'imagenProducto' => $this->input->post('imagenProducto'),
				'descripcionProducto' => $this->input->post('descripcionProducto'),
				'idTipo' => $this->input->post('tipoProducto')
			);

			$idProducto = $this->Producto_Model->add_producto($params);

			$this->uploadImagen($idProducto);

			redirect('producto/index');
		} else {
			$data['categorias'] = $this->Categoria_Model->get_all_categorias();
			$data['javascript'] = array('producto/addProducto.js');
			$data['_view'] = 'producto/addProducto';
			$this->load->view('layouts/main', $data);
		}
	}

	private function uploadImagen($idProducto)
	{
		$config['overwrite']			= TRUE;
		$config['upload_path']          = 'assets/villaFarma/img/img-products/';
		$config['allowed_types']        = 'jpg|png|JPG|PNG|jpeg';
		$config['file_name']			= "imgProduct" . $idProducto;
		$config['max_size']             = 2048;


		//$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('imagenProducto')) {
			var_dump($this->upload->display_errors());
		} else {
			$info = array('upload_data' => $this->upload->data());
			$data = array(
				'imagenProducto' => $info['upload_data']['file_name']
			);
			if ($this->Producto_Model->get_producto($idProducto)) {
				echo "producto reconocido";
				$this->Producto_Model->update_producto($idProducto, $data);
			} else {
				echo "No se reconoció producto";
				$this->uploadImagen($idProducto);
			}
		}
	}
	/* Funcion para editar */

	public function edit($idProducto)
	{
		if (isset($_POST) && count($_POST) > 0) {
			$params = array(
				'nombreProducto' => $this->input->post('nombreProducto'),
				'precioProducto' => $this->input->post('precioProducto'),
				//'imagenProducto' => $this->input->post('imagenProducto'),
				'descripcionProducto' => $this->input->post('descripcionProducto'),
				'idTipo' => $this->input->post('tipoProducto')
			);

			$this->Producto_Model->update_producto($idProducto, $params);

			$this->uploadImagen($idProducto);
			redirect('producto/index');

			//redirect('producto/index');

		} else {
			$data['producto'] = $this->Producto_Model->get_producto($idProducto);
			$data['tipos'] = $this->Tipo_Model->get_all_tipos();
			$data['categorias'] = $this->Categoria_Model->get_all_categorias();
			$data['javascript'] = array('producto/addProducto.js');
			$data['_view'] = 'producto/editProducto';
			$this->load->view('layouts/main', $data);
		}
	}

	/*
     * Deleting producto
     */
	function remove($idproducto)
	{
		$producto = $this->Producto_model->get_producto($idproducto);

		// check if the producto exists before trying to delete it
		if (isset($producto['idproducto'])) {
			$this->Producto_model->delete_producto($idproducto);
			redirect('producto/index');
		} else
			show_error('The producto you are trying to delete does not exist.');
	}
}

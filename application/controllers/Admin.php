<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Usuario_Model');
        $this->load->model('Persona_Model');
        $this->load->model('Producto_Model');
        $this->load->model('Tipo_Model');
        $this->load->model('Categoria_Model');
        $this->load->library('session');
    }
	public function index() 
	{
        if($this->session->userdata('username')!==null){
            $data['_view'] = "template/admin/main";
            $this->load->view('layouts/main',$data);
        }   
        else{
            $this->load->view('admin/login');
        }
    }

    public function cerrarSesion(){
        $hola = session_destroy();
        echo $hola;
        redirect('admin');
    }
    
    public function confirmacion(){
        $user = $this->input->post('userName');
        $pass = sha1($this->input->post('password'));
        $result = $this->Usuario_Model->verificar($user, $pass);
        if($result){
            $data_persona = $this->Persona_Model->get_persona_usuario($result['idUsuario']);
            $data_session = array(
                'username'  => $result['userName'],
                'nombre'     => $data_persona['nombrePersona'],
                'apellidoPaterno' => $data_persona['apellidoPaterno'],
                'apellidoMaterno' => $data_persona['apellidoMaterno']
            );        
            $this->session->set_userdata($data_session);
            /* $data['_view'] = "productos";
            $this->load->view('layouts/main',$data); */
            redirect('admin');
        }
        else{
            $data['mensaje'] = "Usuario o Contraseña incorrecta";
            $this->load->view('admin/login',$data);
        }
    }

    public function Productos(){
        $data['productos'] = $this->Producto_Model->get_all_productos();
        $data['tipos'] = $this->Tipo_Model->get_all_tipos();
        $data['categorias'] = $this->Categoria_Model->get_all_categorias();
        $data['_view'] = "producto/viewProductos";
        $this->load->view('layouts/main', $data);
    }
}

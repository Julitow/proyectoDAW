<?php
/**
 * Created by Sergio y Julio.
 * Date: 28/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perfil extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_cliente');
    }

    public function index(){

        // if(se ha iniciado una sesion){ mostrar datos usario } else { formulario de inicar sesión }

        $data['title'] = "Mi Perfil";

        $this->load->view('templates/header', $data);
        $this->load->view('perfil/ver_perfil'); //, $p); $p --> datos del usuario
        $this->load->view('templates/footer');

    }

}
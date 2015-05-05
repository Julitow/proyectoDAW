<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index($page = "home"){

        $this->load->model('model_oferta');
        $parametros['lista'] = $this->model_oferta->ver_tres_ultimas_ofertas();
        // rand(min, max) --> generar un número aleatorio para que el banner publicitario cambie
        $parametros['publi'] = rand(1,6);

        // $data['title'] --> Inidica el título de la página = <title>$title</title>
        $data['title'] = ucfirst($page); // ucfirst(String) --> Transforma la primera letra en mayúscula

        $this->load->view('templates/header', $data);
        $this->load->view($page, $parametros);
        $this->load->view('templates/footer');

    }
}

?>
<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index($page = "home"){

        // $data['title'] --> Inidica el título de la página = <title>$title</title>
        $data['title'] = ucfirst($page); // ucfirst(String) --> Transforma la primera letra en mayúscula

        $this->load->view('templates/header', $data);
        $this->load->view($page, $data);
        $this->load->view('templates/footer', $data);

    }
}

?>
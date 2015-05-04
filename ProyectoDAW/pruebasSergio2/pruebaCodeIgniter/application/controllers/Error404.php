<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Error404 extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){

        $data['title'] = "ERROR! Página no encontrada";

        $this->load->view('templates/header', $data);
        $this->load->view('error_404');
        $this->load->view('templates/footer');

    }
}
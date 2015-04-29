<?php
/**
 * Created by Sergio y Julio.
 * Date: 28/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class PoliticasCookies extends CI_Controller{

    public function index(){

        $data['title'] = "Políticas de Cookies";

        $this->load->view('templates/header', $data);
        $this->load->view('politicasCookies');
        $this->load->view('templates/footer');

    }

}
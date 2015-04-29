<?php
/**
 * Created by Sergio y Julio.
 * Date: 28/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Publicidad extends CI_Controller{

    public function index(){

        $data['title'] = "Publicidad";

        $this->load->view('templates/header', $data);
        $this->load->view('publicidad');
        $this->load->view('templates/footer');

    }

}
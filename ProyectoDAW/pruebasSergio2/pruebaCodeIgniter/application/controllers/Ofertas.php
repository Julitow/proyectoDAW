<?php
/**
 * Created by Sergio y Julio.
 * Date: 24/04/2015
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ofertas extends CI_Controller{

    // Funcion que muestra todas las ofertas
    public function index(){

        $this->load->model('model_oferta');
        $ofertas['lista'] = $this->model_oferta->ver_ofertas();

        $data['title'] = "Ofertas de Trabajo";

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_ofertas', $ofertas);
        $this->load->view('templates/footer');

    }

    // Funcion que devuelve la oferta según su ID
    private function buscar_oferta($id){
        $sol = false;

        $this->load->model('model_oferta');
        $oferta = $this->model_oferta->ver_oferta($id);

            if($oferta->id == $id){
                $sol = $oferta;
            }

        return $sol;
    }

    // Funcion que muestra la oferta según su ID
    public function ver_oferta($id){

        $data['title'] = "No existe la oferta";
        $oferta['oferta'] = $this->buscar_oferta($id);

        if($oferta){
            $data['title'] = $oferta['oferta']->titulo;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/ver_oferta', $oferta);
        $this->load->view('templates/footer');

    }

    // Funcion que crea una nueva oferta
    private function crear_oferta($titulo, $descripcion){

        $this->load->model('model_oferta');
        $nueva_oferta = array(
            'titulo' => $titulo,
            'descripcion' => $descripcion
        );

        $this->db->insert('ofertas', $nueva_oferta);
    }

    public function nueva_oferta(){

        //crear_oferta($titulo, $descripcion);
        $data['title'] = "Nueva Oferta";

        $this->load->view('templates/header', $data);
        $this->load->view('ofertas/oferta_creada', $ofertas);
        $this->load->view('templates/footer');
    }
}


